<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use App\Http\Requests\ListingContactRequest;
use App\Services\Listing\ListingService;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FrontendListingController extends Controller
{
    public $listingService;

    public function __construct()
    {
        if (getOption('LISTING_STATUS', 0) != ACTIVE) {
            abort(404);
        }
        $this->listingService = new ListingService;
    }

    public function list(Request $request)
    {
        $data['pageTitle'] = __('Prroperties');
        $data['listings'] = $this->listingService->getAllActive($request);

        $mapArray = array();
        foreach ($data['listings'] as $listing) {
            if ($listing->latitude && $listing->longitude) {
                $image = assetUrl($listing->folder_name . '/' . $listing->file_name);
                array_push($mapArray, [
                    'coordinates' => ['long' => $listing->longitude, 'lat' => $listing->latitude],
                    "properties" => [
                        'image' => $image,
                        'name' => $listing->name,
                        'popup' => view('listing.frontend.components.details', ['listing' => $listing, 'image' => $image, 'type' => LISTING_CARD_TYPE_ONE])->render()
                    ]
                ]);
            }
        }

        $data['countries'] = $this->listingService->getCountries();
        $data['states'] = $this->listingService->getStatesByCountry($request->country);
        $data['cities'] = $this->listingService->getCitiesByState($request->state);
        $data['bedRooms'] = $this->listingService->getBedRooms();
        $data['bathRooms'] = $this->listingService->getBathRooms();
        $data['kitchens'] = $this->listingService->getKitchenRooms();
        $data['mapData'] = $mapArray;


        return view('listing.frontend.list', $data);
    }

    public function details($slug)
    {
        $data['listing'] = $this->listingService->getBySlug($slug);
        $data['relatedListings'] = $this->listingService->getByCity($data['listing']->city, $slug);
        $data['pageTitle'] = $data['listing']->name;
        
        $data['images'] = $this->listingService->getImages($data['listing']->id);
        $data['information'] = $this->listingService->getInfoByListId($data['listing']->id);

        $mapArray = array();
        if ($data['listing']->latitude && $data['listing']->longitude) {
            $image = assetUrl($data['images']?->first()?->folder_name . '/' . $data['images']?->first()?->file_name);
            array_push($mapArray, [
                'coordinates' => ['long' => $data['listing']->longitude, 'lat' => $data['listing']->latitude],
                "properties" => [
                    'image' => $image,
                    'name' => $data['listing']->name,
                    'popup' => view('listing.frontend.components.details', ['listing' => $data['listing'], 'image' => $image, 'type' => LISTING_CARD_TYPE_ONE])->render()
                ]
            ]);
        }
        $data['mapData'] = $mapArray;
        
        $data['metaDescription'] = "Discover detailed information about {$data['listing']->name}, including features, location, and more. Explore related listings and find your perfect space with ease.";

        return view('listing.frontend.details', $data);
    }

 
 
 
 //home yash 
 public function index(Request $request)
{
    $query = Property::query();

    if ($request->has('state')) {
        $query->where('state', $request->input('state'));
    }

    // Apply any other filters from request

    $properties = $query->get();

    return view('properties.index', compact('properties'));
}

 
 
 

public function contactStore(ListingContactRequest $request)
{
    // Convert the date format
    $startDate = Carbon::createFromFormat('m/d/Y', $request->startDate)->format('Y-m-d');
    
    // Akash - Start
    $endDate = NULL;
    if($request->has('endDate')){
        $endDate = Carbon::createFromFormat('m/d/Y', $request->endDate)->format('Y-m-d');
    }
    // Akash - End

    $request->merge(['startDate' => $startDate, 'endDate' => $endDate]);

    // Redirect with success message or handle accordingly
    return $this->listingService->contactStore($request);
}

}

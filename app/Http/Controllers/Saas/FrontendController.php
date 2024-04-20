<?php

namespace App\Http\Controllers\Saas;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Services\CorePageService;
use App\Services\FaqService;
use App\Services\FeatureService;
use App\Services\HowItWorkService;
use App\Services\PackageService;
use App\Services\SmsMail\MailService;
use App\Services\TestimonialService;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    use ResponseTrait;
    public function index()
    {
        $data['pageTitle'] = __('Live and Work Properties | Short & Long-Term Rentals | Corporate Rentals - Discover Properties');
        $featureService = new FeatureService;
        $data['features'] = $featureService->getActiveAll();
        $howItWorkService = new HowItWorkService;
        $data['howItWorks'] = $howItWorkService->getActiveAll();
        $corePageService = new CorePageService;
        $data['corePages'] = $corePageService->getActiveAll();
        $packageService = new PackageService;
        $data['packages'] = $packageService->getActiveAll();
        $testimonialService = new TestimonialService;
        $data['testimonials'] = $testimonialService->getActiveAll();
        $faqService = new FaqService;
        $data['faqs'] = $faqService->getActiveAll();
        return view('saas.frontend.index', $data);
    }

    public function termsConditions()
    {
        $data['pageTitle'] = __("Terms & Conditions");
        $data['description'] = getOption('terms_conditions');
        
        $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.policy', $data);
        
    }
    
    public function plan()
    {
        $data['pageTitle'] = __("Plan-section");
        $data['description'] = getOption('Plan-section');
        
        $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.plan', $data);
        
    }
    
     public function softwareplan()
    {
        $data['pageTitle'] = __("software_plan");
        $data['description'] = getOption('software-plan');
        
        $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.softwareplan', $data);
        
    }
    
     public function promanagment()
    {
        $data['pageTitle'] = __("promanagment");
        $data['description'] = getOption('promanagment');
        $data['bodyClass'] = 'prop-white-bg';
        $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.promanagment', $data);
        
    }
    
    
    
        public function Prroperties_Maintenance()
    {
       $data['pageTitle'] = __(" Prroperties-Maintenance| Prroperties");
        $data['description'] = ('Keep your property pristine with Prroperties Maintenance. Expert upkeep and repair services for seamless property management.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.Prroperties_Maintenance',$data);
    }
    
    
      public function thankyou()
    {
       $data['pageTitle'] = __(" Prroperties-thankyou| Prroperties");
        $data['description'] = ('Thank you for choosing Prroperties! Your trust in our services fuels our commitment to excellence. We are here to assist with all your property needs');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.thankyou',$data);
    }
    
    public function paymentscollections()
    {
       $data['pageTitle'] = __(" Prroperties-payments & collections| Prroperties");
        $data['description'] = ('Streamline your payments and collections with Prroperties. Our secure, efficient platform ensures hassle-free management of property transactions. Trust Prroperties for all your financial property needs.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.payments&collections',$data);
    }
    
    
     public function partners()
    {
       $data['pageTitle'] = __(" Partner| Prroperties");
        $data['description'] = ('"Collaborate with Prroperties as a valued partner. Together,  shape the future of property management through innovative solutions and strong relationships. Join us in redefining excellence in the real estate sector."');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.partners',$data);
    }
    
    
     public function prropertiescorporate()
    {
       $data['pageTitle'] = __(" Prroperties-prroperties-corporat| Prroperties");
        $data['description'] = ('Prroperties for Corporate offers bespoke real estate solutions tailored to the unique needs of businesses. From office spaces to industrial facilities, our expertise ensures your property aligns perfectly with your corporate strategy and goals');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.prropertiescorporate',$data);
    }
    
     public function prropertiesvacation()
    {
       $data['pageTitle'] = __(" prroperties-vs-vacation-rentals");
        $data['description'] = ('Prroperties vs.Vacation Rentals: Discover the Prroperties advantage for both short-term and long-term property management. Whether you are looking for a vacation getaway or a steady rental income, Prroperties combines the best of both worlds with unmatched service and convenience');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.prropertiesvacation',$data);
    }
    
     public function marketingrentals()
    {
       $data['pageTitle'] = __(" Marketing rental| Prroperties");
        $data['description'] = ('Maximize your rentals visibility and appeal with Prroperties strategic marketing services. Our tailored approach ensures your property stands out in a crowded market, attracting quality tenants quickly and efficiently. Partner with Prroperties for unparalleled marketing expertise in the rental space.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.marketingrentals',$data);
    }
    
    
     public function corent()
    {
       $data['pageTitle'] = __("co-rent | Prroperties");
        $data['description'] = ('Explore co-renting solutions with Prroperties, where flexibility meets convenience. Our co-rent platform is designed to simplify shared living, making it easier to find compatible roommates and manage split expenses seamlessly. Join Prroperties for a hassle-free co-renting experience.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.corent',$data);
    }
    
    
    public function about()
    {
       $data['pageTitle'] = __("All-in-One Real Estate Platform | Prroperties");
        $data['description'] = ('Prroperties offers comprehensive real estate solutions, from rentals to investments. Experience seamless property management and co-ownership opportunities.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.about',$data);
    }
        public function contact()
    {
        
        $data['pageTitle'] = __("Contact Prroperties: Global Office Locations & Support");
        $data['description'] = ('Reach out to Prroperties for all your real estate inquiries. Our global offices and dedicated team are here to help with property solutions.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.contact',$data);
    }
    
            public function blog()
    {
        
        
        $data['pageTitle'] = __("Prroperties Blog: Insights on Live & Work Spaces");
        $data['description'] = ('Explore Prroperties Blog for expert insights on live & work properties, market trends, investment tips, and much more. Stay informed with our latest posts.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.blog',$data);
        
        
        
    }
    
     public function blogg()
    {
        
        
        $data['pageTitle'] = __("Why Location Matters in Real Estate Investment | prroperties");
        $data['description'] = ('Explore why location is crucial in real estate. Learn about key factors that influence property value and investment success. Make informed choices!');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.blogg',$data);
    }
    
    
     public function partner()
    {
        
        
        $data['pageTitle'] = __("Partner | prroperties");
        $data['description'] = ('partner');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.partner',$data);
    }
    
    public function blogh()
    {
        
        
        $data['pageTitle'] = __("8 Key Reasons Real Estate Is a Smart Investment Choice | prroperties");
        $data['description'] = ('Explore 8 compelling reasons why investing in real estate is beneficial. Understand the long-term advantages and potential of property investment');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.blogh',$data);
    }
    
        public function blogj()
    {
        
        
        $data['pageTitle'] = __("Buying a Fixer-Upper: Benefits & Challenges Explained | prroperties");
        $data['description'] = ('Considering a fixer-upper? Discover the advantages and drawbacks of such an investment to determine if its the right choice for your housing needs.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.blogj',$data);
    }
    
    
    public function payment()
    {
        
        
        $data['pageTitle'] = __("pay,ent");
        $data['description'] = ('payment');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.payment',$data);
    }
    
      public function blogk()
    {
        
        
        $data['pageTitle'] = __("Top 10 Neighbourhoods to Live in Los Angeles Revealed | prroperties");
        $data['description'] = ('Discover the best neighbourhoods in Los Angeles. Our guide explores the top 10 areas for living, offering insights into lifestyle, amenities, and culture.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.blogk',$data);
    }
    public function blogl()
    {
        
        
        $data['pageTitle'] = __("15 Expert Home Staging Tips for Effective House Selling | prroperties");
        $data['description'] = ('Maximize your homes appeal with our top 15 staging tips from real estate experts. Learn the secrets to making your house irresistible to buyers.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.blogl',$data);
    }
    public function blogm()
    {
        
        
        $data['pageTitle'] = __("6 things to consider before renting a flat | prroperties");
        $data['description'] = ('Thinking about renting a flat? Consider these 6 crucial factors before making your decision. From location and budget to lease terms and more.');
        $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.blogm', $data);
    }
    
        public function landlord()
        
    {
        $data['pageTitle'] = __("Manage Your Property Seamlessly | Prroperties");
        $data['description'] = ('Want to manage your property with ease? Prroperties offers tailored tools and support, ensuring smooth property management for every user.');
        $data['canonicalUrl'] = \URL::current();
        
     
        return view('saas.frontend.landlord',$data);
    }
    
     public function tenants()
    {
        
        $data['pageTitle'] = __("Prroperties Tenants: Premium Corporate Rentals");
        $data['description'] = ('tenants seeking corporate rentals, Prroperties offers modern, fully-furnished homes with top amenities for a seamless, comfortable stay.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.tenants',$data);
    }
    
    
      public function pricing()
    {
        
        $data['pageTitle'] = __("Affordable Pricing Plans | Prroperties");
        $data['description'] = ('Choose the perfect pricing plan for your needs at Prroperties. From software solutions to maintenance and property management, explore our affordable options. Get started today!');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.pricing',$data);
    }
    
  
    
    
     public function career()
    {
     
      $data['pageTitle'] = __("Build Your Career with Prroperties | Join Our Team");
        $data['description'] = ('Elevate your career at Prroperties, where opportunities abound for growth and innovation. Join our team of professionals in shaping the future of real estate services. Discover your path to success and make a meaningful impact with us.');
     $data['canonicalUrl'] = \URL::current();
     
     
        return view('saas.frontend.career',$data);
    }
    
     public function investment_term()
    {
        $data['pageTitle'] = __("Investment Terms Demystified | Prroperties Guide to Real Estate Investing");
        $data['description'] = ('Unlock the potential of real estate investing with Prroperties. Our comprehensive guide demystifies investment terms, helping you make informed decisions and maximize your returns. Start your investment journey with confidence and the expert insights of Prroperties.');
     $data['canonicalUrl'] = \URL::current();
     
        return view('saas.frontend.investment_term');
    }
    
    
      public function Terms_of_Service()
    {
        $data['pageTitle'] = __("Join Prroperties for a Rewarding Career");
        $data['description'] = ('Join Prroperties for a rewarding career. We are seeking creative, passionate individuals to revolutionize property management. Explore our guiding principles and exciting career opportunities today!');
     $data['canonicalUrl'] = \URL::current();
     
        return view('saas.frontend.Terms_of_Service');
    }
    
    
    
      public function Tenancy_Agreement()
    {
     
     $data['pageTitle'] = __("Tenancy Agreement Guidance | Navigate Your Lease with Prroperties");
        $data['description'] = ('Simplify your tenancy agreements with Prroperties. Our comprehensive guidance helps tenants and landlords understand their leases, ensuring a smooth, transparent rental experience. Trust Prroperties for all your leasing needs');
     $data['canonicalUrl'] = \URL::current();
     
        return view('saas.frontend.Tenancy_Agreement');
    }
    
    
     public function Construction()
    {
        $data['pageTitle'] = __("Construction Solutions | Building Excellence with Prroperties");
        $data['description'] = ('Description: Discover top-tier construction solutions with Prroperties, where innovation meets craftsmanship. From concept to completion, our expertise ensures your project is built to perfection, delivering quality and satisfaction every step of the way');
     $data['canonicalUrl'] = \URL::current();
     
        return view('saas.frontend.Construction');
    }
    
    public function Advisor_services()
    {
     
     $data['pageTitle'] = __("Advisor Services | Expert Guidance for Your Property Decisions - Prroperties");
        $data['description'] = ('Dive into Prroperties Advisor Services for unmatched expert guidance on your property decisions. Whether buying, selling, or investing, our specialists provide the insights you need for success');
     $data['canonicalUrl'] = \URL::current();
     
        return view('saas.frontend.Advisor_services');
    }
    
    
    public function Service_Provider_Terms()
    {
     $data['pageTitle'] = __("Service Provider Terms | Comprehensive Guide for Partners - Prroperties");
        $data['description'] = ('Navigate the terms of service for partners with Prroperties detailed guide. Understand your rights, responsibilities, and the pathway to successful collaboration. Perfect for service providers seeking clarity and alignment with Prroperties');
     $data['canonicalUrl'] = \URL::current();
     
        return view('saas.frontend.Service_Provider_Terms');
    }
    
    
    
   
public function faq()
{
    $data['pageTitle'] = __("Live & Work Properties FAQs - Prroperties");
    $data['description'] = ('Get answers on live & work properties with Prroperties FAQ page. Learn about our unique rental and investment options, and how we can meet your needs.');
    $data['canonicalUrl'] = \URL::current();

    // Define your FAQ schema
    $faqSchema = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => [
            [
                "@type" => "Question",
                "name" => "What is a live-work property?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "A live-work property uniquely combines both residential and commercial elements within a single unit. These properties are typically designed as studios, lofts, or one-bedroom spaces, where you can seamlessly live and work in the same area. This makes them an excellent choice for professionals seeking a convenient space that blends their work and personal life.Not only does this setup cater to short-term rentals for those needing a temporary live-work solution, but it also suits long-term rentals for individuals or businesses aiming for stability. Additionally, live-work properties can serve as an ideal commercial office for rent, offering a versatile space for start-ups or corporate rentals. These properties present an innovative approach to modern living and working, addressing the growing demand for flexible, multipurpose spaces."
                ]
            ],
            [
                "@type" => "Question",
                "name" => "What is a short-term rental?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => ": A short-term rental (STR), often known as a vacation rental, refers to a furnished property that is rented out for brief periods, typically less than six months. These rentals offer a flexible, home-like alternative to traditional hotel accommodations, catering to travellers or those seeking temporary lodging.
Short-term rentals can vary from apartments and houses to unique live and work properties, providing a versatile solution for various needs. They are especially popular among those who require temporary housing, such as corporate rentals for business travellers, or individuals in between long-term rentals. Additionally, some short-term rentals might function as commercial offices for rent, offering a flexible workspace solution. This adaptability makes short-term rentals a preferred choice for many, balancing comfort and convenience in temporary living situations.
To create an FAQ answer for How to find short-term rentals using the provided keywords and incorporating the company name Prroperties, here's a structured response:"
                ]
            ],
            [
                "@type" => "Question",
                "name" => "How do I find short-term rentals?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "Finding the perfect short-term rental can be a straightforward process with the right approach. At prroperties.com, we specialize in connecting you with a variety of short-term rentals to suit your specific needs. Here’s how you can find them:
1.Online Search: Start by searching online for 'short-term rentals'. Prroperties.com offers a dedicated section for short-term rentals, including both residential and live-work properties.
2.Filter Your Preferences: Whether you're looking for a cozy studio for a brief stay or a more spacious live and work property for a longer project, our platform allows you to filter options based on your preferences. This includes choices for corporate rentals and commercial offices for rent.
3.Consider Duration: Decide on the length of your stay. While short-term rentals typically refer to stays less than six months, we at Prroperties offer flexible options ranging from a few weeks to several months, accommodating both short and long-term rentals.
4.Explore Locations: Location is key. Whether you need a rental close to business centres for corporate purposes or in a more relaxed environment, our listings cover a wide range of locations to suit your lifestyle or work needs.
5.Check Amenities: Ensure the rental meets your requirements. From basic furnishings to high-speed internet and office spaces, our short-term rentals are equipped to provide both comfort and functionality.
6.Contact Us: If you need further assistance, our team at Prroperties is ready to help. We can guide you through the selection process, ensuring you find a rental that perfectly aligns with your needs."
                ]
            ],
            [
                "@type" => "Question",
                "name" => "What is a corporate rental?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => " A corporate rental, commonly referred to as corporate housing, is a type of furnished rental property specifically designed to accommodate business travellers and various professional groups. These properties are typically upscale apartments, condos, or homes that offer the comfort and amenities of a home, coupled with the convenience and services of a hotel.
Corporate rentals are usually fully furnished and include all the necessary living amenities. They are often rented out for a minimum duration of one month, making them an ideal choice for extended business trips, employee relocations, or long-term projects.
These rentals differ from traditional short-term rentals. They are more tailored to the needs of business travellers, often including dedicated workspaces, high-speed internet, and access to business centres. They can also serve as live and work properties for professionals who require a combined workspace and residential setup.
Additionally, corporate rentals can be a more economical and comfortable alternative to long-term hotel stays or commercial offices for rent, especially for businesses looking to provide housing for their employees in different cities or during transitional periods.
By opting for a corporate rental, businesses and professionals can enjoy a seamless, hassle-free experience that caters to both their living and working needs, fostering a more productive and comfortable stay."
                ]
            ],
            [
                "@type" => "Question",
                "name" => "What is a property management business?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "A property management business specializes in the daily oversight and administration of real estate properties, which can include residential, commercial, or industrial properties. This service is typically provided by a third-party contractor or a property management company.
The core responsibilities of a property management business encompass a wide range of tasks, including but not limited to:
1.Maintenance and Repairs: Ensuring that the property is in good working condition through regular maintenance and prompt repairs. This is a key aspect of total property management, aimed at preserving and enhancing the property's value and functionality.
2.Security: Implementing and overseeing security measures to ensure the safety of the property and its occupants.
3.Upkeep: Managing the overall upkeep of the property. This includes cleaning, gardening, and other activities that keep the property in top condition.
4.Tenant Relations: Handling tenant-related issues, from leasing and rent collection to addressing tenant complaints and enforcing lease agreements.
5.Financial Management: Overseeing the financial aspects of property management, such as budgeting and financial reporting.
For those looking for property management near me, it's crucial to choose a company that has a strong track record in managing the type of property you own, be it a rental property manager for residential units or a firm specializing in commercial property management. The right property management business can significantly alleviate the burden of day-to-day property management tasks, ensuring that your investment is well-maintained and profitable."
                ]
            ],
            [
                "@type" => "Question",
                "name" => "What does a property maintenance company do?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "A property maintenance company specializes in ensuring that buildings and their surrounding environments are kept in optimal condition. The services provided by these companies are comprehensive and cater to a variety of maintenance needs. Here’s a breakdown of what such a company typically does:
1.Safety Checks: Conduct regular safety inspections to ensure that all aspects of the property meet health and safety standards. This is a fundamental part of property maintenance services, ensuring a safe environment for occupants.
2.Cleaning: Providing thorough cleaning services, which include the interiors and exteriors of buildings. This is crucial for both aesthetic appeal and hygiene.
3.Rodent and Pest Control: Implementing measures to control and prevent pest infestations, which is essential for maintaining a healthy living and working environment.
4.Garbage Disposal: Managing the removal and disposal of waste and garbage, which is a key aspect of maintaining a clean and hygienic property.
5.Gardening and Landscaping: Offering gardening services and landscaping to enhance the aesthetic appeal and value of the property. This can range from basic lawn care to elaborate landscape design.
6.Asset Repairs and Maintenance: Addressing any repairs needed for the property’s assets and conducting routine maintenance. This includes fixing structural issues, plumbing, electrical systems, and more.
Whether it’s for residential properties or commercial property maintenance, these companies aim to provide complete property maintenance solutions. They ensure that every aspect of a property is well cared for, reducing the hassle for property owners and enhancing the longevity and value of the property.
Professional property maintenance companies often tailor their services to meet the specific needs of their clients, ensuring that all aspects of property upkeep are managed effectively and efficiently."
                ]
            ],
            [
                "@type" => "Question",
                "name" => "What is the best software for landlords?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "The best software for landlords ideally combines comprehensive features with user-friendliness to efficiently manage rental properties. A standout choice in this domain is our Prroperties system, a dynamic property management software designed for landlords of varying scales and needs.
1.Comprehensive Management Tools: Prroperties system offers an all-in-one solution for property management. It includes features for tenant screening, rent collection, maintenance management, and financial reporting, making it a robust property management software for landlords.
2.Specialization for Commercial Properties: For landlords handling commercial real estate, our commercial property management software is tailored to meet the specific challenges and requirements of commercial properties.
3.Ideal for Small and Large Portfolios: Whether you're a small landlord with a few units or managing a larger portfolio, Prroperties system is scalable and adaptable. This makes it an excellent property management software for small landlords as well as those with extensive properties.
4.User-friendly and Accessible: Designed with efficiency in mind, our software for landlords is easy to navigate and accessible online, allowing property management from any location.
5.Ongoing Support and Updates: We continuously enhance the Prroperties system with the latest features and provide dedicated support to ensure it remains the best software for landlords.
In essence, Prroperties system is a versatile, efficient, and easy-to-use platform, catering to the diverse needs of landlords. It's an ideal choice for those seeking a streamlined approach to property management, regardless of the size of their property portfolio."
                ]
            ],
            [
                "@type" => "Question",
                "name" => "What is a construction administrative assistant do?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => " A construction administrative assistant plays a vital role in the smooth operation of construction projects, whether they are in commercial construction, residential construction, or related to a property management platform. Here’s an overview of their key responsibilities:
1.Communication Hub: They serve as the primary point of contact for the construction team, answering phones and responding to emails from clients and vendors. This role is crucial in maintaining effective communication lines within construction assistance teams and with external parties.
2.Vendor and Subcontractor Liaison: One of their primary duties is to solicit quotes from vendors, subcontractors, and various construction services teams. By doing so, they ensure that the construction project receives competitive bids and services that are crucial for its success.
3.Document Preparation and Management: They are responsible for preparing important forms and documents, such as change orders, purchase orders, service agreements, and subcontracts. This documentation is essential for the orderly management of construction projects and often interfaces with a commercial property management platform for larger projects.
4.Coordination and Support: The administrative assistant plays a key role in coordinating activities and schedules, ensuring that all aspects of the construction process align and proceed smoothly. This may involve working closely with a property management platform to integrate various aspects of the project.
Whether involved in residential or commercial construction, the construction administrative assistant is integral to the project's organization and efficiency, handling both administrative and coordination tasks that are pivotal to successful construction management."
                ]
            ],
            [
                "@type" => "Question",
                "name" => "What is the difference between commercial and residential construction?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "While both residential and commercial construction are pivotal segments of the construction industry, they differ significantly in various aspects:
1.Purpose and Design: Residential construction focuses on buildings meant for living, such as single-family houses, townhouses, condominiums, and duplexes. In contrast, commercial construction deals with buildings used for business purposes, including hospitals, shopping complexes, office locations, and warehouses. The design requirements for each type are tailored to their specific uses.
2.Cost and Maintenance: Generally, commercial construction is more costly than residential construction. This is due to factors like licensing, building codes, materials, and labour skills required. Commercial buildings often need more specialized skills and have higher overhead costs. The maintenance for commercial properties managed through commercial property management platforms, also tends to be more intensive and expensive compared to residential properties.
3.Construction Time Frame: Commercial buildings are usually constructed more quickly than residential buildings due to the urgency of business needs and financial implications. Tools like construction management software can aid in speeding up the process and managing resources efficiently.4.Materials and Equipment: The materials used in commercial construction are typically more durable and higher grade, reflecting the building's intended use and footfall. In contrast, residential construction materials are chosen for comfort and aesthetics. The equipment used in commercial construction is more sophisticated and heavy-duty.
5.Codes and Regulations: Commercial construction must adhere to stricter codes and regulations compared to residential construction. This includes safety regulations, structural requirements, and more, due to the higher risks and complexities involved.
6.Design Flexibility: Residential construction offers more flexibility in design and personalization, catering to individual preferences. Changes in commercial construction can be more challenging and costly due to the complexity and scale of the projects.
Both types of construction require effective management and coordination. Software solutions, like those provided in property management platforms, offer valuable tools for managing both residential and commercial construction projects efficiently."
                ]
            ],
            [
                "@type" => "Question",
                "name" => "What is relocation assistance?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "Relocation assistance refers to the range of services and support provided to individuals or families to help them move to a new location, typically for employment reasons. This assistance is often offered by relocation assistance companies or through relocation assistance services provided by employers. The key components of relocation assistance include:
1.Packing and Unpacking Services: Assistance with organizing, packing, and unpacking personal belongings to make the moving process smoother and more efficient.
2.Transportation and Moving Costs: Covering the expenses related to moving belongings from the old residence to the new one, which can include hiring moving companies or renting vehicles.
3.Temporary Lodging: Providing accommodation for the relocating individual or family during the transition period when they are moving out of their old residence and settling into the new one.
4.Disposition of a Residence: Support in selling or leasing out the previous residence, which can involve real estate services.
5.Acquisition of a New Residence: Assistance in finding and securing a new home, which may include identifying suitable properties, negotiating leases or purchase terms, and handling related paperwork.
6.Mortgage Assistance: Financial guidance and support for managing mortgage-related issues in both the old and new locations.
7.Cultural and Language Training: For international relocations, providing training to help the individual or family adapt to the new cultural environment and, if necessary, language training.
8.Secure Space Storage: Offering solutions for temporary storage of belongings, either in the old location or the new one, during the transition.
Relocation assistance services aim to alleviate the stress and logistical challenges associated with moving, ensuring a smooth transition for the individual or family to their new home and community."
                ]
            ],
            [
                "@type" => "Question",
                "name" => "How much relocation assistance should I ask for?",
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => "Determining the amount of relocation assistance to request can vary based on several factors including your personal circumstances, the cost of living in the new area, and the nature of your relocation. When considering relocation assistance, it's important to account for all potential expenses and support you might need. Here are key aspects to consider:
1.Packing and Unpacking Services: Estimate the cost of professional services for packing and unpacking your belongings.
2.Transportation and Moving Costs: Calculate the expenses involved in physically moving your items. This can include the cost of hiring movers, renting trucks, or shipping fees.
3.Temporary Lodging: Consider the costs of temporary accommodation if you can’t immediately move into your new residence. Research the average hotel or rental costs in the new location for the duration you'll need.
4.Disposition and Acquisition of Residence: If selling your current home and buying or leasing a new one, factor in real estate agent fees, closing costs, and any other associated expenses.
5.Mortgage Assistance: If applicable, consider the costs related to managing or transferring your mortgage.
6.Cultural and Language Training: For international relocations, consider the costs of any necessary cultural adaptation or language training courses.
7.Secure Space Storage: If you require storage for your belongings either before or after the move, include the rental cost of these storage services.
8.Additional Costs: Also consider any other personal expenses that might arise during the relocation process.
To determine a reasonable amount to ask for, research the costs associated with each of these services in your specific situation and add them together. It’s also advisable to consult with relocation assistance services or companies for a more tailored estimate, as they have expertise in handling such matters.
Remember, relocation assistance can vary greatly depending on the employer and the specifics of the job offer, so it's important to be informed and prepared to negotiate based on your needs and the standard practices in your industry."
                ]
            ]
        ]
    ];

    // Pass the schema to the view
    $data['faqSchema'] = json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

    return view('saas.frontend.faq', $data);
}

    
     public function terms()
    {
        
        
        $data['pageTitle'] = __("Terms");
        $data['description'] = getOption('Terms');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.terms',$data);
    }
    
    public function management()
    {
        $data['pageTitle'] = __("Prroperties| Top Property Management Company Near You");
        $data['description'] = ('Prroperties ensures seamless property management near you with our dedicated services in rental management, property maintenance, and tenant care.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.management',$data);
    }
    
    public function maintenance()
    {
        
        $data['pageTitle'] = __("Effortless Property Maintenance with Prroperties");
        $data['description'] = ('Experience hassle-free property maintenance services at Prroperties. Your property best care is just a click away.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.maintenance',$data);
    }
    
     public function software()
    {
        $data['pageTitle'] = __("Property Management Software for Landlords | Prroperties");
        $data['description'] = ('Landlords, elevate your rental experience with Prroperties. Our property management software streamlines tasks, boosts efficiency, and enhances tenant relations.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.software',$data);
    }
    
    
     public function development()
    {
        $data['pageTitle'] = __("Construction Assistance Made Simple | Prroperties");
        $data['description'] = ('Need construction assistance? Prroperties offers expert guidance, ensuring your residential or commercial projects transform seamlessly.');
     $data['canonicalUrl'] = \URL::current();
     
        return view('saas.frontend.development',$data);
    }
    
    public function relocation()
    {
        $data['pageTitle'] = __("Relocation Assistance & Move Planning | Prroperties");
        $data['description'] = ('Unlock seamless construction solutions with Prroperties. From residential to commercial projects, our experts guide you every step of the way, ensuring a smooth transformation. Partner with us for a hassle-free construction journey.');
     $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.relocation',$data);
    }
     public function investment()
    {
     
     $data['pageTitle'] = __("Prroperties Investment: Unlock Passive Income");
        $data['description'] = ('Prroperties investment opportunities to unlock passive income. Benefit from our streamlined process, asset analysis, and massive ROI.');
        $data['canonicalUrl'] = \URL::current();
        
        return view('saas.frontend.investment',$data);
    }
    
    
    

public function blogd()
    {
     
     $data['pageTitle'] = __("Choosing the Right Real Estate Agent: Top Tips | prroperties ");
        $data['description'] = ('Discover key tips for selecting the ideal real estate agent. Navigate your property journey with confidence whether buying or selling.');
        $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.blogd',$data);
    }

    public function privacyPolicy()
    {
        $data['pageTitle'] = __("Privacy Policy");
        $data['description'] = ('privacy_policy');
        $data['canonicalUrl'] = \URL::current();
        return view('saas.frontend.policy', $data);
    }

    public function cookiePolicy()
    {
        $data['pageTitle'] = __("Cookie Policy");
        $data['description'] = ('cookie_policy');
        return view('saas.frontend.policy', $data);
    }

    public function contactMessageStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255'
        ]);
        DB::beginTransaction();
        try {
            $message = new Message();
            $message->first_name = $request->first_name;
            $message->last_name = $request->last_name;
            $message->email = $request->email;
            $message->phone = $request->phone;
            $message->subject = $request->subject;
            $message->message = $request->message;
            $message->save();
            DB::commit();

            // send mail
            if (getOption('send_email_status', 0) == ACTIVE) {
                $emails = [$request->email];
                $subject = __('Thanks for contacting us');
                $title = __('Thank you');
                $message = __('for contacting us, we will reply promptly once your message is received.');
                $mailService = new MailService;
                $mailService->sendContactThankYouMail($emails, $subject, $message, $title);
            }
            return $this->success([], __(SENT_SUCCESSFULLY));
        } catch (Exception $e) {
            DB::rollBack();
            return $this->error([], __(SOMETHING_WENT_WRONG));
        }
    }
}

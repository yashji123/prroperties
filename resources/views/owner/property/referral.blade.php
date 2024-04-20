@extends('owner.layouts.app')
 <title>
        @isset($pageTitle)
            {{ $pageTitle }} - Your Website Name
        @else
            Referral - Prroperties
        @endisset
    </title>
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page Content Wrapper Start -->
                <div class="page-content-wrapper bg-white p-30 radius-20">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between border-bottom mb-20">
                                <div class="page-title-left">
                                    <h3 class="mb-sm-0">Welcome to partner dashboard</h3>
                                </div>
                                <div class="page-title-right">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="{{ route('owner.dashboard') }}"
                                                title="Dashboard">{{ __('Dashboard') }}</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('owner.property.allProperty') }}"
                                                title="{{ __('Properties') }}">{{ __('Referral') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="dashboard-feature-item dashboard-feature-item-referral bg-off-white theme-border text-center radius-4 ptb10-lr20 mb-25">
                                <div class="dashboard-feature-item-icon">
                                    <img src="{{ asset('assets/images/reward.webp') }}">
                                </div>

                                <div class="dashboard-rt-wrp">
                                    <div class="d-flex justify-content-center reward-wrap">
                                        <!--<div class="reward-bal-head">Rewards Balance: </div>-->
                                        <div id="totalCommissionDisplay">Total Commission: $0.00</div>
                                    </div>
                                    <div class="referral-count">Referral count: {{ $referralData['referralCount'] }}</div>
                                    <div class="ref-wrap">
                                        <h2 class="ref-code-text">{{ $referralData['referralCode'] }}</h2>
                                        <button><span class="mdi mdi-link-variant"></span></button>
                                    </div>
                                    
                                </div>



                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="dashboard-feature-item dashboard-feature-item-referral bg-off-white theme-border text-center radius-4 ptb10-lr20 mb-25">
                                <div class="dashboard-feature-item-icon">
                                    <img src="{{ asset('assets/images/share.webp') }}">
                                </div>
                                <!--<p class="mt-2"></p>-->
                                <!--<h2 class="mt-1"></h2>-->
                                <div class="dashboard-rt-wrp">
                                    <div class="d-flex justify-content-center">
                                        <a class="homec-btn" id="showInviteLink" onclick="showInviteLink()" data-bs-toggle="tooltip" data-bs-placement="top" title="Click here to copy your personal invitation link."><span>Referral Link</span> </a>
                                    </div>

                                    <div id="inviteLink" class="mg-top-10 invite-text" style="display: none;">
                                    Invite link: <span id="inviteLinkText"></span>
                                    <div class="d-flex justify-content-center w-100 mg-top-10">
                                        <a class="homec-btn homec-small-btn" onclick="copyInviteLink()"><span>Copy</span> </a>
                                    </div>
                                    <!-- <button onclick="copyInviteLink()">Copy</button> -->
                                </div>
                                </div>
                                <!-- <button id="showInviteLink" onclick="showInviteLink()">Show Invite Link</button> -->
                            </div>
                        </div>
                    </div>

                    <div class="settings-page-layout-wrap position-relative mt-4">
                       <div class="row">
                          <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                             <div class="bg-off-white theme-border radius-4 p-25">
                                <div class="language-settings-page-area">
                                    <div class="settings-inner-box bg-white theme-border radius-4 mb-25">
                                        <div class="settings-inner-box-fields pb-0">
                                            <div class="settings-inner-box-title border-bottom p-20">
                                                <h4>Referred users</h4>
                                            </div>
                                        </div>
                                        @if($referredUsers->isEmpty())
                                            <p>No users have been referred yet.</p>
                                        @else
                                        <div class="p-20">
                                            <table class="table" id="referredUsersTable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Package Name</th>
                                                        <th>Commission Earned</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $count = 1; @endphp
                                                    @foreach($referredUsers as $referredUser)
                                                        @php
                                                            if ($referredUser->package_name == 'Maintenance Pro') {
                                                                $commission = 0.5;
                                                            } elseif ($referredUser->package_name == 'Property management') {
                                                                $commission = 99 * 0.05;
                                                            } else {
                                                                $commission = 0;
                                                            }
                                                        @endphp
                                                        <tr data-commission="{{ $commission }}">
                                                            <td>{{ $count }}</td>
                                                            <td>{{ $referredUser->first_name }} {{ $referredUser->last_name }}</td>
                                                            <td>{{ $referredUser->email }}</td>
                                                            <td>{{ $referredUser->package_name ?? 'No Package' }}</td>
                                                            <td>${{ number_format($commission, 2) }}</td>
                                                        </tr>
                                                        @php $count++; @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                            
                                        @endif
                                    </div>


                                   <div class="profile-page-content-area">
                                   <form action="{{ route('owner.bankAccount.store') }}" method="post">
                                        @csrf
                                        <div class="settings-inner-box bg-white theme-border radius-4 mb-25">
                                            <div class="settings-inner-box-fields pb-0">
                                                <div class="settings-inner-box-title border-bottom p-20">
                                                    <h4>Provide your banking information</h4>
                                                </div>
                                            </div>
                                            <div class="settings-inner-box-fields p-20 pb-0">
                                                <div class="row">
                                                    <div class="col-md-6 mb-25">
                                                        <label class="label-text-title color-heading font-medium mb-2">Account holder name</label>
                                                        <input type="text" class="form-control" id="account_holder_name" name="account_holder_name" placeholder="ABC Pvt Ltd." value="{{ old('account_holder_name', $bankAccount ? $bankAccount->account_holder_name : '') }}" required>
                                                    </div>
                                                    <div class="col-md-6 mb-25">
                                                        <label class="label-text-title color-heading font-medium mb-2">Account number</label>
                                                        <input type="text" class="form-control" id="account_number" name="account_number" placeholder="12345678910" value="{{ old('account_number', $bankAccount ? $bankAccount->account_number : '') }}" required>
                                                    </div>
                                                    <div class="col-md-6 mb-25">
                                                        <label class="label-text-title color-heading font-medium mb-2">Routing Number</label>
                                                        <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="ABCD1234" value="{{ old('ifsc_code', $bankAccount ? $bankAccount->ifsc_code : '') }}" required>
                                                    </div>
                                                    <div class="col-md-6 mb-25">
                                                        <label class="label-text-title color-heading font-medium mb-2">Bank Name</label>
                                                        <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="ABC Bank" value="{{ old('bank_name', $bankAccount ? $bankAccount->bank_name : '') }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button type="submit" class="theme-btn">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                   </div>

                                    


                                </div>
                             </div>
                          </div>
                       </div>
                    </div>

      



                    
                    
<input type="hidden" id="referralCount" value="{{ $referralData['referralCount'] }}">

<!-- Display points here -->

<script>
    function showInviteLink() {
        var referralCode = "{{ $referralData['referralCode'] }}";
        var baseUrl = "https://prroperties.com/owner-register"; // Replace with your actual invite URL base
        var fullInviteLink = baseUrl + "?referral=" + referralCode;

        document.getElementById('inviteLinkText').textContent = fullInviteLink;
        document.getElementById('inviteLink').style.display = 'block';
    }

    function copyInviteLink() {
        var inviteLink = document.getElementById('inviteLinkText').textContent;
        navigator.clipboard.writeText(inviteLink).then(function() {
            alert("Invite link copied to clipboard");
        }, function(err) {
            alert("Error in copying text: ", err);
        });
    }
</script>
<script>
        // Function to calculate points based on referral count
        function calculatePoints() {
            const referralCount = parseInt(document.getElementById('referralCount').value);
            const pointsPerReferral = 10; // Define your points per referral here

            // Calculate points
            const points = referralCount * pointsPerReferral;

            // Display points
            document.getElementById('pointsDisplay').innerText = `${points} Points`;
        }

        // Call the function on page load
        window.onload = calculatePoints;
    </script>   
    
    <script>
    function calculateTotalCommission() {
        let totalCommission = 0;

        // Get all table rows
        const rows = document.querySelectorAll('#referredUsersTable tbody tr');

        // Iterate over each row to sum the commission
        rows.forEach(row => {
            const commission = parseFloat(row.getAttribute('data-commission'));
            totalCommission += commission;
        });

        // Update the total commission display
        document.getElementById('totalCommissionDisplay').innerText = `Total Commission: $${totalCommission.toFixed(2)}`;
    }

    // Calculate total commission on page load
    document.addEventListener('DOMContentLoaded', calculateTotalCommission);
</script>

                   
@endsection

@extends('layouts.admin')

@section('title')
    Create User
@endsection


@section('content')
    @push('page_style')
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
            <style>
                .row{
                    background: #eeee;
                }
                hr {
                    height: 5px !important;
                    color: rgba(0, 0, 0, 0.45);
                }
            </style>
    @endpush

    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">User</a>
                            </li>
                            <li class="breadcrumb-item active">Create User
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-2">
            {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#realEstateModal">
                Real Estate & Loan Fields
            </button> --}}
            {{-- =========real estate modal ========== --}}
            <div class="modal fade" id="realEstateModal" tabindex="-1" aria-labelledby="realEstateModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="realEstateModalLabel">Real Estate & Loan Form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <!-- Lender -->
                                <div class="mb-3">
                                    <label for="lender" class="form-label">Lender</label>
                                    <select class="form-select" id="lender">
                                        <option selected>Select Lender</option>
                                        <option value="Lender1">Lender 1</option>
                                        <option value="Lender2">Lender 2</option>
                                    </select>
                                </div>

                                <!-- Processor -->
                                <div class="mb-3">
                                    <label for="processor" class="form-label">Processor</label>
                                    <input type="text" class="form-control" id="processor" placeholder="Type Processor">
                                </div>

                                <!-- Loan Type -->
                                <div class="mb-3">
                                    <label for="loanType" class="form-label">Loan Type</label>
                                    <select class="form-select" id="loanType">
                                        <option selected>Select Loan Type</option>
                                        <option value="Conventional">Conventional</option>
                                        <option value="FHA">FHA</option>
                                        <option value="VA">VA</option>
                                    </select>
                                </div>

                                <!-- Closing Date -->
                                <div class="mb-3">
                                    <label for="closingDate" class="form-label">Closing Date</label>
                                    <input type="date" class="form-control" id="closingDate">
                                </div>

                                <!-- Executed Date -->
                                <div class="mb-3">
                                    <label for="executedDate" class="form-label">Executed Date</label>
                                    <input type="date" class="form-control" id="executedDate">
                                </div>

                                <!-- Earnest Money -->
                                <div class="mb-3">
                                    <label for="earnestMoney" class="form-label">Earnest Money</label>
                                    <select class="form-select" id="earnestMoney">
                                        <option selected>Select Earnest Money</option>
                                        <option value="Option1">Option 1</option>
                                        <option value="Option2">Option 2</option>
                                    </select>
                                </div>

                                <!-- Option Money -->
                                <div class="mb-3">
                                    <label for="optionMoney" class="form-label">Option Money</label>
                                    <select class="form-select" id="optionMoney">
                                        <option selected>Select Option Money</option>
                                        <option value="Option1">Option 1</option>
                                        <option value="Option2">Option 2</option>
                                    </select>
                                </div>

                                <!-- Title Company -->
                                <div class="mb-3">
                                    <label for="titleCompany" class="form-label">Title Company</label>
                                    <input type="text" class="form-control" id="titleCompany"
                                        placeholder="Type Title Company">
                                </div>

                                <!-- Home Purchase Address -->
                                <div class="mb-3">
                                    <label for="homeAddress" class="form-label">Home Purchase Address</label>
                                    <input type="text" class="form-control" id="homeAddress"
                                        placeholder="Type Home Purchase Address">
                                </div>

                                <!-- Other Agent Contact Info -->
                                <div class="mb-3">
                                    <label for="agentContact" class="form-label">Other Agent Contact Info</label>
                                    <input type="text" class="form-control" id="agentContact"
                                        placeholder="Type Agent Contact Info">
                                </div>

                                <!-- Commission % or $ -->
                                <div class="mb-3">
                                    <label for="commission" class="form-label">Commission % or $</label>
                                    <input type="text" class="form-control" id="commission"
                                        placeholder="Type Commission % or $">
                                </div>

                                <!-- Commission Bonus % or $ -->
                                <div class="mb-3">
                                    <label for="commissionBonus" class="form-label">Commission Bonus % or $</label>
                                    <input type="text" class="form-control" id="commissionBonus"
                                        placeholder="Type Commission Bonus % or $">
                                </div>

                                <!-- Sellers Concessions $ -->
                                <div class="mb-3">
                                    <label for="sellersConcessions" class="form-label">Sellers Concessions $</label>
                                    <input type="text" class="form-control" id="sellersConcessions"
                                        placeholder="Type Sellers Concessions $">
                                </div>

                                <!-- Remaining Fields -->
                                <!-- Add similar blocks for each field in the list -->

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ============ end real estate modal ========= --}}

            {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#realtorFieldsModal">
                Realtor Fields
            </button> --}}
            {{-- ========== start realtor modal ========= --}}
            <div class="modal fade" id="realtorFieldsModal" tabindex="-1" aria-labelledby="realtorFieldsModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="realtorFieldsModalLabel">Realtor Fields Form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <!-- County -->
                                <div class="mb-3">
                                    <label for="county" class="form-label">County</label>
                                    <select class="form-select" id="county">
                                        <option selected>Select County</option>
                                        <option value="County1">County 1</option>
                                        <option value="County2">County 2</option>
                                    </select>
                                </div>

                                <!-- Sales Price Range -->
                                <div class="mb-3">
                                    <label for="salesPriceRange" class="form-label">Sales Price Range</label>
                                    <input type="text" class="form-control" id="salesPriceRange"
                                        placeholder="Type Sales Price Range">
                                </div>

                                <!-- Max PITI -->
                                <div class="mb-3">
                                    <label for="maxPITI" class="form-label">Max PITI</label>
                                    <input type="text" class="form-control" id="maxPITI"
                                        placeholder="Type Max PITI">
                                </div>

                                <!-- Min Sq Ft -->
                                <div class="mb-3">
                                    <label for="minSqft" class="form-label">Min Sq Ft</label>
                                    <input type="text" class="form-control" id="minSqft"
                                        placeholder="Type Min Sq Ft">
                                </div>

                                <!-- Max Sq Ft -->
                                <div class="mb-3">
                                    <label for="maxSqft" class="form-label">Max Sq Ft</label>
                                    <input type="text" class="form-control" id="maxSqft"
                                        placeholder="Type Max Sq Ft">
                                </div>

                                <!-- Min Year -->
                                <div class="mb-3">
                                    <label for="minYear" class="form-label">Min Year</label>
                                    <input type="text" class="form-control" id="minYear"
                                        placeholder="Type Min Year">
                                </div>

                                <!-- Max Year -->
                                <div class="mb-3">
                                    <label for="maxYear" class="form-label">Max Year</label>
                                    <input type="text" class="form-control" id="maxYear"
                                        placeholder="Type Max Year">
                                </div>

                                <!-- Min Acres -->
                                <div class="mb-3">
                                    <label for="minAcres" class="form-label">Min Acres</label>
                                    <input type="text" class="form-control" id="minAcres"
                                        placeholder="Type Min Acres">
                                </div>

                                <!-- Max Acres -->
                                <div class="mb-3">
                                    <label for="maxAcres" class="form-label">Max Acres</label>
                                    <input type="text" class="form-control" id="maxAcres"
                                        placeholder="Type Max Acres">
                                </div>

                                <!-- Min Beds -->
                                <div class="mb-3">
                                    <label for="minBeds" class="form-label">Min Beds</label>
                                    <input type="text" class="form-control" id="minBeds"
                                        placeholder="Type Min Beds">
                                </div>

                                <!-- Min Baths -->
                                <div class="mb-3">
                                    <label for="minBaths" class="form-label">Min Baths</label>
                                    <input type="text" class="form-control" id="minBaths"
                                        placeholder="Type Min Baths">
                                </div>

                                <!-- Type -->
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" id="type">
                                        <option selected>Select Type</option>
                                        <option value="Type1">Type 1</option>
                                        <option value="Type2">Type 2</option>
                                    </select>
                                </div>

                                <!-- Builders -->
                                <div class="mb-3">
                                    <label for="builders" class="form-label">Builders</label>
                                    <select class="form-select" id="builders">
                                        <option selected>Select Builder</option>
                                        <option value="Builder1">Builder 1</option>
                                        <option value="Builder2">Builder 2</option>
                                    </select>
                                </div>

                                <!-- Agent Notes -->
                                <div class="mb-3">
                                    <label for="agentNotes" class="form-label">Agent Notes</label>
                                    <input type="text" class="form-control" id="agentNotes"
                                        placeholder="Type Agent Notes">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ========== end realstor modal =========== --}}

            {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#postClosingModal">
                Post Closing Fields
            </button> --}}

            {{-- ======= start Post Closing Fields modal ===== --}}
            <div class="modal fade" id="postClosingModal" tabindex="-1" aria-labelledby="postClosingModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="postClosingModalLabel">Post Closing Fields</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="postClosingForm">
                                <!-- Last Closing Date -->
                                <div class="mb-3">
                                    <label for="lastClosingDate" class="form-label">Last Closing Date</label>
                                    <input type="date" class="form-control" id="lastClosingDate"
                                        name="lastClosingDate">
                                </div>
                                <!-- Sales Price -->
                                <div class="mb-3">
                                    <label for="salesPrice" class="form-label">Sales Price</label>
                                    <input type="date" class="form-control" id="salesPrice" name="salesPrice">
                                </div>
                                <!-- Closing Survey -->
                                <div class="mb-3">
                                    <label for="closingSurvey" class="form-label">Closing Survey</label>
                                    <input type="date" class="form-control" id="closingSurvey" name="closingSurvey">
                                </div>
                                <!-- Closing Gift -->
                                <div class="mb-3">
                                    <label for="closingGift" class="form-label">Closing Gift</label>
                                    <input type="date" class="form-control" id="closingGift" name="closingGift">
                                </div>
                                <!-- Post Closing Call -->
                                <div class="mb-3">
                                    <label for="postClosingCall" class="form-label">Post Closing Call</label>
                                    <input type="date" class="form-control" id="postClosingCall"
                                        name="postClosingCall">
                                </div>
                                <!-- Homestead Call -->
                                <div class="mb-3">
                                    <label for="homesteadCall" class="form-label">Homestead Call</label>
                                    <input type="date" class="form-control" id="homesteadCall" name="homesteadCall">
                                </div>
                                <!-- Notes -->
                                <div class="mb-3">
                                    <label for="notes" class="form-label">Notes</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                                </div>
                                <!-- Marketing Project -->
                                <div class="mb-3">
                                    <label for="marketingProject" class="form-label">Marketing Project</label>
                                    <select class="form-select" id="marketingProject" name="marketingProject">
                                        <option value="">Select</option>
                                        <option value="Project A">Project A</option>
                                        <option value="Project B">Project B</option>
                                        <option value="Project C">Project C</option>
                                    </select>
                                </div>
                                <!-- Customer Service Request -->
                                <div class="mb-3">
                                    <label for="customerServiceRequest" class="form-label">Customer Service
                                        Request</label>
                                    <textarea class="form-control" id="customerServiceRequest" name="customerServiceRequest" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="postClosingForm" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ========== end Post Closing Fields modal ========= --}}

            {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#referredByReportModal">
                Referred By Report
            </button> --}}

            {{-- ======== start Referred By Report modal ========= --}}
            <div class="modal fade" id="referredByReportModal" tabindex="-1"
                aria-labelledby="referredByReportModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="referredByReportModalLabel">Referred By Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="referredByReportForm">
                                <!-- Filter Clients Name -->
                                <div class="mb-3">
                                    <label for="filterClientsName" class="form-label">Filter Clients Name</label>
                                    <select class="form-select" id="filterClientsName" name="filterClientsName">
                                        <option value="">Select Client</option>
                                        <!-- Add dynamic client options here -->
                                        <option value="Client A">Client A</option>
                                        <option value="Client B">Client B</option>
                                        <option value="Client C">Client C</option>
                                    </select>
                                </div>

                                <!-- Description -->
                                <p class="text-muted">
                                    A filtered report showing how many referrals a client that has closed has given us.
                                </p>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="referredByReportForm" class="btn btn-primary">Generate
                                Report</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ====== end Referred By Report modal ====== --}}
        </div>
        <form class="g-2" method="POST" action="{{route("store.data")}}">
            @csrf
            <h3>Client Information</h3>
            <div class="mt-2">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                    data-bs-target="#referredByReportModal">
                    Referred By Report
                </button>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                    data-bs-target="#postClosingModal">
                    Post Closing Fields
                </button>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                    data-bs-target="#realtorFieldsModal">
                    Realtor Fields
                </button>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#realEstateModal">
                    Real Estate & Loan Fields
                </button>
            </div>
            {{-- <div class="row g-2"> --}}
            <div id="clientSection" class="row g-2 mt-2">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="inputEmail4"
                        placeholder="Enter first name">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter last name"
                        id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Best way to contact?</label>
                    <input type="text" name="best_way_to_contact" class="form-control" id="inputAddress"
                        placeholder="Email or Phone">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress2" name="email"
                        placeholder="Enter email">
                </div>
                <div class="col-md-4">
                    <label for="inputCity" class="form-label">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control" id="inputCity"
                        placeholder="Enter Phone number">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Rent/Own</label>
                    <select id="inputState" name="rent_own" class="form-select">
                        <option selected>Choose...</option>
                        <option>Rented</option>
                        <option>Owned</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                    <input type="text" class="form-control" id="inputZip" name="how_long_live_hear">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Lease Ends?</label>
                    <input type="text" class="form-control" id="" name="lease_ends">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Monthy Rent/Monthly Mortgage</label>
                    <input type="text" class="form-control" id="" name="monthly_rent_mortgage">
                </div>
                <h3>Previous 2nd Address (optional Fields)</h3>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Street Name</label>
                    <input type="text" class="form-control" id="" name="previous_2nd_street_name"
                        placeholder="Enter Street Name">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">AP+</label>
                    <input type="text" class="form-control" id="" name="previous_2nd_ap">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">City</label>
                    <input type="text" class="form-control" id="" placeholder="Enter City name"
                        name="previous_2nd_city">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">State</label>
                    <input type="text" class="form-control" id="" placeholder="Enter State Name"
                        name="previous_2nd_state">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="number" class="form-control" id="" placeholder="Enter Zip code"
                        name="previous_2nd_zip_code">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                    <input type="text" class="form-control" id="" name="previous_2nd_how_long_live_hear">
                </div>
                <div class="col-md-12">
                    <label for="inputState" class="form-label">Rent/Own</label>
                    <select id="inputState" name="previous_2nd_rent_own" class="form-select">
                        <option selected>Choose...</option>
                        <option>Rented</option>
                        <option>Owned</option>
                    </select>
                </div>
                <h3>Current Employer</h3>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Applicant Employer</label>
                    <input type="text" name="current_employer_first_name" class="form-control"
                        placeholder="Enter Applicant Employer" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Position</label>
                    <input type="text" name="current_employer_position" class="form-control"
                        placeholder="Enter position" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Start Date</label>
                    <input type="date" name="current_employer_start_date" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">End Date</label>
                    <input type="date" name="current_employer_end_date" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                    <input type="text" name="current_employer_self_employed" class="form-control"
                        id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">How Long</label>
                    <input type="text" name="current_employer_how_long" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                    <input type="text" name="current_employer_hourly_salary" class="form-control"
                        id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Income 2023</label>
                    <input type="text" name="current_employer_income_2023" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Income 2022</label>
                    <input type="text" name="current_employer_income_2022" class="form-control" id="inputPassword4">
                </div>
                <h3>Previous 1 Employer</h3>

                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Previous Employer</label>
                    <input type="text" name="previous_1_employer_name" class="form-control" id="inputPassword4"
                        placeholder="Enter Previous Employer">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Position</label>
                    <input type="text" name="previous_1_employer_position" class="form-control"
                        placeholder="Enter position" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Start Date</label>
                    <input type="date" name="previous_1_employer_start_date" class="form-control"
                        id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">End Date</label>
                    <input type="date" name="previous_1_employer_end_date" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                    <input type="text" name="previous_1_employer_self_employed" class="form-control"
                        id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">How Long</label>
                    <input type="text" name="previous_1_employer_how_long" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                    <input type="text" name="previous_1_employer_hourly_salary" class="form-control"
                        id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Income 2023</label>
                    <input type="text" name="previous_1_employer_income_2023" class="form-control"
                        id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Income 2022</label>
                    <input type="text" name="previous_1_employer_income_2022" class="form-control"
                        id="inputPassword4">
                </div>

                <h3>Bank & Assets</h3>

                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Bank 1 Name</label>
                    <input type="text" name="bank_one" class="form-control" placeholder="Enter Bank 1 Name"
                        id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Bank 2 Name</label>
                    <input type="text" name="bank_two" class="form-control" placeholder="Enter Bank 2 Name"
                        id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Assets</label>
                    <input type="text" name="asset" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Checkings</label>
                    <input type="text" name="checkings" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">savings</label>
                    <input type="text" name="savings" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">401 K</label>
                    <input type="text" name="401_k" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Stocks</label>
                    <input type="text" name="stocks" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Bonds</label>
                    <input type="text" name="bonds" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Cash on Hand</label>
                    <input type="text" name="cash_on_hand" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Home Proceed</label>
                    <input type="text" name="home_proceed" class="form-control" id="inputPassword4">
                </div>

                <h3>Liabilities</h3>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Credit Cards</label>
                    <input type="text" name="credit_card" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Auto Payments</label>
                    <input type="text" name="auto_payment" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12 mb-2">
                    <div class="form-check spouse_d_none">
                        <input class="form-check-input spouse" type="checkbox" id="spouse">
                        <label class="form-check-label" for="spouse">
                            Do you have a spouse?
                        </label>
                    </div>
                </div>
                <div class="spouse_form d-none mt-2 pb-2">
                    <div class="row g-2">
                        <h3>Spouse</h3>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">First Name</label>
                            <input type="text" name="spouse_first_name" class="form-control" id="inputEmail4"
                                placeholder="Enter first name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Last Name</label>
                            <input type="text" name="spouse_last_name" class="form-control"
                                placeholder="Enter last name" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Best way to contact?</label>
                            <input type="text" name="spouse_best_way_to_contact" class="form-control"
                                id="inputAddress" placeholder="Email or Phone">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputAddress2" name="spouse_email"
                                placeholder="Enter email">
                        </div>
                        <div class="col-md-4">
                            <label for="inputCity" class="form-label">Phone Number</label>
                            <input type="number" name="spouse_phone_number" class="form-control" id="inputCity"
                                placeholder="Enter Phone number">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Rent/Own</label>
                            <select id="inputState" name="spouse_rent_own" class="form-select">
                                <option selected>Choose...</option>
                                <option>Rented</option>
                                <option>Owned</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                            <input type="text" class="form-control" id="inputZip" name="spouse_how_long_live_hear">
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Lease Ends?</label>
                            <input type="text" class="form-control" id="" name="spouse_lease_ends">
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Monthy Rent/Monthly Mortgage</label>
                            <input type="text" class="form-control" id=""
                                name="spouse_monthly_rent_mortgage">
                        </div>
                        <h3>Previous 2nd Address (optional Fields)</h3>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Street Name</label>
                            <input type="text" class="form-control" id=""
                                name="spouse_previous_2nd_street_name" placeholder="Enter Street Name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">AP+</label>
                            <input type="text" class="form-control" id="" name="spouse_previous_2nd_ap">
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">City</label>
                            <input type="text" class="form-control" id="" placeholder="Enter City name"
                                name="spouse_previous_2nd_city">
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">State</label>
                            <input type="text" class="form-control" id="" placeholder="Enter State Name"
                                name="spouse_previous_2nd_state">
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="number" class="form-control" id="" placeholder="Enter Zip code"
                                name="spouse_previous_2nd_zip_code">
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                            <input type="text" class="form-control" id=""
                                name="spouse_previous_2nd_how_long_live_hear">
                        </div>
                        <div class="col-md-12">
                            <label for="inputState" class="form-label">Rent/Own</label>
                            <select id="inputState" name="spouse_previous_2nd_rent_own" class="form-select">
                                <option selected>Choose...</option>
                                <option>Rented</option>
                                <option>Owned</option>
                            </select>
                        </div>
                        <h3>Current Employer</h3>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Applicant Employer</label>
                            <input type="text" name="spouse_current_employer_first_name" class="form-control"
                                placeholder="Enter Applicant Employer" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Position</label>
                            <input type="text" name="spouse_current_employer_position" class="form-control"
                                placeholder="Enter position" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Start Date</label>
                            <input type="date" name="spouse_current_employer_start_date" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">End Date</label>
                            <input type="date" name="spouse_current_employer_end_date" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                            <input type="text" name="spouse_current_employer_self_employed" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">How Long</label>
                            <input type="text" name="spouse_current_employer_how_long" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                            <input type="text" name="spouse_current_employer_hourly_salary" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Income 2023</label>
                            <input type="text" name="spouse_current_employer_income_2023" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">Income 2022</label>
                            <input type="text" name="spouse_current_employer_income_2022" class="form-control"
                                id="inputPassword4">
                        </div>
                        <h3>Previous 1 Employer</h3>

                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Previous Employer</label>
                            <input type="text" name="spouse_previous_1_employer_name" class="form-control"
                                id="inputPassword4" placeholder="Enter Previous Employer">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Position</label>
                            <input type="text" name="spouse_previous_1_employer_position" class="form-control"
                                placeholder="Enter position" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Start Date</label>
                            <input type="date" name="spouse_previous_1_employer_start_date" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">End Date</label>
                            <input type="date" name="spouse_previous_1_employer_end_date" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                            <input type="text" name="spouse_previous_1_employer_self_employed" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">How Long</label>
                            <input type="text" name="spouse_previous_1_employer_how_long" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                            <input type="text" name="spouse_previous_1_employer_hourly_salary" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Income 2023</label>
                            <input type="text" name="spouse_previous_1_employer_income_2023" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Income 2022</label>
                            <input type="text" name="spouse_previous_1_employer_income_2022" class="form-control"
                                id="inputPassword4">
                        </div>

                        <h3>Bank & Assets</h3>

                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Bank 1 Name</label>
                            <input type="text" name="spouse_bank_one" class="form-control"
                                placeholder="Enter Bank 1 Name" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Bank 2 Name</label>
                            <input type="text" name="spouse_bank_two" class="form-control"
                                placeholder="Enter Bank 2 Name" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Assets</label>
                            <input type="text" name="spouse_asset" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Checkings</label>
                            <input type="text" name="spouse_checkings" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">savings</label>
                            <input type="text" name="spouse_savings" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">401 K</label>
                            <input type="text" name="spouse_401_k" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Stocks</label>
                            <input type="text" name="spouse_stocks" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Bonds</label>
                            <input type="text" name="spouse_bonds" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Cash on Hand</label>
                            <input type="text" name="spouse_cash_on_hand" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">Home Proceed</label>
                            <input type="text" name="spouse_home_proceed" class="form-control"
                                id="inputPassword4">
                        </div>

                        <h3>Liabilities</h3>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Credit Cards</label>
                            <input type="text" name="spouse_credit_card" class="form-control"
                                id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Auto Payments</label>
                            <input type="text" name="spouse_auto_payment" class="form-control"
                                id="inputPassword4">
                        </div>
                    </div>
                </div>

            </div>
            {{-- </div> --}}
            <div class="row g-2 align-items-center pb-2">
                <div class="col-6">
                    <input class="form-check-input" type="checkbox" id="cosignerId">
                    <label class="form-check-label" for="cosignerId">
                        Do you have a cosigner?
                    </label>
                </div>
                <div class="col-6 cosignerType d-none">
                    <label for="selectCosignerType" class="form-label">Cosigner Type</label>
                    <select id="selectCosignerType" name="rent_own" class="form-select">
                        <option selected>Choose...</option>
                        <option value="single">Cosigner single</option>
                        <option value="double">Cosigner double</option>
                    </select>
                </div>
            </div>




            {{-- ============ end client 3 spouse =========== --}}

            <div id="cosignerContainer" class="mt-2 mb-2">
                <hr>
                <!-- Replicated forms for cosigners will appear here -->
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </section>
    <!-- Basic Floating Label Form section end -->



    @push('page_script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
        <script>
            const cosignerContainer = document.getElementById('cosignerContainer');
            const cosignerTypeSelect = document.getElementById('selectCosignerType');
            const clientSection = document.getElementById('clientSection');

            cosignerTypeSelect.addEventListener('change', () => {
                // Clear existing cosigner forms
                cosignerContainer.innerHTML = '';

                if (cosignerTypeSelect.value === 'single') {
                    addCosignerForm(1);
                } else if (cosignerTypeSelect.value === 'double') {
                    addCosignerForm(1);
                    addCosignerForm(2);
                }
            });

            function addCosignerForm(number) {
                const clonedSection = clientSection.cloneNode(true);
                clonedSection.id = `cosigner ${number}`;
                clonedSection.querySelectorAll('input, select').forEach(input => {
                    const fieldName = input.getAttribute('name');
                    if (fieldName) {
                        input.setAttribute('name', `${fieldName}_cosigner${number}`);
                    }
                    input.value = ''; // Clear any existing values
                });

                clonedSection.querySelectorAll('input, checkbox').forEach(inputCheckboxes => {
                    const checkboxes = inputCheckboxes.getAttribute('id');
                    if (checkboxes) {
                        inputCheckboxes.setAttribute('id', `${checkboxes}_cosigner${number}`);
                    }
                    inputCheckboxes.value = ''; // Clear any existing values
                    if (inputCheckboxes.type === 'checkbox') {
                        inputCheckboxes.checked = false;
                    }
                    // console.log(`${checkboxes}_cosigner${number}`,"======");
                });

                const heading = document.createElement('h4');
                const br = document.createElement('hr');
                heading.textContent = `Cosigner ${number} Information`;

                cosignerContainer.appendChild(br);
                cosignerContainer.appendChild(heading);
                cosignerContainer.appendChild(clonedSection);
                // $("#spouse_cosigner1").closest(".spouse_d_none").removeClass("d-none");
                // $("#spouse_cosigner2").closest(".spouse_d_none").removeClass("d-none");

                $("#spouse_cosigner1").closest('.col-12').next('.spouse_form').addClass('d-none');
                $("#spouse_cosigner2").closest('.col-12').next('.spouse_form').addClass('d-none');

            }
        </script>
        <script>
            $(document).on("click", "#spouse", function() {
                if ($(".spouse_form").hasClass("d-none")) {
                    $(".spouse_form").removeClass("d-none");
                } else {
                    $(".spouse_form").addClass("d-none");
                }
                // isSpouse
            })


            $(document).on("click", "#spouse_cosigner1", function() {
                if ($(this).is(':checked')) {
                    // Remove the d-none class from the closest .spouse_form
                    $(this).closest('.col-12').next('.spouse_form').removeClass('d-none');
                } else {
                    // Optionally, re-add the d-none class if unchecked
                    $(this).closest('.col-12').next('.spouse_form').addClass('d-none');
                }
            })
            $(document).on("click", "#spouse_cosigner2", function() {
                if ($(this).is(':checked')) {
                    // Remove the d-none class from the closest .spouse_form
                    $(this).closest('.col-12').next('.spouse_form').removeClass('d-none');
                } else {
                    // Optionally, re-add the d-none class if unchecked
                    $(this).closest('.col-12').next('.spouse_form').addClass('d-none');
                }
                // isSpouse
            })

            $(document).on("click", "#cosignerId", function() {
                if ($(".cosignerType").hasClass("d-none")) {
                    $(".cosignerType").removeClass("d-none");
                } else {
                    $('#cosignerContainer').empty();
                    // $('.spouse_form').addClass('d-none');
                    // $(".spouse").addClass("d-none");
                    $(".cosignerType").addClass("d-none");
                }
                // isSpouse
            })
            $(document).on("change", "#selectCosignerType", function() {

                // isSpouse
            })
            // $(document).on("click","#clientThreeSpouse",function(){
            //     if($(".client_three_spouse").hasClass("d-none")){
            //         $(".client_three_spouse").removeClass("d-none");
            //     }else{
            //         $(".client_three_spouse").addClass("d-none");
            //     }
            //     // isSpouse
            // })
        </script>
        <script>
            var isoCode = ($("#iso_code").val()) ? ($("#iso_code").val()) : ('US');
            //  phone 1 input
            var phoneInput = document.querySelector("#phone_number");
            var phoneInstance = window.intlTelInput(phoneInput, {
                autoPlaceholder: "off",
                separateDialCode: true,
                initialCountry: isoCode
                // utilsScript: '{{ URL::asset('frontend/build/js/utils.js') }}',
            });


            $("#phone_code").val(phoneInstance.getSelectedCountryData().dialCode);
            $("#iso_code").val(phoneInstance.getSelectedCountryData().iso2);
            phoneInput.addEventListener("countrychange", function() {
                $("#phone_code").val(phoneInstance.getSelectedCountryData().dialCode);
                $("#iso_code").val(phoneInstance.getSelectedCountryData().iso2);
            });
        </script>
        <script>
            function toggleSelectAll(masterCheckbox) {
                const checkboxes = document.querySelectorAll('.child-checkbox');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = masterCheckbox.checked;
                });
            }
        </script>
    @endpush
@endsection

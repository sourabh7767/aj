@extends('layouts.admin')

@section('title')
    Create User
@endsection

@section('content')
    @push('page_style')
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
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

        <form class="row g-3">
            <h3>Client Information</h3>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="Enter first name">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter last name" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Best way to contact?</label>
                <input type="text" name="best_way_to_contact" class="form-control" id="inputAddress" placeholder="Email or Phone">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputAddress2" placeholder="Enter email">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="inputCity" placeholder="Enter Phone number">
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
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Lease Ends?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Monthy Rent/Monthly Mortgage</label>
                <input type="text" class="form-control" id="">
            </div>
            <h3>Previous 2nd Address (optional Fields)</h3>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Street Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter City Name">
            </div> 
            <div class="col-md-6">
                <label for="inputZip" class="form-label">AP+</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">City</label>
                <input type="text" class="form-control" id="" placeholder="Enter City name">
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">State</label>
                <input type="text" class="form-control" id="" placeholder="Enter State Name">
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="number" class="form-control" id="" placeholder="Enter Zip code">
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-12">
                <label for="inputState" class="form-label">Rent/Own</label>
                <select id="inputState" name="rent_own" class="form-select">
                    <option selected>Choose...</option>
                    <option>Rented</option>
                    <option>Owned</option>
                </select>
            </div>
            <h3>Current Employer</h3>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Applicant Employer</label>
                <input type="text" name="first_name" class="form-control" placeholder="Enter Applicant Employer" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <h3>Previous 1Employer</h3>

            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Previous Employer</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4" placeholder="Enter Previous Employer">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3>Bank & Assets</h3>

            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Bank 1 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 1 Name" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Bank 2 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 2 Name" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Assets</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Checkings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">savings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">401 K</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Stocks</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Bonds</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Cash on Hand</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Home Proceed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3>Liabilities</h3>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Credit Cards</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Auto Payments</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="isSpouse">
                    <label class="form-check-label" for="isSpouse">
                        Do you have a spouse?
                    </label>
                </div>
            </div>
            {{-- ====== start spouse ======= --}}
            <h3 class="d-none spouse">Client 1 spouse</h3>
            <div class="col-md-6 spouse d-none">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="Enter first name">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter last name" id="inputPassword4">
            </div>
            <div class="col-12 spouse d-none">
                <label for="inputAddress" class="form-label">Best way to contact?</label>
                <input type="text" name="best_way_to_contact" class="form-control" id="inputAddress" placeholder="Email or Phone">
            </div>
            <div class="col-12 spouse d-none">
                <label for="inputAddress2" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputAddress2" placeholder="Enter email">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputCity" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="inputCity" placeholder="Enter Phone number">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputState" class="form-label">Rent/Own</label>
                <select id="inputState" name="rent_own" class="form-select">
                    <option selected>Choose...</option>
                    <option>Rented</option>
                    <option>Owned</option>
                </select>
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputZip" class="form-label">Lease Ends?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputZip" class="form-label">Monthy Rent/Monthly Mortgage</label>
                <input type="text" class="form-control" id="">
            </div>
            <h3 class="spouse d-none">Previous 2nd Address (optional Fields)</h3>
            <div class="col-md-6 spouse d-none">
                <label for="inputZip" class="form-label">Street Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter City Name">
            </div> 
            <div class="col-md-6 spouse d-none">
                <label for="inputZip" class="form-label">AP+</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputZip" class="form-label">City</label>
                <input type="text" class="form-control" id="" placeholder="Enter City name">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputZip" class="form-label">State</label>
                <input type="text" class="form-control" id="" placeholder="Enter State Name">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="number" class="form-control" id="" placeholder="Enter Zip code">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-12 spouse d-none">
                <label for="inputState" class="form-label">Rent/Own</label>
                <select id="inputState" name="rent_own" class="form-select">
                    <option selected>Choose...</option>
                    <option>Rented</option>
                    <option>Owned</option>
                </select>
            </div>
            <h3 class="spouse d-none">Current Employer</h3>
            <div class="col-md-6 spouse d-none">
                <label for="inputEmail4" class="form-label">Applicant Employer</label>
                <input type="text" name="first_name" class="form-control" placeholder="Enter Applicant Employer" id="inputEmail4">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12 spouse d-none">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <h3 class="spouse d-none">Previous Employer</h3>

            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Previous Employer</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4" placeholder="Enter Previous Employer">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3 class="spouse d-none">Bank & Assets</h3>

            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Bank 1 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 1 Name" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Bank 2 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 2 Name" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Assets</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Checkings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">savings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">401 K</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Stocks</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Bonds</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 spouse d-none">
                <label for="inputPassword4" class="form-label">Cash on Hand</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12 spouse d-none">
                <label for="inputPassword4" class="form-label">Home Proceed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3 class="spouse d-none">Liabilities</h3>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">Credit Cards</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 spouse d-none">
                <label for="inputPassword4" class="form-label">Auto Payments</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12 spouse d-none">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="cosignerId">
                    <label class="form-check-label" for="cosignerId">
                        Do you have a cosigner?
                    </label>
                </div>
            </div>
            {{-- ====== end spouse ======= --}}
            {{-- ====== client 2 ======= --}}
            <h3 class="d-none client_two">Client 2 Information</h3>
            <div class="col-md-6 client_two d-none">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="Enter first name">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter last name" id="inputPassword4">
            </div>
            <div class="col-12 client_two d-none">
                <label for="inputAddress" class="form-label">Best way to contact?</label>
                <input type="text" name="best_way_to_contact" class="form-control" id="inputAddress" placeholder="Email or Phone">
            </div>
            <div class="col-12 client_two d-none">
                <label for="inputAddress2" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputAddress2" placeholder="Enter email">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputCity" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="inputCity" placeholder="Enter Phone number">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputState" class="form-label">Rent/Own</label>
                <select id="inputState" name="rent_own" class="form-select">
                    <option selected>Choose...</option>
                    <option>Rented</option>
                    <option>Owned</option>
                </select>
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputZip" class="form-label">Lease Ends?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputZip" class="form-label">Monthy Rent/Monthly Mortgage</label>
                <input type="text" class="form-control" id="">
            </div>
            <h3 class="client_two d-none">Previous 2nd Address (optional Fields)</h3>
            <div class="col-md-6 client_two d-none">
                <label for="inputZip" class="form-label">Street Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter City Name">
            </div> 
            <div class="col-md-6 client_two d-none">
                <label for="inputZip" class="form-label">AP+</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputZip" class="form-label">City</label>
                <input type="text" class="form-control" id="" placeholder="Enter City name">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputZip" class="form-label">State</label>
                <input type="text" class="form-control" id="" placeholder="Enter State Name">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="number" class="form-control" id="" placeholder="Enter Zip code">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-12 client_two d-none">
                <label for="inputState" class="form-label">Rent/Own</label>
                <select id="inputState" name="rent_own" class="form-select">
                    <option selected>Choose...</option>
                    <option>Rented</option>
                    <option>Owned</option>
                </select>
            </div>
            <h3 class="client_two d-none">Current Employer</h3>
            <div class="col-md-6 client_two d-none">
                <label for="inputEmail4" class="form-label">Applicant Employer</label>
                <input type="text" name="first_name" class="form-control" placeholder="Enter Applicant Employer" id="inputEmail4">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12 client_two d-none">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <h3 class="client_two d-none">Previous Employer</h3>

            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Previous Employer</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4" placeholder="Enter Previous Employer">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3 class="client_two d-none">Bank & Assets</h3>

            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Bank 1 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 1 Name" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Bank 2 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 2 Name" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Assets</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Checkings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">savings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">401 K</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Stocks</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Bonds</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_two d-none">
                <label for="inputPassword4" class="form-label">Cash on Hand</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12 client_two d-none">
                <label for="inputPassword4" class="form-label">Home Proceed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3 class="client_two d-none">Liabilities</h3>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">Credit Cards</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_two d-none">
                <label for="inputPassword4" class="form-label">Auto Payments</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12 client_two d-none">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="AdditionalApplicant">
                    <label class="form-check-label" for="AdditionalApplicant">
                        Do you have an additional applicant?
                    </label>
                </div>
            </div>
            {{-- ======end client 2 ====== --}}
            {{-- ==========client 3=========== --}}
            <h3 class="d-none client_three">Client 3 Information</h3>
            <div class="col-md-6 client_three d-none">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="Enter first name" >
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter last name" id="inputPassword4">
            </div>
            <div class="col-12 client_three d-none">
                <label for="inputAddress" class="form-label">Best way to contact?</label>
                <input type="text" name="best_way_to_contact" class="form-control" id="inputAddress" placeholder="Email or Phone">
            </div>
            <div class="col-12 client_three d-none">
                <label for="inputAddress2" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputAddress2" placeholder="Enter email">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputCity" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="inputCity" placeholder="Enter Phone number">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputState" class="form-label">Rent/Own</label>
                <select id="inputState" name="rent_own" class="form-select">
                    <option selected>Choose...</option>
                    <option>Rented</option>
                    <option>Owned</option>
                </select>
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputZip" class="form-label">Lease Ends?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputZip" class="form-label">Monthy Rent/Monthly Mortgage</label>
                <input type="text" class="form-control" id="">
            </div>
            <h3 class="client_three d-none">Previous 2nd Address (optional Fields)</h3>
            <div class="col-md-6 client_three d-none">
                <label for="inputZip" class="form-label">Street Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter Street Name">
            </div> 
            <div class="col-md-6 client_three d-none">
                <label for="inputZip" class="form-label">AP+</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputZip" class="form-label">City</label>
                <input type="text" class="form-control" id="" placeholder="Enter City name">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputZip" class="form-label">State</label>
                <input type="text" class="form-control" id="" placeholder="Enter State Name">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="number" class="form-control" id="" placeholder="Enter Zip code">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-12 client_three d-none">
                <label for="inputState" class="form-label">Rent/Own</label>
                <select id="inputState" name="rent_own" class="form-select">
                    <option selected>Choose...</option>
                    <option>Rented</option>
                    <option>Owned</option>
                </select>
            </div>
            <h3 class="client_three d-none">Current Employer</h3>
            <div class="col-md-6 client_three d-none">
                <label for="inputEmail4" class="form-label">Applicant Employer</label>
                <input type="text" name="first_name" class="form-control" placeholder="Enter Applicant Employer" id="inputEmail4">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12 client_three d-none">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <h3 class="client_three d-none">Previous Employer</h3>

            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Previous Employer</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4" placeholder="Enter Previous Employer">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3 class="client_three d-none">Bank & Assets</h3>

            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Bank 1 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 1 Name" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Bank 2 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 2 Name" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Assets</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Checkings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">savings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">401 K</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Stocks</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Bonds</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three d-none">
                <label for="inputPassword4" class="form-label">Cash on Hand</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12 client_three d-none">
                <label for="inputPassword4" class="form-label">Home Proceed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3 class="client_three d-none">Liabilities</h3>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">Credit Cards</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three d-none">
                <label for="inputPassword4" class="form-label">Auto Payments</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12 client_three d-none">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="clientThreeSpouse">
                    <label class="form-check-label" for="clientThreeSpouse">
                        Do you have a spouse?
                    </label>
                </div>
            </div>

            {{-- ===========end client 3============ --}}

            {{-- ============ client 3 spouse =========== --}}
            <h3 class="d-none client_three_spouse">Client 3 Spouse</h3>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="Enter first name">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter last name" id="inputPassword4">
            </div>
            <div class="col-12 client_three_spouse d-none">
                <label for="inputAddress" class="form-label">Best way to contact?</label>
                <input type="text" name="best_way_to_contact" class="form-control" id="inputAddress" placeholder="Email or Phone">
            </div>
            <div class="col-12 client_three_spouse d-none">
                <label for="inputAddress2" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputAddress2" placeholder="Enter email">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputCity" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="inputCity" placeholder="Enter Phone number">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputState" class="form-label">Rent/Own</label>
                <select id="inputState" name="rent_own" class="form-select">
                    <option selected>Choose...</option>
                    <option>Rented</option>
                    <option>Owned</option>
                </select>
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputZip" class="form-label">Lease Ends?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputZip" class="form-label">Monthy Rent/Monthly Mortgage</label>
                <input type="text" class="form-control" id="">
            </div>
            <h3 class="client_three_spouse d-none">Previous 2nd Address (optional Fields)</h3>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputZip" class="form-label">Street Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter City Name">
            </div> 
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputZip" class="form-label">AP+</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputZip" class="form-label">City</label>
                <input type="text" class="form-control" id="" placeholder="Enter City name">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputZip" class="form-label">State</label>
                <input type="text" class="form-control" id="" placeholder="Enter State Name">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="number" class="form-control" id="" placeholder="Enter Zip code">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputZip" class="form-label">How Long Have you lived there?</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-12 client_three_spouse d-none">
                <label for="inputState" class="form-label">Rent/Own</label>
                <select id="inputState" name="rent_own" class="form-select">
                    <option selected>Choose...</option>
                    <option>Rented</option>
                    <option>Owned</option>
                </select>
            </div>
            <h3 class="client_three_spouse d-none">Current Employer</h3>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputEmail4" class="form-label">Applicant Employer</label>
                <input type="text" name="first_name" class="form-control" placeholder="Enter Applicant Employer" id="inputEmail4">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <h3 class="client_three_spouse d-none">Previous Employer</h3>

             <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Previous Employer</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4" placeholder="Enter Previous Employer">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Position</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter position" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Start Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">End Date</label>
                <input type="date"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">W2/Self-Employed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">How Long</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Salary / Hourly</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Income 2023</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Income 2022</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3 class="client_three_spouse d-none">Bank & Assets</h3>

            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Bank 1 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 1 Name" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Bank 2 Name</label>
                <input type="text"  name="last_name" class="form-control" placeholder="Enter Bank 2 Name" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Assets</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Checkings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">savings</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">401 K</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Stocks</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Bonds</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Cash on Hand</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Home Proceed</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>

            <h3 class="client_three_spouse d-none">Liabilities</h3>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Credit Cards</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6 client_three_spouse d-none">
                <label for="inputPassword4" class="form-label">Auto Payments</label>
                <input type="text"  name="last_name" class="form-control" id="inputPassword4">
            </div>
            {{-- <div class="col-12 client_three_spouse d-none">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Do you have a spouse?
                    </label>
                </div>
            </div> --}}
            {{-- ============ end client 3 spouse =========== --}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </section>
    <!-- Basic Floating Label Form section end -->



    @push('page_script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
    $(document).on("click","#isSpouse",function(){
        if($(".spouse").hasClass("d-none")){
            $(".spouse").removeClass("d-none");
        }else{
            $(".spouse").addClass("d-none");
        }
        // isSpouse
    })
    $(document).on("click","#cosignerId",function(){
        if($(".client_two").hasClass("d-none")){
            $(".client_two").removeClass("d-none");
        }else{
            $(".client_two").addClass("d-none");
        }
        // isSpouse
    })
    $(document).on("click","#AdditionalApplicant",function(){
        if($(".client_three").hasClass("d-none")){
            $(".client_three").removeClass("d-none");
        }else{
            $(".client_three").addClass("d-none");
        }
        // isSpouse
    })
    $(document).on("click","#clientThreeSpouse",function(){
        if($(".client_three_spouse").hasClass("d-none")){
            $(".client_three_spouse").removeClass("d-none");
        }else{
            $(".client_three_spouse").addClass("d-none");
        }
        // isSpouse
    })
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

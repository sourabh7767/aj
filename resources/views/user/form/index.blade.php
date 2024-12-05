@extends('layouts.admin')

@section('title') Create User @endsection

@section('content')

@push('page_style')
<style>
    
        .form-container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fafafa;
        }
        .section h3 {
            margin-bottom: 10px;
            color: #555;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: white;
            background: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .submit-btn:hover {
            background: #0056b3;
        }
    </style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

@endpush

    <!-- Basic multiple Column Form section start -->
<section id="multiple-column-form">

    <div class="form-container">
        <h2>Complete Client Information Form</h2>
        <form action="" method="POST">
            @csrf

            <!-- Personal Information -->
            <div class="section">
                <h3>Personal Information</h3>
                <div class="form-group"><label>First Name</label><input type="text" name="first_name"></div>
                <div class="form-group"><label>Last Name</label><input type="text" name="last_name"></div>
                <div class="form-group"><label>Date of Birth</label><input type="date" name="dob"></div>
                <div class="form-group"><label>Spouse First Name</label><input type="text" name="spouse_first_name"></div>
                <div class="form-group"><label>Spouse Last Name</label><input type="text" name="spouse_last_name"></div>
                <div class="form-group"><label>Spouse Date of Birth</label><input type="date" name="spouse_dob"></div>
            </div>

            <!-- Additional Clients -->
            <div class="section">
                <h3>Additional Clients</h3>
                <div class="form-group"><label>Client 2 First Name</label><input type="text" name="client_2_first_name"></div>
                <div class="form-group"><label>Client 2 Last Name</label><input type="text" name="client_2_last_name"></div>
                <div class="form-group"><label>Client 2 DOB</label><input type="date" name="client_2_dob"></div>
                <div class="form-group"><label>Spouse 2 First Name</label><input type="text" name="spouse_2_first_name"></div>
                <div class="form-group"><label>Spouse 2 Last Name</label><input type="text" name="spouse_2_last_name"></div>
                <div class="form-group"><label>Spouse 2 DOB</label><input type="date" name="spouse_2_dob"></div>

                <div class="form-group"><label>Client 3 First Name</label><input type="text" name="client_3_first_name"></div>
                <div class="form-group"><label>Client 3 Last Name</label><input type="text" name="client_3_last_name"></div>
                <div class="form-group"><label>Client 3 DOB</label><input type="date" name="client_3_dob"></div>
                <div class="form-group"><label>Spouse 3 First Name</label><input type="text" name="spouse_3_first_name"></div>
                <div class="form-group"><label>Spouse 3 Last Name</label><input type="text" name="spouse_3_last_name"></div>
                <div class="form-group"><label>Spouse 3 DOB</label><input type="date" name="spouse_3_dob"></div>
            </div>

            <!-- Property Details -->
            <div class="section">
                <h3>Property Details</h3>
                <div class="form-group"><label>Home Purchase Address</label><input type="text" name="home_purchase_address"></div>
                <div class="form-group"><label>Sales Price Range</label><input type="text" name="sales_price_range"></div>
                <div class="form-group"><label>Sales Price</label><input type="number" name="sales_price"></div>
                <div class="form-group"><label>County</label><input type="text" name="county"></div>
                <div class="form-group"><label>Home Type</label><input type="text" name="home_type"></div>
                <div class="form-group"><label>Closing Date</label><input type="date" name="closing_date"></div>
                <div class="form-group"><label>Title Company</label><input type="text" name="title_company"></div>
            </div>

            <!-- Loan and Financial Details -->
            <div class="section">
                <h3>Loan and Financial Details</h3>
                <div class="form-group"><label>Loan Type</label><input type="text" name="loan_type"></div>
                <div class="form-group"><label>Earnest Money</label><input type="number" name="earnest_money"></div>
                <div class="form-group"><label>Option Money</label><input type="number" name="option_money"></div>
                <div class="form-group"><label>Commission Percent</label><input type="number" name="commission_percent"></div>
                <div class="form-group"><label>Commission Bonus</label><input type="number" name="commission_bonus"></div>
                <div class="form-group"><label>Max PITI</label><input type="number" name="max_piti"></div>
            </div>

            <!-- Additional Notes -->
            <div class="section">
                <h3>Additional Notes</h3>
                <div class="form-group"><label>Referred By</label><input type="text" name="referred_by"></div>
                <div class="form-group"><label>Notes</label><textarea name="notes" rows="4"></textarea></div>
                <div class="form-group"><label>Marketing Project</label><input type="text" name="marketing_project"></div>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

</section>
@endsection

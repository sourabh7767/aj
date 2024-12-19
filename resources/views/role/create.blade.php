@extends('layouts.admin')

@section('title')
    Create User
@endsection

@section('content')
    @push('page_style')
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
        <style>
            label {
                padding: 4px 6px;
                line-height: 190%;
                outline-style: none;
                transition: all .6s;
            }

            .hiddenCB div {
                display: inline;
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .hiddenCB input[type="checkbox"],
            .hiddenCB input[type="radio"] {
                display: none;

            }

            .hiddenCB label {

                cursor: pointer;
            }

            .hiddenCB input[type="checkbox"]+label:hover {
                background: rgba(0, 128, 128, .8);
                color: black;
            }

            .hiddenCB input[type="checkbox"]:checked+label {
                background: rgba(0, 128, 128, .4);
                color: black;
            }

            .hiddenCB input[type="checkbox"]:checked+label:hover {
                background: rgba(0, 128, 128, 0, .7);
                color: black;
            }

            .items_pill {
                display: flex !important;
                justify-content: start;
                align-items: center;
                gap: 8px;
                flex-wrap: wrap;
                max-height: 250px;
                overflow-y: auto;
                box-shadow: 0 0 15px #dddddd9f;
                padding: 20px !important;
                border-radius: 10px;
                margin-bottom: 20px !important  ;
            }

            .items_pill label {
                padding: 5px 15px;
                border-radius: 10px;
                background-color: #fff;
                border: 1px solid #ddd;
                display: inline-block;
            }

            .all_select {
                padding-bottom: 10px;
                display: flex;
                justify-content: start;
                align-items: center;
            }

            .all_select input {
                width: 20px;
                height: 20px;
                accent-color: #99cdcc00;
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
                            <li class="breadcrumb-item"><a href="{{route('user.home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('role.index')}}">Role</a>
                            </li>
                            <li class="breadcrumb-item active">Create Role
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create User</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('role.store') }}" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-2">
                                                <label class="col-form-label" for="title">Title <span class="text-danger asteric-sign">&#42;</span></label>
                                            </div>
                                            <div class="col-sm-6">
                                            <input id="title" type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}">
                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="all_select">
                                        <input type="checkbox" id="is_spouse" name="is_spouse" />
                                        <label for="is_spouse">Is spouse</label>
                                    </div> --}}
                                    <div class="all_select">
                                        <input type="checkbox" id="selectAll" onclick="toggleSelectAll(this)" />
                                        <label for="selectAll">Select All</label>
                                    </div>
                                    <div class="hiddenCB">
                                        <div class="items_pill">
                                            @forelse ($columns as $column)
                                                <input type="checkbox" name="columns[]" value="{{ $column }}" class="child-checkbox"
                                                    id="cb{{ $column }}" onclick="updateSelectAll()" /><label
                                                    for="cb{{ $column }}">{{ ucfirst(str_replace('_', ' ', $column)) }}</label>

                                                    @if ($loop->last)
                                                    <input type="checkbox" id="is_spouse" name="is_spouse" class="child-checkbox"/>
                                                    <label
                                                    for="is_spouse">Is Spouse</label>
                                                    @endif
                                            @empty
                                                <p>No data!</p>
                                            @endforelse
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-2">
                                            <label class="col-form-label" for="title">Permissions <span class="text-danger asteric-sign">&#42;</span></label>
                                        </div>
                                        <div class="col-sm-6">
                                             @foreach($permissions as $key =>$value)
                                             <input type="checkbox" name="permission[]" class="form-check-input {{ $errors->has('permission') ? ' is-invalid' : '' }}" value="{{$value->id}}">&nbsp;&nbsp;&nbsp;{{$value->title}}</br>
                                            @endforeach
                                            @if ($errors->has('permission'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('permission') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <button type="Submit" class="btn btn-primary me-1">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Floating Label Form section end -->



    @push('page_script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


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
            function updateSelectAll() {
                const checkboxes = document.querySelectorAll('.child-checkbox');
                const selectAllCheckbox = document.getElementById('selectAll');
                selectAllCheckbox.checked = Array.from(checkboxes).every(checkbox => checkbox.checked);
            }
        </script>
    @endpush
@endsection

{{-- ==============================================================================
public function create(Role $role)
    {
        $columns = Schema::getColumnListing('users');
        $exclude = ['password', 'remember_token', 'created_at', 'updated_at','deleted_at','id'];

        // Filter out the excluded columns
        $filteredColumns = array_diff($columns, $exclude);
        // dd($columns);
        return view('user.create',['columns' => $filteredColumns]);
    } --}}

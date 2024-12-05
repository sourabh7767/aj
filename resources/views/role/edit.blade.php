@extends('layouts.admin')

@section('title') Edit Role @endsection
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
@section('content')

  <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('user.home')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('role.index')}}">Role</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Role
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Role</h4>
                                </div>
                                <div class="card-body">
                                  <form method="POST" action="{{ route('role.update', $model->id) }}">
                                    @csrf
                                    @method('put')
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Make your choice(s)</h3>
                                                <div class="all_select">
                                                    <input type="checkbox" {{$model->is_spouse == 1 ? "checked":""}} id="is_spouse" name="is_spouse" />
                                                    <label for="is_spouse">Is spouse</label>
                                                </div>
                                                <div class="all_select">
                                                    <input type="checkbox"  id="selectAll" onclick="toggleSelectAll(this)" />
                                                    <label for="selectAll">Select All</label>
                                                </div>
                                                <div class="hiddenCB">
                                                    <div class="items_pill">
                                                        @forelse ($filteredColumns as $column)
                                                            <input type="checkbox" name="columns[]" value="{{ $column }}" {{in_array($column,$feilds) ? "checked" : ""}} class="child-checkbox"
                                                                id="cb{{ $column }}" onclick="updateSelectAll()" /><label
                                                                for="cb{{ $column }}">{{ ucfirst(str_replace('_', ' ', $column)) }}</label>
                                                        @empty
                                                            <p>No data!</p>
                                                        @endforelse
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-2">
                                                        <label class="col-form-label" for="title">Title <span class="text-danger asteric-sign">&#42;</span></label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                    <input id="title" type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title')?old('title'):$model->title }}">
                                                    @if ($errors->has('title'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                                    @endif
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
                                                         <input type="checkbox" name="permission[]" class="form-check-input {{ $errors->has('permission') ? ' is-invalid' : '' }}" value="{{$value->id}}" {{in_array($value->id,$rolePermissions)?"checked":""}}>&nbsp;&nbsp;&nbsp;{{$value->title}}</br>
                                                        @endforeach
                                                        @if ($errors->has('permission'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('permission') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div> --}}
                                          
                                           
                                        
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Horizontal form layout section end -->

@push('page_script')
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
    updateSelectAll();
</script>
@endpush


@endsection
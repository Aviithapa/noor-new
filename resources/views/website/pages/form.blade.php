
@extends('website.layout.app')

@section('content')


    <!-- Start of Application form 
    ============================================= -->
    <div class="contact-form-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Contact Form -->
                <div class="col-md-12 contact-form">
                    <div class="content">
                        <div class="heading">
                            <h3>Membership Form</h3>
                        </div>
                       <form action="{{ url('#') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="form-section row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name of Member:</label>
                                        <input class="form-control" id="name" name="name" placeholder="Name of member" type="text" required value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="alert-error">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name of Member Nepali:</label>
                                        <input class="form-control" id="name_nepali" name="name_nepali" placeholder="Name of member in Nepali" type="text" required value="{{ old('name_nepali') }}">
                                        @if ($errors->has('name_nepali'))
                                            <span class="alert-error">{{ $errors->first('name_nepali') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Birth Nepali (YYYY-MM-DD) B.S.:</label>
                                        <input class="form-control" id="date_of_birth_nepali" name="date_of_birth_nepali" placeholder="YYYY-MM-DD" type="text" required value="{{ old('date_of_birth_nepali') }}">
                                        @if ($errors->has('date_of_birth_nepali'))
                                            <span class="alert-error">{{ $errors->first('date_of_birth_nepali') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Marital Status:</label>
                                        <select class="form-control" name="marital_status" id="marital_status" required>
                                            <option value="">Select Marital Status</option>
                                            <option value="MARRIED" {{ old('marital_status') == 'MARRIED' ? 'selected' : '' }}>Married</option>
                                            <option value="UN-MARRIED" {{ old('marital_status') == 'UN-MARRIED' ? 'selected' : '' }}>Un-married</option>
                                            <option value="DIVORCED" {{ old('marital_status') == 'DIVORCED' ? 'selected' : '' }}>Divorced</option>
                                        </select>
                                        @if ($errors->has('marital_status'))
                                            <span class="alert-error">{{ $errors->first('marital_status') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gender:</label>
                                        <select class="form-control" name="sex" id="sex" required>
                                            <option value="">Select Gender</option>
                                            <option value="MALE" {{ old('sex') == 'MALE' ? 'selected' : '' }}>Male</option>
                                            <option value="FEMALE" {{ old('sex') == 'FEMALE' ? 'selected' : '' }}>Female</option>
                                            <option value="OTHER" {{ old('sex') == 'OTHER' ? 'selected' : '' }}>Other</option>
                                        </select>
                                        @if ($errors->has('sex'))
                                            <span class="alert-error">{{ $errors->first('sex') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Resident Number:</label>
                                        <input class="form-control" id="resident_number" name="resident_number" placeholder="Resident Number" type="text" required value="{{ old('resident_number') }}">
                                        @if ($errors->has('resident_number'))
                                            <span class="alert-error">{{ $errors->first('resident_number') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Mobile Number:</label>
                                        <input class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile Number" type="text" required value="{{ old('mobile_number') }}">
                                        @if ($errors->has('mobile_number'))
                                            <span class="alert-error">{{ $errors->first('mobile_number') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Office Number:</label>
                                        <input class="form-control" id="office_number" name="office_number" placeholder="Office Number" type="text" required value="{{ old('office_number') }}">
                                        @if ($errors->has('office_number'))
                                            <span class="alert-error">{{ $errors->first('office_number') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Add similar blocks for the rest of the fields -->

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <label>Permanent Address:</label>
                                            <input class="form-control" id="permanent_address" name="permanent_address" placeholder="Permanent Address" type="text" value="{{ old('permanent_address') }}">
                                            @if ($errors->has('permanent_address'))
                                                <span class="alert-error">{{ $errors->first('permanent_address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <label>Temporary Address:</label>
                                            <input class="form-control" id="temporary_address" name="temporary_address" placeholder="Temporary Address" type="text" value="{{ old('temporary_address') }}">
                                            @if ($errors->has('temporary_address'))
                                                <span class="alert-error">{{ $errors->first('temporary_address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin-right: 10px;">
                                    <div class="row">
                                        <div class="form-group">
                                            <label>Date of Birth:</label>
                                            <input class="form-control" id="date_of_birth" name="date_of_birth" type="date" value="{{ old('date_of_birth') }}">
                                            @if ($errors->has('date_of_birth'))
                                                <span class="alert-error">{{ $errors->first('date_of_birth') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Continue for other fields -->
                                
                                <div class="col-md-3" style="margin-right: 10px;">
                                    <div class="row">
                                        <div class="form-group">
                                            <label>Name of Father:</label>
                                            <input class="form-control" id="name_of_father" name="name_of_father" placeholder="Name of Father" type="text" value="{{ old('name_of_father') }}">
                                            @if ($errors->has('name_of_father'))
                                                <span class="alert-error">{{ $errors->first('name_of_father') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- More fields as necessary -->
                                
                                <div class="form-group">
                                    <button class="primary-button button-md" type="submit">Submit</button>
                                </div>
                            </div>
                        </form> 

                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Application form -->

@endsection


@push('scripts')
 <script>
   $(document).ready(function() {
    $('.js-example-basic-single').select2();
});

 </script>
    
@endpush

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
                        <div class="heading text-center">
                            <h3 >Account Opening Application</h3>
                        </div>
                        <form action="{{ url('membership-form') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="heading">
                                <h4 style="color: white; background: green; padding: 5px; border-radius: 5px; ">For Individual Account</h4>
                            </div>

                            <div class="form-section row">
                                <div class="col-md-10">

                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="depositor_photo">Depositor Photo:</label>
                                        <input class="form-control @error('depositor_photo') is-invalid @enderror"
                                               id="depositor_photo"
                                               name="depositor_photo"
                                               type="file"
                                               required
                                               accept="images/*"
                                               value="{{ old('depositor_photo') }}">

                                        @error('depositor_photo')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name_of_depositor">Name of Depositor:</label>
                                        <input class="form-control @error('name_of_depositor') is-invalid @enderror"
                                               id="name_of_depositor"
                                               name="name_of_depositor"
                                               placeholder="Name of member"
                                               type="text"
                                               required
                                               value="{{ old('name_of_depositor') }}">

                                        @error('name_of_depositor')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="permanent_address">Permanent Address:</label>
                                        <input class="form-control @error('permanent_address') is-invalid @enderror"
                                               id="permanent_address"
                                               name="permanent_address"
                                               placeholder="Permanent Address"
                                               type="text"
                                               required
                                               value="{{ old('permanent_address') }}">

                                        @error('permanent_address')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="temporary_address">Temporary Address:</label>
                                        <input class="form-control @error('temporary_address') is-invalid @enderror"
                                               id="temporary_address"
                                               name="temporary_address"
                                               placeholder="Temporary Address"
                                               type="text"
                                               required
                                               value="{{ old('temporary_address') }}">

                                        @error('temporary_address')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="date_of_birth_nepali">Date of Birth Nepali (YYYY-MM-DD) B.S.:</label>
                                        <input class="form-control @error('date_of_birth_nepali') is-invalid @enderror"
                                               id="date_of_birth_nepali"
                                               name="date_of_birth_nepali"
                                               placeholder="YYYY-MM-DD"
                                               type="text"
                                               required
                                               value="{{ old('date_of_birth_nepali') }}">

                                        @error('date_of_birth_nepali')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="marital_status">Marital Status:</label>
                                        <select class="form-control @error('marital_status') is-invalid @enderror"
                                                name="marital_status"
                                                id="marital_status"
                                                required>
                                            <option value="">Select Marital Status</option>
                                            <option value="MARRIED" {{ old('marital_status') == 'MARRIED' ? 'selected' : '' }}>Married</option>
                                            <option value="UNMARRIED" {{ old('marital_status') == 'UNMARRIED' ? 'selected' : '' }}>Unmarried</option>
                                            <option value="DIVORCED" {{ old('marital_status') == 'DIVORCED' ? 'selected' : '' }}>Divorced</option>
                                        </select>

                                        @error('marital_status')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sex">Gender:</label>
                                        <select class="form-control @error('sex') is-invalid @enderror"
                                                name="sex"
                                                id="sex"
                                                required>
                                            <option value="">Select Gender</option>
                                            <option value="MALE" {{ old('sex') == 'MALE' ? 'selected' : '' }}>Male</option>
                                            <option value="FEMALE" {{ old('sex') == 'FEMALE' ? 'selected' : '' }}>Female</option>
                                            <option value="OTHER" {{ old('sex') == 'OTHER' ? 'selected' : '' }}>Other</option>
                                        </select>

                                        @error('sex')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name_of_father_husband">Name of Father/Husband:</label>
                                        <input class="form-control @error('name_of_father_husband') is-invalid @enderror"
                                               id="name_of_father_husband"
                                               name="name_of_father_husband"
                                               placeholder="Name of Father/Husband"
                                               type="text"
                                               required
                                               value="{{ old('name_of_father_husband') }}">

                                        @error('name_of_father_husband')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name_of_guardian">Name of Guardian (in case of minor):</label>
                                        <input class="form-control @error('name_of_guardian') is-invalid @enderror"
                                               id="name_of_guardian"
                                               name="name_of_guardian"
                                               placeholder="Name of Guardian"
                                               type="text"
                                               required
                                               value="{{ old('name_of_guardian') }}">

                                        @error('name_of_guardian')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="resident_number">Resident Number:</label>
                                        <input class="form-control @error('resident_number') is-invalid @enderror"
                                               id="resident_number"
                                               name="resident_number"
                                               placeholder="Resident Number"
                                               type="text"
                                               required
                                               value="{{ old('resident_number') }}">

                                        @error('resident_number')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number:</label>
                                        <input class="form-control @error('mobile_number') is-invalid @enderror"
                                               id="mobile_number"
                                               name="mobile_number"
                                               placeholder="Mobile Number"
                                               type="text"
                                               required
                                               value="{{ old('mobile_number') }}">

                                        @error('mobile_number')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="office_number">Office Number:</label>
                                        <input class="form-control @error('office_number') is-invalid @enderror"
                                               id="office_number"
                                               name="office_number"
                                               placeholder="Office Number"
                                               type="text"
                                               required
                                               value="{{ old('office_number') }}">

                                        @error('office_number')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h4>Identity Card</h4>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="citizenship_number">Citizenship Number:</label>
                                        <input class="form-control @error('citizenship_number') is-invalid @enderror"
                                               id="citizenship_number"
                                               name="citizenship_number"
                                               placeholder="Citizenship Number"
                                               type="text"
                                               required
                                               value="{{ old('citizenship_number') }}">

                                        @error('citizenship_number')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="passport_number">Passport Number:</label>
                                        <input class="form-control @error('passport_number') is-invalid @enderror"
                                               id="passport_number"
                                               name="passport_number"
                                               placeholder="Passport Number"
                                               type="text"
                                               required
                                               value="{{ old('passport_number') }}">

                                        @error('passport_number')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="driving_license_number">Driving License Number:</label>
                                        <input class="form-control @error('driving_license_number') is-invalid @enderror"
                                               id="driving_license_number"
                                               name="driving_license_number"
                                               placeholder="Driving License Number"
                                               type="text"
                                               required
                                               value="{{ old('driving_license_number') }}">

                                        @error('driving_license_number')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type_of_account">Type of Account:</label>
                                        <select class="form-control @error('type_of_account') is-invalid @enderror"
                                                name="type_of_account"
                                                id="type_of_account"
                                                required>
                                            <option value="">Select Type</option>
                                            <option value="General_saving" {{ old('type_of_account') == 'General_saving' ? 'selected' : '' }}>General Saving</option>
                                            <option value="Daily_saving" {{ old('type_of_account') == 'Daily_saving' ? 'selected' : '' }}>Daily Saving</option>
                                            <option value="Special_saving" {{ old('type_of_account') == 'Special_saving' ? 'selected' : '' }}>Special Saving</option>
                                            <option value="Recurring_saving" {{ old('type_of_account') == 'Recurring_saving' ? 'selected' : '' }}>Recurring Saving</option>
                                            <option value="Fixed" {{ old('type_of_account') == 'Fixed' ? 'selected' : '' }}>Fixed</option>
                                        </select>
                                        @error('type_of_account')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="period">Period:</label>
                                        <select class="form-control @error('period') is-invalid @enderror"
                                                name="period"
                                                id="period"
                                                required>
                                            <option value="">Select Period</option>
                                            <option value="3_months" {{ old('period') == '3_months' ? 'selected' : '' }}>3 Months</option>
                                            <option value="6_months" {{ old('period') == '6_months' ? 'selected' : '' }}>6 Months</option>
                                            <option value="1_year" {{ old('period') == '1_year' ? 'selected' : '' }}>1 Year</option>
                                            <option value="5_years" {{ old('period') == '5_years' ? 'selected' : '' }}>5 Years</option>
                                            <option value="5_plus_years" {{ old('period') == '5_plus_years' ? 'selected' : '' }}>5+ Years</option>
                                        </select>
                                        @error('period')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nominee_name">Nominee Name:</label>
                                        <input class="form-control @error('nominee_name') is-invalid @enderror"
                                               id="nominee_name"
                                               name="nominee_name"
                                               placeholder="Nominee Name"
                                               type="text"
                                               required
                                               value="{{ old('nominee_name') }}">
                                        @error('nominee_name')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="relation">Relation:</label>
                                        <input class="form-control @error('relation') is-invalid @enderror"
                                               id="relation"
                                               name="relation"
                                               placeholder="Relation"
                                               type="text"
                                               required
                                               value="{{ old('relation') }}">
                                        @error('relation')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nominee_address">Nominee Address:</label>
                                        <input class="form-control @error('nominee_address') is-invalid @enderror"
                                               id="nominee_address"
                                               name="nominee_address"
                                               placeholder="Nominee Address"
                                               type="text"
                                               required
                                               value="{{ old('nominee_address') }}">
                                        @error('nominee_address')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <hr style="border: 2px solid green; height: 0.5px;"/>

                                <div class="heading">
                                    <h4 style="color: white; background: green; padding: 5px; border-radius: 5px; margin-top: 10px;">For Minor Account</h4>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_of_minor">Name of Minor:</label>
                                        <input class="form-control @error('name_of_minor') is-invalid @enderror"
                                               id="name_of_minor"
                                               name="name_of_minor"
                                               placeholder="Name of Minor"
                                               type="text"
                                               value="{{ old('name_of_minor') }}">
                                        @error('name_of_minor')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="age_of_minor">Age of Minor:</label>
                                        <input class="form-control @error('age_of_minor') is-invalid @enderror"
                                               id="age_of_minor"
                                               name="age_of_minor"
                                               placeholder="Age of Minor"
                                               type="text"
                                               value="{{ old('age_of_minor') }}">
                                        @error('age_of_minor')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_of_minor_guardian">Name of Minor Guardian:</label>
                                        <input class="form-control @error('name_of_minor_guardian') is-invalid @enderror"
                                               id="name_of_minor_guardian"
                                               name="name_of_minor_guardian"
                                               placeholder="Name of Minor Guardian"
                                               type="text"
                                               value="{{ old('name_of_minor_guardian') }}">
                                        @error('name_of_minor_guardian')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="relation_with_minor">Relation With Minor:</label>
                                        <input class="form-control @error('relation_with_minor') is-invalid @enderror"
                                               id="relation_with_minor"
                                               name="relation_with_minor"
                                               placeholder="Relation With Minor"
                                               type="text"
                                               value="{{ old('relation_with_minor') }}">
                                        @error('relation_with_minor')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address_of_minor_guardian">Address of Minor Guardian:</label>
                                        <input class="form-control @error('address_of_minor_guardian') is-invalid @enderror"
                                               id="address_of_minor_guardian"
                                               name="address_of_minor_guardian"
                                               placeholder="Address of Minor Guardian"
                                               type="text"
                                               value="{{ old('address_of_minor_guardian') }}">
                                        @error('address_of_minor_guardian')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_number_of_guardian">Contact Number of Guardian:</label>
                                        <input class="form-control @error('contact_number_of_guardian') is-invalid @enderror"
                                               id="contact_number_of_guardian"
                                               name="contact_number_of_guardian"
                                               placeholder="Contact Number of Guardian"
                                               type="text"
                                               value="{{ old('contact_number_of_guardian') }}">
                                        @error('contact_number_of_guardian')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <hr style="border: 2px solid green; height: 0.5px;"/>

                                <div class="heading">
                                    <h4 style="color: white; background: green; padding: 5px; border-radius: 5px; margin-top: 10px;">Details of Nominee</h4>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_of_nominee">Name of Nominee:</label>
                                        <input class="form-control @error('name_of_nominee') is-invalid @enderror"
                                               id="name_of_nominee"
                                               name="name_of_nominee"
                                               placeholder="Name of Nominee"
                                               type="text"
                                               value="{{ old('name_of_nominee') }}">
                                        @error('name_of_nominee')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="relation_with_nominee">Relation With Nominee:</label>
                                        <input class="form-control @error('relation_with_nominee') is-invalid @enderror"
                                               id="relation_with_nominee"
                                               name="relation_with_nominee"
                                               placeholder="Relation With Nominee"
                                               type="text"
                                               value="{{ old('relation_with_nominee') }}">
                                        @error('relation_with_nominee')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nominee_guardian_name">Name of Nominee's Father/Mother/Husband:</label>
                                        <input class="form-control @error('nominee_guardian_name') is-invalid @enderror"
                                               id="nominee_guardian_name"
                                               name="nominee_guardian_name"
                                               placeholder="Name of Nominee's Father/Mother/Husband"
                                               type="text"
                                               value="{{ old('nominee_guardian_name') }}">
                                        @error('nominee_guardian_name')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nominee_dob">Date of Birth of Nominee:</label>
                                        <input class="form-control @error('nominee_dob') is-invalid @enderror"
                                               id="nominee_dob"
                                               name="nominee_dob"
                                               placeholder="Date of Birth of Nominee"
                                               type="text"
                                               value="{{ old('nominee_dob') }}">
                                        @error('nominee_dob')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nominee_contact">Contact Number of Nominee:</label>
                                        <input class="form-control @error('nominee_contact') is-invalid @enderror"
                                               id="nominee_contact"
                                               name="nominee_contact"
                                               placeholder="Contact Number of Nominee"
                                               type="text"
                                               value="{{ old('nominee_contact') }}">
                                        @error('nominee_contact')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nominee_citizenship">Nominee Citizenship:</label>
                                        <input class="form-control @error('nominee_citizenship') is-invalid @enderror"
                                               id="nominee_citizenship"
                                               name="nominee_citizenship"
                                               placeholder="Nominee Citizenship"
                                               type="text"
                                               value="{{ old('nominee_citizenship') }}">
                                        @error('nominee_citizenship')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="citizenship_issued_date">Nominee Citizenship Issued Date:</label>
                                        <input class="form-control @error('citizenship_issued_date') is-invalid @enderror"
                                               id="citizenship_issued_date"
                                               name="citizenship_issued_date"
                                               placeholder="Nominee Citizenship Issued Date"
                                               type="text"
                                               value="{{ old('citizenship_issued_date') }}">
                                        @error('citizenship_issued_date')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="citizenship_issue_place">Nominee Citizenship Issue Place:</label>
                                        <input class="form-control @error('citizenship_issue_place') is-invalid @enderror"
                                               id="citizenship_issue_place"
                                               name="citizenship_issue_place"
                                               placeholder="Nominee Citizenship Issue Place"
                                               type="text"
                                               value="{{ old('citizenship_issue_place') }}">
                                        @error('citizenship_issue_place')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nominee_address">Nominee Address:</label>
                                        <input class="form-control @error('nominee_address') is-invalid @enderror"
                                               id="nominee_address"
                                               name="nominee_address"
                                               placeholder="Nominee Address"
                                               type="text"
                                               value="{{ old('nominee_address') }}">
                                        @error('nominee_address')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>







                                <!-- Submit Button -->
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
    </div>
    <!-- End of Application form -->

@endsection


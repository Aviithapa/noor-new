
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
                            <h3 >Membership Form</h3>
                        </div>
                        <form action="{{ url('membership-step-form') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-section row">
                                <div class="col-md-10">

                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="member_photo">Member Photo:</label>
                                        <input class="form-control @error('member_photo') is-invalid @enderror"
                                               id="member_photo"
                                               name="member_photo"
                                               type="file"
                                               required
                                               accept="images/*"
                                               value="{{ old('member_photo') }}">

                                        @error('member_photo')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name_of_member">Name of Member:</label>
                                        <input class="form-control @error('name_of_member') is-invalid @enderror"
                                               id="name_of_member"
                                               name="name_of_member"
                                               placeholder="Name of member"
                                               type="text"
                                               required
                                               value="{{ old('name_of_member', $depositor->name_of_depositor ?? '') }}">

                                        @error('name_of_member')
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
                                               value="{{ old('permanent_address', $depositor->permanent_address ?? '') }}"
                                               >

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
                                               value="{{ old('temporary_address', $depositor->temporary_address ?? '') }}">

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
                                               value="{{ old('date_of_birth_nepali', $depositor->date_of_birth_nepali ?? '') }}">

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
                                            <option value="MARRIED" {{ old('marital_status', $depositor->marital_status ?? '') == 'MARRIED' ? 'selected' : '' }}>Married</option>
                                            <option value="UNMARRIED" {{ old('marital_status', $depositor->marital_status ?? '') == 'UNMARRIED' ? 'selected' : '' }}>Unmarried</option>
                                            <option value="DIVORCED" {{ old('marital_status', $depositor->marital_status ?? '') == 'DIVORCED' ? 'selected' : '' }}>Divorced</option>
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
                                            <option value="MALE" {{ old('sex', $depositor->sex ?? '') == 'MALE' ? 'selected' : '' }}>Male</option>
                                            <option value="FEMALE" {{ old('sex', $depositor->sex ?? '') == 'FEMALE' ? 'selected' : '' }}>Female</option>
                                            <option value="OTHER" {{ old('sex', $depositor->sex ?? '') == 'OTHER' ? 'selected' : '' }}>Other</option>
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
                                            value="{{ old('name_of_father_husband', $depositor->name_of_father_husband ?? '') }}">

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

                                 <!-- Name of Guardian -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name_of_guardian">Name of Guardian (in case of minor):</label>
                                    <input class="form-control @error('name_of_guardian') is-invalid @enderror"
                                        id="name_of_guardian"
                                        name="name_of_guardian"
                                        placeholder="Name of Guardian"
                                        type="text"
                                        required
                                        value="{{ old('name_of_guardian', $depositor->name_of_guardian ?? '') }}">

                                    @error('name_of_guardian')
                                        <span class="alert-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Resident Number -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="resident_number">Resident Number:</label>
                                    <input class="form-control @error('resident_number') is-invalid @enderror"
                                        id="resident_number"
                                        name="resident_number"
                                        placeholder="Resident Number"
                                        type="text"
                                        required
                                        value="{{ old('resident_number', $depositor->resident_number ?? '') }}">

                                    @error('resident_number')
                                        <span class="alert-error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Mobile Number -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mobile_number">Mobile Number:</label>
                                    <input class="form-control @error('mobile_number') is-invalid @enderror"
                                        id="mobile_number"
                                        name="mobile_number"
                                        placeholder="Mobile Number"
                                        type="text"
                                        required
                                        value="{{ old('mobile_number', $depositor->mobile_number ?? '') }}">

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
                                               value="{{ old('office_number', $depositor->office_number ?? '') }}">

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
                                               value="{{ old('citizenship_number', $depositor->citizenship_number ?? '') }}">

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
                                               value="{{ old('passport_number', $depositor->passport_number ?? '') }}">

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
                                               value="{{ old('driving_license_number', $depositor->driving_license_number ?? '') }}">

                                        @error('driving_license_number')
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
                                               value="{{ old('nominee_name', $depositor->nominee_name ?? '') }}">
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
                                               value="{{ old('relation', $depositor->relation ?? '') }}">
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
                                               value="{{ old('nominee_address', $depositor->nominee_address ?? '') }}">
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


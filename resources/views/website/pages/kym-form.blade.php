
@extends('website.layout.app')

@section('content')

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
    }
</style>


    <!-- Start of Application form
    ============================================= -->
    <div class="contact-form-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Contact Form -->
                <div class="col-md-12 contact-form">
                    <div class="content">
                        <div class="heading text-center">
                            <h3 >Know Your Member (KYM) Form</h3>
                        </div>
                        <form action="{{ url('kym-step-form') }}" method="POST" enctype="multipart/form-data">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="full_name">Full Name:</label>
                                        <input class="form-control @error('full_name') is-invalid @enderror"
                                               id="full_name"
                                               name="full_name"
                                               placeholder="Full Name"
                                               type="text"
                                               required
                                               value="{{ old('full_name', $depositor->name_of_depositor ?? '') }}">

                                        @error('full_name')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="full_name_nepali">Full Name Nepali:</label>
                                        <input class="form-control @error('full_name_nepali') is-invalid @enderror"
                                               id="full_name_nepali"
                                               name="full_name_nepali"
                                               placeholder="Full Name Nepali"
                                               type="text"
                                               required
                                               value="{{ old('full_name_nepali') }}">

                                        @error('full_name_nepali')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nationality">Nationality:</label>
                                        <input class="form-control @error('nationality') is-invalid @enderror"
                                               id="nationality"
                                               name="nationality"
                                               placeholder="Nationality"
                                               type="text"
                                               value="{{ old('nationality') }}">

                                        @error('nationality')
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
                                               value="{{ old('date_of_birth_nepali', $depositor->date_of_birth_nepali ?? '') }}">

                                        @error('date_of_birth_nepali')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="date_of_birth_english">Date of Birth English  (YYYY-MM-DD) A.D.:</label>
                                        <input class="form-control @error('date_of_birth_english') is-invalid @enderror"
                                               id="date_of_birth_english"
                                               name="date_of_birth_english"
                                               placeholder="YYYY-MM-DD"
                                               type="text"
                                               value="{{ old('date_of_birth_english') }}">

                                        @error('date_of_birth_english')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="citizenship_number">Citizenship Number:</label>
                                        <input class="form-control @error('citizenship_number') is-invalid @enderror"
                                               id="citizenship_number"
                                               name="citizenship_number"
                                               placeholder="Citizenship Number"
                                               type="text"
                                               value="{{ old('citizenship_number', $depositor->citizenship_number ?? '') }}">

                                        @error('citizenship_number')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="place_of_issue">Place of Issue:</label>
                                        <input class="form-control @error('place_of_issue') is-invalid @enderror"
                                               id="place_of_issue"
                                               name="place_of_issue"
                                               placeholder="Place of issue"
                                               type="text"
                                               value="{{ old('place_of_issue', $depositor->place_of_issue ?? '') }}">

                                        @error('place_of_issue')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="date_of_issue">Date of issue:</label>
                                        <input class="form-control @error('date_of_issue') is-invalid @enderror"
                                               id="date_of_issue"
                                               name="date_of_issue"
                                               placeholder="Date of issue"
                                               type="text"
                                               value="{{ old('date_of_issue', $depositor->date_of_issue ?? '') }}">

                                        @error('date_of_issue')
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
                                               value="{{ old('passport_number', $depositor->passport_number ?? '') }}">

                                        @error('passport_number')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="passport_place_of_issue">Passport Place of Issue:</label>
                                        <input class="form-control @error('passport_place_of_issue') is-invalid @enderror"
                                               id="passport_place_of_issue"
                                               name="passport_place_of_issue"
                                               placeholder="Place of issue"
                                               type="text"
                                               value="{{ old('passport_place_of_issue', $depositor->place_of_issue ?? '') }}">

                                        @error('passport_place_of_issue')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="passport_date_of_issue">Date of issue:</label>
                                        <input class="form-control @error('passport_date_of_issue') is-invalid @enderror"
                                               id="passport_date_of_issue"
                                               name="passport_date_of_issue"
                                               placeholder="Date of issue"
                                               type="text"
                                               value="{{ old('passport_date_of_issue', $depositor->date_of_issue ?? '') }}">

                                        @error('passport_date_of_issue')
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

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="age">Age:</label>
                                        <input class="form-control @error('age') is-invalid @enderror"
                                               id="age"
                                               name="age"
                                               placeholder="Age"
                                               type="text"
                                               value="{{ old('age') }}">
                                        @error('age')
                                            <span class="alert-error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-8">
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




                                <div class="col-md-4">
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



                                <table>
                                    <thead>
                                        <tr>
                                            <th>क्र.स.</th>
                                            <th>नाम (Relationship)</th>
                                            <th>पूरा नाम (Full Name)</th>
                                            <th>नागरिकता नं. (Citizenship No.)</th>
                                            <th>जारी गरेको स्थान (Place of Issue)</th>
                                            <th>जारी गरेको मिति (Date of Issue)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>श्रीमती/श्रीमान (Spouse)</td>
                                            <td><input type="text" name="spouse_name"></td>
                                            <td><input type="text" name="spouse_citizenship"></td>
                                            <td><input type="text" name="spouse_place_of_issue"></td>
                                            <td><input type="date" name="spouse_date_of_issue"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>बाजे (Grand Father)</td>
                                            <td><input type="text" name="grandfather_name"></td>
                                            <td><input type="text" name="grandfather_citizenship"></td>
                                            <td><input type="text" name="grandfather_place_of_issue"></td>
                                            <td><input type="date" name="grandfather_date_of_issue"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>पिता (Father)</td>
                                            <td><input type="text" name="father_name"></td>
                                            <td><input type="text" name="father_citizenship"></td>
                                            <td><input type="text" name="father_place_of_issue"></td>
                                            <td><input type="date" name="father_date_of_issue"></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>आमा (Mother)</td>
                                            <td><input type="text" name="mother_name"></td>
                                            <td><input type="text" name="mother_citizenship"></td>
                                            <td><input type="text" name="mother_place_of_issue"></td>
                                            <td><input type="date" name="mother_date_of_issue"></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>छोरा (Son)</td>
                                            <td><input type="text" name="son_name"></td>
                                            <td><input type="text" name="son_citizenship"></td>
                                            <td><input type="text" name="son_place_of_issue"></td>
                                            <td><input type="date" name="son_date_of_issue"></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>छोरी (Daughter)</td>
                                            <td><input type="text" name="daughter_name"></td>
                                            <td><input type="text" name="daughter_citizenship"></td>
                                            <td><input type="text" name="daughter_place_of_issue"></td>
                                            <td><input type="date" name="daughter_date_of_issue"></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>बुहारी (Daughter in Law)</td>
                                            <td><input type="text" name="daughter_in_law_name"></td>
                                            <td><input type="text" name="daughter_in_law_citizenship"></td>
                                            <td><input type="text" name="daughter_in_law_place_of_issue"></td>
                                            <td><input type="date" name="daughter_in_law_date_of_issue"></td>
                                        </tr>
                                    </tbody>
                                </table>




                                <!-- Submit Button -->
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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


<?php

namespace App\Http\Requests\Depositor;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepositorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Update this to handle authorization if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'depositor_photo' => 'nullable|image|mimes:jpeg,png|max:2048',
            'name_of_depositor' => 'nullable|string|max:255',
            'permanent_address' => 'nullable|string|max:255',
            'temporary_address' => 'nullable|string|max:255',
            'date_of_birth_nepali' => 'nullable|date',
            'marital_status' => 'nullable|string|max:255',
            'sex' => 'nullable|string|max:10',
            'name_of_father_husband' => 'nullable|string|max:255',
            'name_of_guardian' => 'nullable|string|max:255',
            'resident_number' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|string|max:20',
            'office_number' => 'nullable|string|max:20',
            'citizenship_number' => 'nullable|string|max:255',
            'passport_number' => 'nullable|string|max:255',
            'driving_license_number' => 'nullable|string|max:255',
            'type_of_account' => 'nullable|string|max:255',
            'period' => 'nullable|string|max:255',
            'nominee_name' => 'nullable|string|max:255',
            'relation' => 'nullable|string|max:255',
            'nominee_address' => 'nullable|string|max:255',
            'name_of_minor' => 'nullable|string|max:255',
            'age_of_minor' => 'nullable|integer',
            'name_of_minor_guardian' => 'nullable|string|max:255',
            'relation_with_minor' => 'nullable|string|max:255',
            'address_of_minor_guardian' => 'nullable|string|max:255',
            'contact_number_of_guardian' => 'nullable|string|max:20',
            'name_of_nominee' => 'nullable|string|max:255',
            'relation_with_nominee' => 'nullable|string|max:255',
            'nominee_guardian_name' => 'nullable|string|max:255',
            'nominee_dob' => 'nullable|string',
            'nominee_contact' => 'nullable|string|max:20',
            'nominee_citizenship' => 'nullable|string|max:255',
            'citizenship_issued_date' => 'nullable|string',
            'citizenship_issue_place' => 'nullable|string|max:255',
            'nominee_address' => 'nullable|string|max:255',
        ];
    }

}

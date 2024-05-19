<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class CreateMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'name_nepali' => 'required|string|max:255',
            'date_of_birth_nepali' => 'required|date_format:Y-m-d',
            'marital_status' => 'required|in:MARRIED,UN-MARRIED,DIVORCED',
            'sex' => 'required|in:MALE,FEMALE,OTHER',
            'resident_number' => 'sometimes|digits_between:7,10',
            'mobile_number' => 'required|digits_between:10,15',
            'office_number' => 'sometimes|digits_between:7,10',
            'province' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'municipality_vdc' => 'required|string|max:255',
            'town' => 'nullable|string|max:255',
            'house_number' => 'nullable|string|max:255',
            'citizenship_number' => 'nullable|string|max:255',
            'passport_number' => 'nullable|string|max:255',
            'driving_licence_number' => 'nullable|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'temporary_address' => 'required|string|max:255',
            'date_of_birth' => 'nullable|date',
            'name_of_father' => 'nullable|string|max:255',
            'name_of_guardian' => 'nullable|string|max:255',
            'occupation' => 'nullable|string|max:255',
            'name_of_nominee' => 'nullable|string|max:255',
            'relation_to_me' => 'nullable|string|max:255',
            'nominee_address' => 'nullable|string|max:255',
        ];
    }
}

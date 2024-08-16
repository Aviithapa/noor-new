<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depositor extends Model
{
    use HasFactory;

    protected $fillable = [
        'depositor_photo',
        'name_of_depositor',
        'permanent_address',
        'temporary_address',
        'date_of_birth_nepali',
        'marital_status',
        'sex',
        'name_of_father_husband',
        'name_of_guardian',
        'resident_number',
        'mobile_number',
        'office_number',
        'citizenship_number',
        'passport_number',
        'driving_license_number',
        'type_of_account',
        'period',
        'nominee_name',
        'relation',
        'nominee_address',
        'name_of_minor',
        'age_of_minor',
        'name_of_minor_guardian',
        'relation_with_minor',
        'address_of_minor_guardian',
        'contact_number_of_guardian',
        'name_of_nominee',
        'relation_with_nominee',
        'nominee_guardian_name',
        'nominee_dob',
        'nominee_contact',
        'nominee_citizenship',
        'citizenship_issued_date',
        'citizenship_issue_place',
        'nominee_address',
        'status'
    ];
}

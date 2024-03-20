<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SahakariAccountForm extends Model
{
    use HasFactory;

    const GENDER_MALE = 'MALE';
    const GENDER_FEMALE = 'FEMALE';
    const GENDER_OTHER = 'OTHER';

    const MARITAL_STATUS_MARRIED = 'MARRIED';
    const MARITAL_STATUS_UN_MARRIED = 'UN-MARRIED';
    const MARITAL_STATUS_DIVORCED = 'DIVORCED';


    const GENDER = [
        self::GENDER_MALE,
        self::GENDER_FEMALE,
        self::GENDER_OTHER
    ];

    const MARITAL_STATUS = [
        self::MARITAL_STATUS_MARRIED,
        self::MARITAL_STATUS_UN_MARRIED,
        self::MARITAL_STATUS_DIVORCED
    ];


    protected $fillable = ['name', 'name_nepali', 'date_of_birth_nepali', 'material_status', 'sex', 'occupation'];
}

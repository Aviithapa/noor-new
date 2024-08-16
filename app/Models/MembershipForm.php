<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'depositor_id',
        'member_photo',
        'name_of_member',
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
        'nominee_name',
        'relation',
        'nominee_address',
    ];

    public function depositor()
    {
        return $this->belongsTo(Depositor::class);
    }
}

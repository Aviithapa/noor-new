<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KycDetails extends Model
{
    use HasFactory;

    protected $table = 'kym_details';

    protected $fillable = [
        'depositor_id',
        'member_photo',
        'full_name',
        'full_name_nepali',
        'nationality',
        'date_of_birth_nepali',
        'date_of_birth_english',
        'citizenship_number',
        'place_of_issue',
        'date_of_issue',
        'passport_number',
        'passport_place_of_issue',
        'passport_date_of_issue',
        'marital_status',
        'sex',
        'age',
        'name_of_guardian',
        'relation',
        'permanent_address',
        'temporary_address',
        'spouse_name',
        'spouse_citizenship',
        'spouse_place_of_issue',
        'spouse_date_of_issue',
        'grandfather_name',
        'grandfather_citizenship',
        'grandfather_place_of_issue',
        'grandfather_date_of_issue',
        'father_name',
        'father_citizenship',
        'father_place_of_issue',
        'father_date_of_issue',
        'mother_name',
        'mother_citizenship',
        'mother_place_of_issue',
        'mother_date_of_issue',
        'son_name',
        'son_citizenship',
        'son_place_of_issue',
        'son_date_of_issue',
        'daughter_name',
        'daughter_citizenship',
        'daughter_place_of_issue',
        'daughter_date_of_issue',
        'daughter_in_law_name',
        'daughter_in_law_citizenship',
        'daughter_in_law_place_of_issue',
        'daughter_in_law_date_of_issue',
    ];

    public function depositor()
    {
        return $this->belongsTo(Depositor::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name', 'phone_number', 'cnic_number', 'ntn_number', 'blood_group',
        'permanent_address', 'mailing_address', 'facebook_profile', 'employment_type',
        'position_applied', 'education', 'photo',
    ];

    protected $casts = [
        'education' => 'array',
    ];

}

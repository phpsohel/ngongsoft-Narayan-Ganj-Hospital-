<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'cbc_sl',
        'member_name',
        'father_name',
        'mother_name',
        'address',
        'permanent_address',
        'birth',
        'education',
        'company_name',
        'designation',
        'company_address',
        'phone',
        'email',
        'blood',
        'nid',
        'cbc_type',
        'photo',
        'payment_status',
        'application_status',
        'note',
    ];
}
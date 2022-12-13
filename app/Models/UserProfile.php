<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profile';

    protected $fillable = [
        'user_profile_id',
        'user_id',
        'user_name',
        'user_email_id',
        'user_mobile_number',
        'address',
        'city',
        'region',
        'country',
        'pincode',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];
}

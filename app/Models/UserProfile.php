<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends BaseModel
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'user_profile';

    protected $primaryKey = 'user_id';

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

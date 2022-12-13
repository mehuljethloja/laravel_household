<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quote';

    protected $fillable = [
        'quote_id',
        'activity_id',
        'user_id',
        'insurance_type_id',
        'plan_id',
        'quote_request',
        'quote_response',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];

    public function plan(){
        return $this->hasOne('App\Models\Plan','plan_id','plan_id');
    }

    public function insuranceType(){
        return $this->hasOne('App\Models\InsuranceType','insurance_type_id','insurance_type_id');
    }

    public function user(){
        return $this->hasOne('App\Models\UserProfile','user_id','user_id');
    }
}

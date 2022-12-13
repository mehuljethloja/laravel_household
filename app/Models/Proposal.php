<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $table = 'proposal';

    protected $fillable = [
        'proposal_id',
        'quote_id',
        'activity_id',
        'insurance_type_id',
        'user_id',
        'plan_id',
        'product_id',
        'language character',
        'proposal_request',
        'proposal_response',
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

    public function product(){
        return $this->hasOne('App\Models\Product','product_id','product_id');
    }

    public function user(){
        return $this->hasOne('App\Models\UserProfile','user_id','user_id');
    }

    public function quote(){
        return $this->hasOne('App\Models\Quote','quote_id','quote_id');
    }
}

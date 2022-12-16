<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends BaseModel
{
    use HasFactory;

    protected $table = 'policy';
    protected $primaryKey = 'policy_id';

    protected $fillable = [
        'policy_id',
        'user_id',
        'insurance_type_id',
        'plan_id',
        'product_id',
        'proposal_id',
        'policy_number',
        'start_date',
        'end_date',
        'transaction_date',
        'transaction_id',
        'certificate_number',
        'policy_status',
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

    public function proposal(){
        return $this->hasOne('App\Models\Proposal','proposal_id','proposal_id');
    }

}

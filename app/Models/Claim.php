<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Claim extends BaseModel
{
    use SoftDeletes;
    use HasFactory;
    
    protected $table = 'claim';
    protected $primaryKey = 'claim_id';

    protected $fillable = [
        'claim_id',
        'user_id',
        'insurance_type_id',
        'plan_id',
        'product_id',
        'policy_id',
        'policy_number',
        'claim_number',
        'time_of_loss',
        'date_of_loss',
        'affected_items',
        'reported_to_police',
        'reported_documents',
        'description',
        'location_coordinates',
        'insured_property_documents',
        'additional_info',
        'intimation_date',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];

    public function user(){
        return $this->hasOne('App\Models\UserProfile','user_id','user_id');
    }

    public function insuranceType(){
        return $this->hasOne('App\Models\InsuranceType','insurance_type_id','insurance_type_id');
    }

    public function plan(){
        return $this->hasOne('App\Models\Plan','plan_id','plan_id');
    }

    public function policy(){
        return $this->hasOne('App\Models\Policy','policy_id','policy_id');
    }
    
    public function product(){
        return $this->hasOne('App\Models\Product','product_id','product_id');
    }
}

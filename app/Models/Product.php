<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'product_id',
        'insurance_type_id',
        'plan_id',
        'product_name_en character',
        'product_name_sw character',
        'premium_without_vat',
        'vat_percentage',
        'vat_amount',
        'gross_premium',
        'building_compensation',
        'content_compensation',
        'currency',
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
}

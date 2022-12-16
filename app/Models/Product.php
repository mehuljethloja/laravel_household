<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends BaseModel
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_id',
        'insurance_type_id',
        'plan_id',
        'product_name_en',
        'product_name_sw',
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

    protected $appends = ['product_name'];

    public function getProductNameAttribute()
    {
        $column = 'product_name_'.app()->getLocale();
        return $this->$column;
    }

    public function plan(){
        return $this->hasOne('App\Models\Plan','plan_id','plan_id');
    }

    public function insuranceType(){
        return $this->hasOne('App\Models\InsuranceType','insurance_type_id','insurance_type_id');
    }
}

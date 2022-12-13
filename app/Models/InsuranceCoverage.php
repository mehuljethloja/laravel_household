<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCoverage extends Model
{
    use HasFactory;

    protected $table = 'insurance_coverage';

    protected $fillable = [
        'coverage_id',
        'insurance_type_id',
        'plan_id',
        'product_id',
        'coverage_heading_en',
        'coverage_data_en',
        'coverage_heading_sw',
        'coverage_data_sw',
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
    
}

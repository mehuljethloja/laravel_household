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
        'region_id',
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
        return $this->hasMany(InsuranceType::class,'insurance_type_id','insurance_type_id');
    }

    public function coverageDetails(){
        return $this->hasMany(InsuranceCoverage::class,'insurance_type_id','insurance_type_id')->select(['insurance_type_id','coverage_heading_'.app()->getLocale().' as coverageHeading','coverage_data_'.app()->getLocale().' as coverageData']);
    }

    public static function getProducts($params){
        
        $model = self::select([
            'product_id','product_name_'.app()->getLocale().' as product_name','product.insurance_type_id','plan_id','premium_without_vat as premium','building_compensation','content_compensation','vat_percentage'
            ])->with(['coverageDetails']);
        
        if(isset($params['insurance_type_id']) && !empty($params['insurance_type_id'])){
            //$model->where('product.insurance_type_id',$params['insurance_type_id']);
        }            
        $model = $model->get();
        return $model;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermAndCondition extends BaseModel
{
    use HasFactory;

    protected $table = 'term_and_condition';
    protected $primaryKey = 'term_id';

    protected $fillable = [
        'term_id',
        'insurance_type_id',
        'plan_id',
        'product_id',
        'term_name_en',
        'term_name_sw',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];
    protected $hidden   = [ 'term_name_en','term_name_sw', 'created_by','created_at','modified_at','modified_by','deleted_at','deleted_by'];
    protected $appends  = ['term_name'];

    public function getTermNameAttribute()
    {
        $column = 'term_name_'.app()->getLocale();
        return $this->$column;
    }

    public function insuranceType(){
        return $this->hasOne('App\Models\InsuranceType','insurance_type_id','insurance_type_id');
    }

    public function plan(){
        return $this->hasOne('App\Models\Plan','plan_id','plan_id');
    }

    public function product(){
        return $this->hasOne('App\Models\Product','product_id','product_id');
    }
}

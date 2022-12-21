<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceType extends BaseModel
{
    use HasFactory;

    protected $table = 'insurance_type';
    protected $primaryKey = 'insurance_type_id';

    protected $fillable = [
        'insurance_type_id',
        'insurance_type_name_en',
        'insurance_type_name_sw',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];

    protected $hidden   = [ 'insurance_type_name_en', 'insurance_type_name_sw', 'created_by','created_at','modified_at','modified_by','deleted_at','deleted_by'];
<<<<<<< HEAD
    
    // public function product(){
    //     return $this->belongsTo(Product::class, 'insurance_type_id' , 'insurance_type_id');
    // }

    public function insuranceCoverage(){
        return $this->belongsToMany(InsuranceCoverage::class,'insurance_type_id','insurance_type_id');
=======
    protected $appends  = ['insurance_type_name'];


    public function getInsuranceTypeNameAttribute()
    {
        $column = 'insurance_type_name_'.app()->getLocale();
        return $this->$column;
>>>>>>> af8f2ec68d0cc2c2fbb0b2c6355576a2ba4e10d0
    }
}
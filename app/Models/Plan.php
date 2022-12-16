<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends BaseModel
{
    use HasFactory;

    protected $table = 'plan';
    protected $primaryKey = 'plan_id';

    protected $fillable = [
        'plan_id',
        'insurance_type_id',
        'plan_name_en',
        'plan_name_sw',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];
    protected $hidden   = [ 'plan_name_en', 'plan_name_sw', 'created_by','created_at','modified_at','modified_by','deleted_at','deleted_by'];

    public function insuranceType(){
        return $this->hasOne('App\Models\InsuranceType','insurance_type_id','insurance_type_id');
    }

    public function proposal(){
        return $this->hasOne('App\Models\Proposal','proposal_id','proposal_id');
    }
}

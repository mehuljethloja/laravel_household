<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceType extends Model
{
    use HasFactory;

    protected $table = 'insurance_type';

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
}

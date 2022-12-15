<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $primaryKey = 'city_id';
    protected $table = 'city';
    public $timestamps = false;
    protected $fillable=[
        'city_id','city_name_en','city_name_sw','created_by','created_at','modified_at','modified_by','deleted_at','deleted_by'
    ];

}

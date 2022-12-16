<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'city';
    // primary key for city table
    protected $primaryKey = 'city_id';

    // fillable field for 
    protected $fillable = [ 'city_id','city_name_en','city_name_sw','created_by','created_at','modified_at','modified_by','deleted_at','deleted_by'];
    protected $hidden   = [ 'city_name_en','city_name_sw', 'created_by','created_at','modified_at','modified_by','deleted_at','deleted_by'];
    protected $appends = ['city_name'];


    public function getCityNameAttribute()
    {
        $column = 'city_name_'.app()->getLocale();
        return $this->$column;
    }
}

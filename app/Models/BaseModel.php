<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'modified_at' => 'datetime:Y-m-d H:i:s',
    ];
    
    // change column name for updated_at
    const UPDATED_AT = 'modified_at';
    // set timestamp in table for created_at and modified_at
    protected $dateFormat = 'U';
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempDocument extends Model
{
    use HasFactory;

    protected $table = 'temp_document';

    protected $fillable = [
        'temp_document_id',
        'user_id',
        'policy_id',
        'document_name',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];

    public function policy(){
        return $this->hasOne('App\Models\Policy','policy_id','policy_id');
    }

    public function user(){
        return $this->hasOne('App\Models\UserProfile','user_id','user_id');
    }
}

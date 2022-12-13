<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'document';

    protected $fillable = [
        'document_id',
        'user_id',
        'claim_id',
        'document_name',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];

    public function user(){
        return $this->hasOne('App\Models\UserProfile','user_id','user_id');
    }
    
    public function claim(){
        return $this->hasOne('App\Models\Claim','claim_id','claim_id');
    }
}

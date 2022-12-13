<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';

    protected $fillable = [
        'transaction_id',
        'user_id',
        'insurance_type_id',
        'proposal_id',
        'payment_id',
        'premium',
        'payment_mode',
        'payment_status',
        'language',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];

    public function insuranceType(){
        return $this->hasOne('App\Models\InsuranceType','insurance_type_id','insurance_type_id');
    }

    public function user(){
        return $this->hasOne('App\Models\UserProfile','user_id','user_id');
    }

    public function proposal(){
        return $this->hasOne('App\Models\Proposal','proposal_id','proposal_id');
    }
}

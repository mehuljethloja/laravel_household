<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends BaseModel
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'quote';

    protected $primaryKey = 'quote_id';

    protected $fillable = [
        'quote_id',
        'activity_id',
        'user_id',
        'insurance_type_id',
        'plan_id',
        'quote_request',
        'quote_response',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];

    public function plan(){
        return $this->hasOne('App\Models\Plan','plan_id','plan_id');
    }

    public function insuranceType(){
        return $this->hasOne('App\Models\InsuranceType','insurance_type_id','insurance_type_id');
    }

    public function user(){
        return $this->hasOne('App\Models\UserProfile','user_id','user_id');
    }

    public static function saveQuote($params){
        if($params){
            $quoteModel = new Quote();
            if(isset($params['activity_id']))
                $quoteModel->activity_id = $params['activity_id'];
            
            if(isset($params['user_id']))
                $quoteModel->user_id = $params['user_id'];

            if(isset($params['insurance_type_id']))
                $quoteModel->insurance_type_id = $params['insurance_type_id'];

            if(isset($params['plan_id']))
                $quoteModel->plan_id = $params['plan_id'];

            if(isset($params['quote_request']))
                $quoteModel->quote_request = json_encode($params['quote_request']);

            if(isset($params['quote_response']))
                $quoteModel->quote_response = json_encode($params['quote_response']); 

            $quoteModel->save();
            
            return $quoteModel;
        }
        return false;
    }
}

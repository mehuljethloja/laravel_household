<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SelectedQuote extends BaseModel
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'selected_quote';

    protected $primaryKey = 'selected_quote_id';

    protected $fillable = [
        'user_id',
        'language',
        'quote_id',
        'activity_id',
        'quote_no',
        'insurance_type_id',
        'plan_id',
        'product_id',
        'created_by',
        'created_at',
        'modified_by',
        'modified_at',
        'deleted_at',
        'deleted_by'
    ];

    public function saveQuote($params){
        
        $model = new SelectedQuote();
            if(isset($params['product_id']))
                $model->product_id = $params['product_id'];
            
            if(isset($params['user_id']))
                $model->user_id = $params['user_id'];

            if(isset($params['activity_id']))
                $model->activity_id = $params['activity_id'];

            if(isset($params['insurance_type_id']))
                $model->insurance_type_id = $params['insurance_type_id'];

            if(isset($params['quote_id']))
                $model->quote_id = $params['quote_id'];
            
            if(isset($params['quote_id']))
                $model->quote_no = $params['quote_id'];

            if(isset($params['plan_id']))
                $model->plan_id = $params['plan_id'];
            
            if(isset($params['language']))
                $model->language = $params['language'];

        $model->save();     
        return $model;   
    }

}

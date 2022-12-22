<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class SaveQuoteRequest extends APIFormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_id' => 'required',
            'user_id' => 'required',
            'activity_id' => 'required',
            'quote_id' => 'required',
            'insurance_type_id' => 'required',
            'plan_id' => 'required'
        ];
    }
}

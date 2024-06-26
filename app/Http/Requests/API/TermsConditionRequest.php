<?php

namespace App\Http\Requests\API;

class TermsConditionRequest extends APIFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method())
        {
            case 'PUT':
            case 'DELETE':
            case 'PATCH':
            case 'POST':
            {
                return [];
            }
            case 'GET':
                return [
                    'product_id'        => 'required|exists:product',
                    'plan_id'           => 'required|exists:plan',
                    'insurance_type_id' => 'required|exists:insurance_type',
                ];
            default:
                return [];
        }
    }
}

<?php

namespace App\Http\Requests\API;

class InsuranceTypeRequest extends APIFormRequest
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
                    'language' => 'required|in:en,sw',
                ];
            default:
                return [];
        }
    }
}

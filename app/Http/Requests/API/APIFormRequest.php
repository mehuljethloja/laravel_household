<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class APIFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    protected function failedValidation(Validator $validator) {
        $errors = $validator->errors();
        if($errors->count() > 0){
            $result ["success"] = false;
            $result ["message"] = $errors->first();
            throw new HttpResponseException(response()->json($result, 200));
        }
    }
}

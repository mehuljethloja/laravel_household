<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class SaveProposalRequest extends APIFormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "insured_name" => 'required',
            "mobile_number" => 'required',
            "email_id" => 'required',
            "address" => 'required',
            "city" => 'required',
            "region" => 'required',
            "country" => 'required',
            "pincode" => 'required',
            "location_coordinates" => 'required',
            "document_proof" => 'required',
            "document_proof_id" => 'required',
            "product_id" => 'required',
            "policy_start_date" => 'required',
            "policy_end_date" => 'required',
            "user_id" => 'required',
            "activity_id" => 'required',
            "quote_id" => 'required',
            "insurance_type_id" => 'required',
        ];
    }
}

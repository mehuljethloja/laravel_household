<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\SaveProposalRequest;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class ProposalController extends BaseController
{
    public function save(SaveProposalRequest $request)
    {
        try{

            $modal = new Proposal();
            $modal->quote_id = $request->quote_id;
            $modal->activity_id = $request->activity_id;
            $modal->insurance_type_id = $request->insurance_type_id;
            $modal->user_id = $request->user_id;
            $modal->plan_id = $request->plan_id;
            $modal->product_id = $request->product_id;
            $modal->language = app()->getLocale();
            $modal->proposal_request = json_encode($request->all());
            // $modal->proposal_response = ;
            if($modal->save()){
                $response[] = [
                    'proposal_id' => $modal->proposal_id,
                    'activity_id' => $modal->activity_id,
                    'quote_id' => $modal->quote_id,
                ];
                return $this->sendResponse($response,__('api.PROPOSAL_SAVED_SUCCEFULLY'), Response::HTTP_OK);
            }
            else{
                return $this->sendError(__('api.PROPOSAL_SAVED_ERROR'),'', 201);
            }   
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

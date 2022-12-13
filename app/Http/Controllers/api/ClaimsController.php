<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class ClaimsController extends BaseController
{
    public function saveClaimDetails()
    {
        try{
            $response = [];
            return $this->sendResponse($response,'', Response::HTTP_OK);    
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getClaimDetailByClaimId()
    {
        try{
            $response = [];
            return $this->sendResponse($response,'', Response::HTTP_OK);    
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getClaimsList()
    {
        try{
            $response = [];
            return $this->sendResponse($response,'', Response::HTTP_OK);    
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

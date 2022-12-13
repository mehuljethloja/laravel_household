<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class PaymentController extends BaseController
{
    public function savePaymentDetails()
    {
        try{
            $response = [];
            return $this->sendResponse($response,'', Response::HTTP_OK);    
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function paymentProcessing()
    {
        try{
            $response = [];
            return $this->sendResponse($response,'', Response::HTTP_OK);    
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;
use Illuminate\Support\Facades\App;
use App\Http\Requests\API\GetQuoteRequest;
use App\Models\Product;
use App\Models\Quote;

class QuoteController extends BaseController
{
    
    /**
     * get quota
     *
     * @return void
     */
    public function index(GetQuoteRequest $request)
    {
        try{
            
            $params = [
                'insurance_type_id' => $request->insuranceTypeId,
                'plan_id' => $request->planId,
                'user_id' => $request->userId,
                'regionId' => $request->regionId,
                'language' => app()->getLocale()
            ];
            $products = Product::getProducts($params);

            $response = ['activityId' => time(),'quoteId' => '','product' => $products];
            
            // save quote request and response
            $quoteParams = [
                'activity_id' => $response['activityId'],
                'user_id' => $request->userId,
                'insurance_type_id' => $request->insuranceTypeId,
                'plan_id' => $request->planId,
                'quote_request' => $params,
                'quote_response' => $response
            ];
            $quoteModel = Quote::saveQuote($quoteParams);
            
            if($quoteModel){
                $response['quoteId'] = $quoteModel->quote_id;
            }

            return $this->sendResponse($response,'', Response::HTTP_OK);    
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function save()
    {
        try{
            $response = [];
            return $this->sendResponse($response,'', Response::HTTP_OK);    
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

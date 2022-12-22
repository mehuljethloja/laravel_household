<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;
use Illuminate\Support\Facades\App;
use App\Http\Requests\API\GetQuoteRequest;
use App\Http\Requests\API\SaveQuoteRequest;
use App\Models\Product;
use App\Models\Quote;
use App\Models\SelectedQuote;

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
                'insurance_type_id' => $request->insurance_type_id,
                'plan_id' => $request->plan_id,
                'user_id' => $request->user_id,
                'region_id' => $request->region_id,
                'language' => app()->getLocale()
            ];
            $products = Product::getProducts($params);

            $response = ['activity_id' => time(),'quote_id' => '','product' => $products];
            
            // save quote request and response
            $quoteParams = [
                'activity_id' => $response['activity_id'],
                'user_id' => $request->user_id,
                'insurance_type_id' => $request->insurance_type_id,
                'plan_id' => $request->plan_id,
                'quote_request' => $params,
                'quote_response' => $response
            ];
            $quoteModel = Quote::saveQuote($quoteParams);
            
            if($quoteModel){
                $response['quote_id'] = $quoteModel->quote_id;
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
    public function save(SaveQuoteRequest $request)
    {
        try{
            // save quote request and response
            $quoteParams = [
                'product_id' => $request->product_id,
                'user_id' => $request->user_id,
                'activity_id' => $request->activity_id,
                'insurance_type_id' => $request->insurance_type_id,
                'quote_id' => $request->quote_id,
                'plan_id' => $request->plan_id,
                'language' => app()->getLocale()
            ];

            $selectedQuote = new SelectedQuote();
            $quoteModel = $selectedQuote->saveQuote($quoteParams);
            if($quoteModel){
                return $this->sendResponse([],__('api.QUOTE_SAVED_SUCCEFULLY'), Response::HTTP_OK);    
            }else{
                return $this->sendError(__('api.QUOTE_SAVED_ERROR'),'', 201);
            }
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

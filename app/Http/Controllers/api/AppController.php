<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class AppController extends BaseController
{
    public function GetCities(CityRequest $request)
    {
        try{

            $cities = City::get(['*', 'city_name_'.$request->language.' AS city_name']);
            $response = [
                'cities' => $cities
            ];

            return $this->sendResponse($response,'', Response::HTTP_OK);    
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

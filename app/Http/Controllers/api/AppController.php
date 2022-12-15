<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CityRequest;
use App\Http\Requests\API\InsuranceTypeRequest;
use App\Http\Requests\API\PlanRequest;
use App\Models\City;
use App\Models\InsuranceType;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class AppController extends BaseController
{
    public function getCities(CityRequest $request)
    {
        try{

            $cities = City::get(['*', 'city_name_'.$request->language.' AS city_name']);
            $response = [
                'cities' => $cities
            ];

            return $this->sendResponse($response,__('string.data_retrieved_successfully'), Response::HTTP_OK);
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),__('string.oops_something_went_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getPlans(PlanRequest $request)
    {
        try{

            $plans = Plan::get(['*', 'plan_name_'.$request->language.' AS plan_name']);
            $response = [
                'plans' => $plans
            ];

            return $this->sendResponse($response,__('string.data_retrieved_successfully'), Response::HTTP_OK);

        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),__('string.oops_something_went_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getInsuranceType(InsuranceTypeRequest $request)
    {
        try{

            $insuranceTypes = InsuranceType::get(['*', 'insurance_type_name_'.$request->language.' AS insurance_type_name']);
            $response = [
                'insuranceTypes ' => $insuranceTypes
            ];

            return $this->sendResponse($response,__('string.data_retrieved_successfully'), Response::HTTP_OK);

        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),__('string.oops_something_went_wrong'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Http\Requests\API\LocateMyRegionRequest;
use App\Http\Requests\API\PlanRequest;
use App\Http\Requests\API\TermsConditionRequest;
use App\Models\City;
use App\Models\InsuranceType;
use App\Models\Plan;
use App\Models\TermAndCondition;
use GoogleMaps\GoogleMaps;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class AppController extends BaseController
{
    public function getCities(Request $request)
    {
        try{
            $cities = City::get();
            $response = [
                'cities' => $cities
            ];

            return $this->sendResponse($response,__('api.DATA_RETRIEVED_SUCCESSFULLY'), Response::HTTP_OK);
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),__('api.OOPS_SOMETHING_WENT_WRONG'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getInsuranceType(Request $request)
    {
        try{

            $insuranceTypes = InsuranceType::get();
            $response = [
                'insuranceTypes ' => $insuranceTypes
            ];

            return $this->sendResponse($response,__('api.DATA_RETRIEVED_SUCCESSFULLY'), Response::HTTP_OK);

        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),__('api.OOPS_SOMETHING_WENT_WRONG'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getPlans(PlanRequest $request)
    {
        try{

            $plans = Plan::where('insurance_type_id', $request->insurance_type_id)->get();
            $response = [
                'plans' => $plans
            ];

            return $this->sendResponse($response,__('api.DATA_RETRIEVED_SUCCESSFULLY'), Response::HTTP_OK);

        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),__('api.OOPS_SOMETHING_WENT_WRONG'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getTermsConditions(TermsConditionRequest $request)
    {
        try{

            $termAndConditions = TermAndCondition::where('insurance_type_id', $request->insurance_type_id)
                ->where('plan_id', $request->plan_id)
                ->where('product_id', $request->product_id)->get();

            $response = [
                'termAndConditions' => $termAndConditions
            ];

            return $this->sendResponse($response,__('api.DATA_RETRIEVED_SUCCESSFULLY'), Response::HTTP_OK);

        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),__('api.OOPS_SOMETHING_WENT_WRONG'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function locateMyRegion(LocateMyRegionRequest $request)
    {
        try{
            $response = [];
            $regions = ['NY', 'Puram'];

            $isRegionMatched = false;
            $regionMatched = false;

            $formatted_address = \GoogleMaps::load('geocoding')
                ->setParamByKey('latlng', $request->latitude.','.$request->longitude)
                ->get('results.formatted_address');

            foreach ($formatted_address['results'] as $address)
            {
                foreach ($regions as $region)
                {
//                    dump($address['formatted_address'] . ' -- Contains -- ' .$region. ' ==> '.str_contains($address['formatted_address'], $region));
                    if(str_contains($address['formatted_address'], $region)){
                        $isRegionMatched = true;
                        $regionMatched = $region;
                        break;
                    }
                }
            }

            if($isRegionMatched){
                $response = [
                    'region' => $regionMatched
                ];
                return $this->sendResponse($response ,__('api.DATA_RETRIEVED_SUCCESSFULLY'), Response::HTTP_OK);
            }
            else{
                return $this->sendError(__('api.LAT_LONG_VALUE_OUT_OF_SCOPE'),'', Response::HTTP_OK);
            }

        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),__('api.OOPS_SOMETHING_WENT_WRONG'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
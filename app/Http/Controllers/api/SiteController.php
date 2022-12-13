<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class SiteController extends BaseController
{
    public function index()
    {
        try{
            $response = [];
            return $this->sendResponse($response,'', Response::HTTP_OK);    
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

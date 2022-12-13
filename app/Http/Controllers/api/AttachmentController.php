<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class AttachmentController extends BaseController
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function upload()
    {
        try{
            $response = [];
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
    public function delete()
    {
        try{
            $response = [];
            return $this->sendResponse($response,'', Response::HTTP_OK);    
            
        }catch (Exception $e) {
            return $this->sendError($e->getMessage(),'', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

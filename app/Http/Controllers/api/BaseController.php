<?php


namespace App\Http\Controllers\api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;


class BaseController extends Controller
{
    public function getLocale() {
        return app()->getLocale();
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message, $status = 200)
    {
    	$response = [
            'success' => true,
            'status' => $status,
            'message' => $message,
            'data'    => $result,
        ];


        return response()->json($response);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $status = 404)
    {
    	$response = [
            'success' => false,
            'status' => $status,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response);
    }
}
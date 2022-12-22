<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (Exception $e, $request) {
            if ($request->is('api/*')) {
                $response = [
                    'success' => false,
                ];
                if($e instanceof MethodNotAllowedHttpException){
                    $response['status'] = Response::HTTP_METHOD_NOT_ALLOWED;
                    $response['message'] = __('api.HTTP_METHOD_NOT_ALLOWED');
                }else{
                    $response['status'] = Response::HTTP_NOT_FOUND;
                    $response['message'] = $e->getMessage();
                }
                return response()->json($response);
            }
        });
    }
}

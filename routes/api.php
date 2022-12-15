<?php

use App\Http\Controllers\api\AttachmentController;
use App\Http\Controllers\api\ClaimsController;
use App\Http\Controllers\api\PaymentController;
use App\Http\Controllers\api\PolicyController;
use App\Http\Controllers\api\ProposalController;
use App\Http\Controllers\api\QuoteController;
use App\Http\Controllers\api\SiteController;
use App\Http\Controllers\api\AppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('site/index',[SiteController::class,'index']);

    Route::get('getCities',[AppController::class,'getCities']);
    Route::get('getPlans',[AppController::class,'getPlans']);
    Route::get('getInsuranceType',[AppController::class,'getInsuranceType']);
    Route::get('getTermsConditions',[AppController::class,'getTermsConditions']);

    Route::post('getQuotes',[QuoteController::class,'index']);
    Route::post('saveQuote',[QuoteController::class,'save']);
    Route::post('saveProposal',[ProposalController::class,'save']);
    Route::post('uploadAttachment',[AttachmentController::class,'upload']);
    Route::post('deleteAttachment',[ProposalController::class,'delete']);
    Route::post('saveClaimDetails',[ClaimsController::class,'saveClaimDetails']);
    Route::post('getClaimDetailsByClaimId',[ClaimsController::class,'getClaimDetailsByClaimId']);
    Route::post('getClaimsList',[ClaimsController::class,'getClaimsList']);
    Route::post('getPoliciesList',[PolicyController::class,'getPoliciesList']);
    Route::post('getPolicyCertificate',[PolicyController::class,'getPolicyCertificate']);
    Route::post('getPolicyNumbersForClaim',[PolicyController::class,'getPolicyNumbersForClaim']);
    Route::post('getPolicyDetailsForClaim',[PolicyController::class,'getPolicyDetailsForClaim']);
    Route::post('savePaymentDetails',[PaymentController::class,'savePaymentDetails']);
    Route::post('paymentProcessing',[PaymentController::class,'paymentProcessing']);
});
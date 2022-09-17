<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

Route::group(['prefix' => 'v1'],function (){

Route::controller(CompanyController::class)->group(function () {
    Route::get('companies', 'index');
    Route::get('companies/{company}', 'show');
    Route::post('companies', 'store');
    Route::put('companies/{company}', 'update');
    Route::delete('companies/{company}','destroy');

}); 
Route::controller(EmployeeController::class)->group(function () {
    Route::get('employees', 'index');
    Route::get('employees/{employee}', 'show');
    Route::post('employees', 'store');
    Route::put('employees/{employee}', 'update');
    Route::delete('employees/{employee}', 'destroy');
    Route::get('employees/filter/{company_name}', 'getByCompany');

    

});

});
// Route::middleware('auth:api')->prefix('v1')->group(function() {
//     // Route::get('/user', function(Request $request){
//     //     return $request-user();
//     // });
//     Route::get('/company/{company}', [CompanyController::class, 'show']);
// });


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resourcectrl;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::post("/set",[apigetctrl::class,'setdata']);
// Route::put("/update",[apigetctrl::class,'updatedata']);
// Route::delete("/delete",[apigetctrl::class,'deletedata']);
// Route::get("/search",[apigetctrl::class,'searchdata']);
// Route::Post("/validate",[apigetctrl::class,'validatedata']);
// Route::Post("/upload",[filectrl::class,'upload']);
Route::apiResource('show',resourcectrl::class);
<?php

use App\Http\Controllers\Grades\GradeController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Rest of your code...


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// routes/web.php





/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/









 //

Auth::routes();
Route::get('/',function(){
    return view('auth.login') ;
});

/**========================================translate all pages=============================================== */
Route::group(['middleware'=>['auth']],
function()
{
    
    Route::group( ['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],
    function()
    {
    /**====================================dashboard=============================================== */
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    /**====================================dashboard=============================================== */
    // Route::group(['namespace'=>'Grades'],function(){

    //     Route::resource('Grades', 'GradeController');
    // });
    Route::controller(GradeController::class)->group(function () {
        Route::get('/Grades', 'index')->name('Grades.index');
        Route::post('/orders', 'store');
    });


   });
});



   



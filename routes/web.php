<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminNavigationController;
use App\Http\Controllers\User\UserNavigationController;
use App\Http\Controllers\User\CommpanyController;
use App\Http\Controllers\Auth\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/about', function () {
    return view('about_us');
});
Route::get('/whats_new', function () {
    return view('whats_new');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/reg', function () {
    return view('register');
});
Route::get('/after_signup', function () {
    return view('auth/verify_mail');
});


Route::post('/createUser',  [RegisterController::class, 'create'])->name('createUser');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([ 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'CheckUserRole']], function() {
    Route::get('/', [AdminNavigationController::class, 'dashboard'])->name('dashboard');	
    //define routes here for admin
});

Route::group([ 'prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth', 'CheckUserRole']], function() {
    Route::get('/', [UserNavigationController::class, 'dashboard'])->name('dashboard');
    //define routes here for user

    

    Route::get('/dashboard',  [CommpanyController::class, 'data'])->name('dashboard');


    Route::get('/test',  [CommpanyController::class, 'test'])->name('test');

//tralers

    Route::get('/tralers',  [CommpanyController::class, 'trailers'])->name('tralers');


    Route::get('/create_triler',  [CommpanyController::class, 'add_trailer'])->name('create_triler');
    Route::post('/save_trailer',  [CommpanyController::class, 'savetrailer'])->name('save_trailer');

//Trucks

    Route::get('/trucks',  [CommpanyController::class, 'trucks'])->name('trucks');
    Route::get('/create_trucks',  [CommpanyController::class, 'create_trucks'])->name('create_trucks');
    Route::post('/save_trucks',  [CommpanyController::class, 'save_trucks'])->name('save_trucks');
//clearing.agents
    Route::get('/clearing.agents',  [CommpanyController::class, 'agents'])->name('clearing.agents');

//drivers
    Route::get('/drivers',  [CommpanyController::class, 'drivers'])->name('drivers');
    Route::get('/ad_driver',  [CommpanyController::class, 'ad_driver'])->name('ad_driver');
    Route::post('/save_drivers',  [CommpanyController::class, 'save_drivers'])->name('save_drivers');

//deposits
    Route::get('/deposit',  [CommpanyController::class, 'deposit'])->name('deposit');
    Route::get('/load',  [CommpanyController::class, 'deposit_load'])->name('load');
    Route::post('/confirm',  [CommpanyController::class, 'confirm'])->name('confirm');
    Route::post('/add',  [CommpanyController::class, 'add_deposit'])->name('add');

    Route::get('/users',  [CommpanyController::class, 'users'])->name('users');


//Orders 
    Route::get('/orders',  [CommpanyController::class, 'orders'])->name('orders');
    Route::get('/ad_order',  [CommpanyController::class, 'ad_order'])->name('ad_order');
    Route::get('/save_order',  [CommpanyController::class, 'save_order'])->name('save_order');

//diesal Prices 
    Route::get('/diesal-prices',  [CommpanyController::class, 'diesal'])->name('diesal-prices'); 
//provider
    Route::get('/providers',  [CommpanyController::class, 'provider'])->name('providers'); 
//My Trips
    Route::get('/trips',  [CommpanyController::class, 'myTrips'])->name('trips');
    Route::get('/trip/template',  [CommpanyController::class, 'template'])->name('trip/template');

    Route::get('/trips/standard-template',  [CommpanyController::class, 'standTemp'])->name('trips/standard-template'); 
    Route::get('/trips/unauthorized',  [CommpanyController::class, 'unauthTrip'])->name('trips/unauthorized'); 


// orders
Route::get('/orders-list',  [CommpanyController::class, 'orderlist'])->name('orderlist'); 
Route::get('/orders/unauthorized',  [CommpanyController::class, 'unauth_orders'])->name('orders/unauthorized'); 

Route::get('/order/history',  [CommpanyController::class, 'order_history'])->name('order/history'); 
Route::get('/order-history-extended',  [CommpanyController::class, 'extended_order_history'])->name('order-history-extended'); 

//ACCOUNT 
Route::get('/account-balance-details',  [CommpanyController::class, 'acBal'])->name('account-balance-details'); 

//USERS
Route::get('/users',  [CommpanyController::class, 'users_details'])->name('users'); 

//etolss
Route::get('/etoll-statements',  [CommpanyController::class, 'etollstatement'])->name('etoll-statements');

Route::get('/etoll-transactions',  [CommpanyController::class, 'etrolltrans'])->name('etoll-transactions');

});




    

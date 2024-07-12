<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamDataController;
use App\Http\Controllers\VocController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\MerchOrderController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('Home.index', [
        "title" => "Home"
    ]);
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate');

    Route::get('/signup', 'signup_view')->middleware('guest');
    Route::post('/signup', 'signup');
});

Route::get('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
});

Route::controller(OrderController::class)->group(function () {
    // Route::get('/ticket', 'index'); 


    // Route::get('/custom-order', 'custom_order');
    Route::get('/order/{quantity}/personal-information', 'order');  

    Route::post('/order/{quantity}/ticket-information', 'ticket_information'); 

    
    Route::post('/checkout', 'checkout');
    Route::get('/invoice/{id}', 'invoice');

    // debug only *nanti dihapus*
    // Route::get('/approve', 'approve_ticket');
});

Route::controller(TicketController::class)->group(function (){

    Route::get('/ticket-redeem/{ticket_code}', 'ticket_redeem')->middleware('auth');
    Route::get('/show-qr/{ticket_code}', 'show_qr');
});

Route::middleware('guest')->controller(ResetPasswordController::class)->group(function() {
    Route::get('/forgot-password', 'index')->name('password.request');
    Route::post('/forgot-password', 'forgot_password')->name('password.email');
    Route::get('/reset-password/{token}', 'reset_token')->name('password.reset');
    Route::post('/reset-password', 'reset')->name('password.update');;
});

Route::get('/merch', [MerchController::class, 'index']);
Route::get('/cart', [MerchController::class, 'cart']);
Route::get('/{id}/cart', [MerchController::class, 'addToCart']);
Route::get('/cart/{id}', [MerchController::class, 'removeFromCart']);
Route::get('/merch-checkout', [MerchController::class, 'checkout']);

Route::get('/send', [MailController::class, 'index']);
Route::get('/closing-night', function () {
    return view('Tickets.index', [
        "title" => "closing"
    ]);
});

// Route::resource('rac', TeamDataController::class);

Route::controller(TeamDataController::class)->group(function(){
    Route::get('/rac', 'index');
    Route::get('/rac/register', 'create');
    // Route::get('/rac/register', function(){
    //     return view('welcome');
    // });
    Route::post('/rac/store', 'store');
    Route::get('/rac/show', 'show');
    Route::get('/rac/{id}/edit', 'edit');
    Route::post('/rac/update', 'update');
    Route::post('/rac/delete', 'destroy');
    Route::get('/rac/form/{amount}', 'form');
    Route::get('/rac/dashboard', 'dashboard');
    Route::get('/rac/confirmation', 'confirmation_redirect');
});

Route::controller(VocController::class)->group(function () {
    Route::get('/voc', 'index');
    Route::get('/voc/submission', 'create');
    // Route::get('/voc/submission', function(){
    //     return view('welcome');
    // });
    Route::post('/voc/store', 'store');
    Route::get('/voc/show', 'show');
    Route::get('/voc/{id}/edit', 'edit');
    Route::post('/voc/update', 'update');
    Route::post('/voc/delete', 'destroy');
    Route::get('/voc/dashboard', 'dashboard');
});

Route::get('/doorprize', function(){
    return view('RNG.index');
})->middleware('auth');

Route::get('/dashboard', function(){
    return view('Dashboard.index');
})->middleware('admin');

Route::resource('/dashboard/users', DashboardUserController::class)->middleware('admin');

// Route::get('/{any}', function () {
//     return redirect('/');
// })->where('any', '.*');

Route::controller(MerchOrderController::class)->group(function () {
    Route::get('/order', 'order');
    Route::post('/order', 'order');
    Route::get('/reset-cart', 'resetCart');
});

Route::controller(MerchController::class)->group(function () {
    Route::get('/merch', 'home');
    Route::get('/cart', 'cart');
    Route::post('/cart/{id}', 'addToCart');
    Route::get('item/', 'merch');
    Route::get('item/{id}', 'ShowItem');

});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart/{id}', 'removeFromCart');
    Route::get('/checkout', 'checkout');
    Route::get('/dashboard', 'dashboard')->middleware('auth');
    Route::get('approval/{id}/{status}', 'approval')->middleware('auth');
}); 

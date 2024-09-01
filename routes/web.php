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
    return view('Home.index');
});

Route::get('/soon', function(){
    return view('Home.soon');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate');
    
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
    Route::get('/approve', 'approve_ticket');
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

// Route::get('/merch', [MerchController::class, 'index']);
// Route::get('/cart', [MerchController::class, 'cart']);
// Route::get('/{id}/cart', [MerchController::class, 'addToCart']);
// Route::get('/cart/{id}', [MerchController::class, 'removeFromCart']);
// Route::get('/merch-checkout', [MerchController::class, 'checkout']);

Route::get('/send', [MailController::class, 'index']);
Route::get('/closing-night', function () {
    return view('Tickets.index');
});

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

// Route::get('/rac', function(){
//     return view('Rac.index');
// });

Route::controller(MerchController::class)->group(function(){
    Route::get('/merch/admin', 'admin');

    Route::prefix('/merch')->group(function(){
        Route::get('/checkoutdetails', 'checkout')->middleware('auth');
        Route::get('/preorderdetails', 'checkoutPreorder')->middleware('auth');
        Route::post('/checkout', 'order')->middleware('auth');
        Route::post('/preordercheckout', 'preorder')->middleware('auth');
        Route::get('/orders', 'userDashboard')->middleware('auth');
        Route::get('/order/{merchOrder:id}', 'showOrder')->middleware('auth');
        Route::get('/preorder/{merchPreorder:id}', 'showPreorder')->middleware('auth');
        Route::get('/{merch:id}', 'show');
        Route::get('/', 'index');
    });
    
    Route::get('/cart', 'cart')->middleware('auth');
    Route::post('/merch/cart/add', 'addToCart')->middleware('auth');
    Route::post('/merch/cart/addpreorder', 'addToPreorderCart')->middleware('auth');
    Route::delete('/cart/{cart:id}/remove', 'removeFromCart')->middleware('auth');
    Route::delete('/cart/{merchPreorderCart:id}/removepreorder', 'removeFromPreorderCart')->middleware('auth');
    Route::put('/cart/{cart:id}/updateqty', 'updateCartQuantity')->middleware('auth');
    Route::put('/cart/{merchPreorderCart:id}/updatepreorderqty', 'updatePreorderCartQuantity')->middleware('auth');

    Route::prefix('/admin/orders')->group(function(){
        Route::get('/dashboard', 'ordersDashboard')->middleware('auth');
        Route::put('/{merchOrder:id}/approve', 'approval')->middleware('auth');
        Route::put('/{merchOrder:id}/cancel', 'cancel')->middleware('auth');
        Route::put('/{merchOrder:id}/suspend', 'suspend')->middleware('auth');
        Route::put('/{merchOrder:id}/finish', 'finish')->middleware('auth');
    });
    Route::prefix('/admin/preorders')->group(function(){
        Route::get('/dashboard', 'preordersDashboard')->middleware('auth');
        Route::put('/{merchPreorder:id}/approvepreorder', 'approvalPreorder')->middleware('auth');
        Route::put('/{merchPreorder:id}/cancelpreorder', 'cancelPreorder')->middleware('auth');
        Route::put('/{merchPreorder:id}/suspendpreorder', 'suspendPreorder')->middleware('auth');
        Route::put('/{merchPreorder:id}/confirmpreorder', 'confirmPreorder')->middleware('auth');
        Route::put('/{merchPreorder:id}/finishpreorder', 'finishPreorder')->middleware('auth');
    });

    Route::prefix('/merch/admin')->group(function(){
        Route::get('/new', 'create');
        Route::post('/store', 'store');
        Route::get('/{merch:id}/addimage', 'addImage');
        Route::get('/{merch:id}/addvariation', 'addVariation');
        Route::post('/{merch:id}/storeimage', 'storeImage');
        Route::post('/{merch:id}/storevariation', 'storeVariation');
        Route::put('/{merchvariation:id}/updatevariation', 'updateVariation');
        Route::delete('/{merchvariation:id}/delete', 'deleteVariation');
        Route::get('/dashboard', 'dashboard');
        Route::get('/{merch:id}/edit', 'edit');
        Route::put('/{merch:id}/update', 'update');
        Route::delete('/image/{merchImage:id}/delete', 'deleteImage');
        Route::delete('/image/{merch:id}/delete', 'destroy');
        Route::get('/{merch:id}/addlink', 'addLink');
        Route::post('/{merch:id}/storelink', 'storeLink');
        Route::put('/{id}/updatelink', 'updateLink');
        Route::delete('/{id}/deletelink', 'deleteLink');
    });
});

Route::get('/{any}', function () {
    return redirect('/');
})->where('any', '.*');

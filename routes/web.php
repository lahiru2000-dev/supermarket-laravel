<?php
use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;

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

Route::get('/admin', function () {
$data=App\Models\Product::all();
    return view('welcome')->with('products',$data);
});

/* ---------------admin route-----------     */ 
Route::prefix('admin')->group(function(){

Route::get('/login_admin',[AdminController::class, 'Index'])->name('login_form');
Route::get('/login/owner',[AdminController::class, 'Login'])->name('admin.login');
Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard');
});
/* ---------------end admin route-----------     */




Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/home',[HomeController::class, 'index']);

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->middleware('admin'); //new



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';



Route::Post('/saveProduct', 'App\Http\Controllers\productController@store')->name('saveProduct');

Route::get('/deleteproduct/{id}', 'App\Http\Controllers\productController@deleteproduct');

Route::get('/updateproduct/{id}', 'App\Http\Controllers\productController@updateproductview');

Route::Post('/updateproducts', 'App\Http\Controllers\productController@updateproduct');

Route::get('/user',function(){
    return view('user');
});

Route::get('/',function(){
    return view('default');
});

Route::get('/searchProducts', 'App\Http\Controllers\productController@searchProduct')->name('searchProducts');

Route::post('/cart/{productId}', 'App\Http\Controllers\CartController@addToCart')->name('addToCart');

Route::get('/cart', 'App\Http\Controllers\CartController@showCart')->name('cart');

Route::post('/remove-from-cart/{productId}', 'App\Http\Controllers\CartController@removeFromCart')->name('removeFromCart');

Route::get('/checkout', 'App\Http\Controllers\CartController@checkout');


Route::get('/user{category}', 'App\Http\Controllers\productController@showProductsByCategory')->name('showProductsByCategory');
Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/user', [productController::class, 'showUserPage'])->name('user'); //special product

Route::get('/aboutus',function(){
    return view('aboutus');
});

//----------stripe-------------

Route::post('/create-payment-intent', [PaymentController::class, 'createPaymentIntent']);





Route::post('stripe/payment', [PaymentController::class, 'payment'])->name('stripe');
Route::get('stripe/success', [PaymentController::class, 'success'])->name('stripe_success');
Route::post('stripe/cancel', [PaymentController::class, 'cancel'])->name('stripe_cancel');

Route::get('/download-receipt/{sessionId}', 'App\Http\Controllers\PaymentController@downloadReceipt')->name('downloadReceipt');

Route::get('/download-receipt', 'App\Http\Controllers\PaymentController@downloadReceipt')->name('downloadReceipt');



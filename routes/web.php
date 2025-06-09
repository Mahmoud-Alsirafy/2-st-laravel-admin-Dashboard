<?php


// use Illuminate\Container\Attributes\Auth;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\dash\adminController;
use App\Http\Controllers\dash\productController;
use App\Http\Controllers\user\faq\faqController;
use App\Http\Controllers\user\cart\cartController;
use App\Http\Controllers\user\gird\gridController;
use App\Http\Controllers\user\list\listController;
use App\Http\Controllers\user\mail\mailController;
use App\Http\Controllers\user\about\aboutController;
use App\Http\Controllers\user\error\errorController;
use App\Http\Controllers\user\single\singleController;
use App\Http\Controllers\user\contact\contactController;
use App\Http\Controllers\user\details\detailsController;
use App\Http\Controllers\user\Checkout\CheckoutController;
use App\Http\Controllers\user\gridsidebar\gridsidebarController;



Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.register');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard.admin.view');
})->middleware(['auth', 'verified', 'CheckAdmin'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'CheckAdmin'])->prefix('dash')->group(function () {
    Route::resource("admin", adminController::class);
    Route::resource("product", productController::class);

    // Route::resource('user', UserController::class);
});




Route::middleware(['auth'])->prefix('')->group(function () {
    Route::get('about', [aboutController::class, 'index'])->name('about');
    Route::get('contact', [contactController::class, 'index'])->name('contact');
    Route::get('error', [errorController::class, 'index'])->name('error');
    Route::get('faq', [faqController::class, 'index'])->name('faq');
    Route::get('mail', [mailController::class, 'index'])->name('mail');
    Route::get('grid', [gridController::class, 'index'])->name('grid');
    Route::get('list', [listController::class, 'index'])->name('list');
    // Route::get('details', [detailsController::class, 'index'])->name('details');
    // Route::get('cart', [cartController::class, 'index'])->name('cart');
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::get('single', [singleController::class, 'index'])->name('single');
    Route::get('grid_sidebar', [gridsidebarController::class, 'index'])->name('grid_sidebar');
    Route::get('index', [UserController::class, 'index'])->name('index');
});


    Route::resource('details', detailsController::class);
    Route::resource('cart', cartController::class);





Route::middleware(['CheckAdmin'])->prefix('home')->group(function () {
    Route::resource('index', UserController::class);
});

require __DIR__ . '/auth.php';

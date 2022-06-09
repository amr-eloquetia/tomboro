<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PrizesController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

// Guest routes
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/single-contest', [PagesController::class, 'singleContest'])->name('singleContest');
Route::get('/lottery-details', [TicketsController::class, 'index'])->name('lotteryDetails');
Route::get('/buy-tickets/{id}', [TicketsController::class, 'show'])->name('buy.tickets');
Route::put('/user-panel', [TicketsController::class, 'update'])->name('buy.tickets.update');

Route::get('/winners', [PagesController::class, 'winners'])->name('winners');
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/user-panel', [PagesController::class, 'userPanel'])->name('userPanel');
Route::get('/user-info', [PagesController::class, 'userInfo'])->name('userInfo');
Route::get('/user-transactions', [PagesController::class, 'userTransactions'])->name('userTransactions');

Route::get('/how-it-works', [PagesController::class, 'howItWorks'])->name('howItWorks');
Route::get('/my-cart', [PagesController::class, 'cart'])->name('cart');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/error404', [PagesController::class, 'error404'])->name('error404');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [PagesController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/safe-play', [PagesController::class, 'safePlay'])->name('safePlay');
Route::get('/fair-gambling', [PagesController::class, 'fairGambling'])->name('fairGambling');
Route::get('/live-stream', [PagesController::class, 'liveStream'])->name('liveStream');

Route::get('/add-to-cart/{id}', [TicketsController::class, 'addToCart'])->name('add.to.cart');
Route::delete('/remove-from-cart', [TicketsController::class, 'remove'])->name('remove.from.cart');


Route::get('/contests', [PrizesController::class, 'show'])->name('contests');
Route::get('/contest/{prize_code}', [PrizesController::class, 'singlePrize'])->name('singlePrize');
Route::put('/user-info', [UserController::class, 'update'])->name('updateProfile');
Route::get('/contest', [PrizesController::class, 'SortByPrice'])->name('SortByPrice');
Route::get('/contests/{sort}', [PrizesController::class, 'sortBy'])->name('sortBy');


//Authentification routes
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Main platform routes
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    // Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('dashboard.users');
    Route::get('/dashboard/prizes', [DashboardController::class, 'prizes'])->name('dashboard.prizes');
    Route::get('/dashboard/editusers/{id}', [DashboardController::class, 'edituser'])->name('edit.user');
    Route::put('/dashboard/editusers/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::post('/dashboard/deleteUser/{id}', [UserController::class, 'destroy'])->name('delete.user');
    Route::get('/dashboard/editPrize/{id}', [DashboardController::class, 'editPrize'])->name('edit.prize');
    Route::get('/dashboard/createPrize', [DashboardController::class, 'createPrize'])->name('prize.create.get');
    Route::post('/dashboard/createPrize', [PrizesController::class, 'create'])->name('prize.create.post');
    Route::get('/dashboard/tickets', [DashboardController::class, 'tickets'])->name('dashboard.tickets');
    Route::get('/dashboard/generateTickets}', [DashboardController::class, 'generateTickets'])->name('get.generateTickets');
    Route::post('/dashboard/generateTickets}', [TicketsController::class, 'create'])->name('post.generateTickets');
    Route::post('/dashboard/deleteTicket/{id}', [TicketsController::class, 'destroy'])->name('delete.ticket');



    Route::post('/dashboard/deletePrize/{id}', [PrizesController::class, 'destroy'])->name('delete.prize');
    Route::put('/dashboard/editPrize/{id}', [PrizesController::class, 'edit'])->name('editPrize.put');
    Route::get('/dashboard/categories}', [DashboardController::class, 'categories'])->name('dashboard.categories');
    Route::get('/dashboard/categories/{id}', [DashboardController::class, 'categoriesEdit'])->name('categories.edit');
    Route::post('/dashboard/categories/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::put('/dashboard/categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit.post');
    Route::post('/dashboard/categories', [CategoryController::class, 'create'])->name('categories.create.post');
});
//Admin Routes



//Authentification routes
Route::group(['prefix' => '/login', 'middleware' => 'guest'], function () {
    // Route::get('/', [PagesController::class, 'login'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login.post');
});
Route::group(['prefix' => '/register', 'middleware' => 'guest'], function () {
    // Route::get('/', [PagesController::class, 'register'])->name('register');
    Route::post('/', [RegisterController::class, 'register'])->name('register.post');
});

//Stripe Routes
Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');


Route::get('/lang/{lang}', [HomeController::class, 'lang'])->name('lang');
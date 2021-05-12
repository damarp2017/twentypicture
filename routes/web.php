<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\YoutubeEmbedController;
use App\Models\YoutubeEmbed;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [
    LandingController::class,
    'index'
])->name('home');

// Route::get('/', function () {
//     return view('maintenance');
// })->name('home');

// Route::get('service', function () {
//     return view('service');
// })->name('service');

Route::get('/dashboard', [
    HomeController::class,
    'index'
])->middleware(['auth'])->name('dashboard');

// Start Portfolios
Route::get('/portfolio', [
    PortfolioController::class,
    'index'
])->middleware(['auth'])->name('portfolio');

Route::get('/portfolio/create', [
    PortfolioController::class,
    'create'
])->middleware(['auth'])->name('portfolio.create');

Route::post('/portfolio/store', [
    PortfolioController::class,
    'store'
])->middleware(['auth'])->name('portfolio.store');

Route::get('/portfolio/{portfolio}/delete', [
    PortfolioController::class,
    'destroy'
])->middleware(['auth'])->name('portfolio.destroy');
// end portfolio


// start category
Route::get('/category', [
    CategoryController::class,
    'index'
])->middleware(['auth'])->name('category');

Route::get('/category/create', [
    CategoryController::class,
    'create'
])->middleware(['auth'])->name('category.create');

Route::post('/category/store', [
    CategoryController::class,
    'store'
])->middleware(['auth'])->name('category.store');

Route::get('/category/{category}/edit', [
    CategoryController::class,
    'edit'
])->middleware(['auth'])->name('category.edit');

Route::post('/category/{category}/update', [
    CategoryController::class,
    'update'
])->middleware(['auth'])->name('category.update');

Route::get('/category/{category}/destroy', [
    CategoryController::class,
    'destroy'
])->middleware(['auth'])->name('category.destroy');
// end category


// start pricelist
Route::get('/pricelist', [
    PriceListController::class,
    'index'
])->middleware(['auth'])->name('pricelist');

Route::get('/pricelist/create', [
    PriceListController::class,
    'create'
])->middleware(['auth'])->name('pricelist.create');

Route::post('/pricelist/store', [
    PriceListController::class,
    'store'
])->middleware(['auth'])->name('pricelist.store');

Route::get('/pricelist/{pricelist}/destroy', [
    PriceListController::class,
    'destroy'
])->middleware(['auth'])->name('pricelist.destroy');
// end pricelist


// start service
Route::get('/service', [
    ServiceController::class,
    'index'
])->middleware(['auth'])->name('service');

Route::get('/service/create', [
    ServiceController::class,
    'create'
])->middleware(['auth'])->name('service.create');

Route::post('/service/store', [
    ServiceController::class,
    'store'
])->middleware(['auth'])->name('service.store');

Route::get('/service/{service}/destroy', [
    ServiceController::class,
    'destroy'
])->middleware(['auth'])->name('service.destroy');
// end service


// start contact
Route::get('/contact', [
    ContactController::class,
    'index'
])->middleware(['auth'])->name('contact');

Route::post('/contact', [
    ContactController::class,
    'update'
])->middleware(['auth'])->name('contact.update');
// end contact


// start message
Route::post('message', [
    MessageController::class,
    'store'
])->name('message.store');

Route::get('message/{message}/destroy', [
    HomeController::class,
    'destroy'
])->name('message.destroy');
// end message


// start youtube embed video
Route::get('youtube', [
    YoutubeEmbedController::class,
    'index'
])->middleware(['auth'])->name('youtube');
Route::get('youtube/create', [
    YoutubeEmbedController::class,
    'create'
])->middleware(['auth'])->name('youtube.create');
Route::post('youtube/store', [
    YoutubeEmbedController::class,
    'store'
])->middleware(['auth'])->name('youtube.store');
Route::get('youtube/{youtube}/destroy', [
    YoutubeEmbedController::class,
    'destroy'
])->middleware(['auth'])->name('youtube.destroy');
// end youtube embed video


// start banner
Route::get('banner', [
    BannerController::class,
    'index'
])->middleware(['auth'])->name('banner');

Route::get('banner/create', [
    BannerController::class,
    'create'
])->middleware(['auth'])->name('banner.create');

Route::post('banner/store', [
    BannerController::class,
    'store'
])->middleware(['auth'])->name('banner.store');

Route::get('banner/{banner}/destroy', [
    BannerController::class,
    'destroy'
])->middleware(['auth'])->name('banner.destroy');
// end banner


require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Route::get('/template', function () {
//     return view('template.generic');
// });
Route::get('/login', function () {
    return view('auth.login');
})->name("login");

Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('auth.register');
})->name("register");

Route::get('/dashboard/account/delete-account', function () {
    return view('dashboard.account.delete');
})->name("account.delete");
Route::get('/dashboard/account/settings', function () {
    return view('dashboard.account.settings');
})->name("account.settings");
Route::get('/account/messages', function () {
    return view('dashboard.account.messages');
})->name("account.messages");
Route::get('/dashboard/product', function () {
    return view('dashboard.consignor.product');
})->name("account.products");
Route::get('/dashboard/product/add', function () {
    return view('dashboard.consignor.product-add');
})->name("account.product-add");
Route::get('/dashboard/product/return', function () {
    return view('dashboard.consignor.product-return');
})->name("account.product-return");
Route::get('/dashboard/product/1/detail', function () {
    return view('dashboard.consignor.product-detail');
})->name("account.product-detail");
Route::get('/dashboard/place', function () {
    return view('dashboard.consignee.place');
})->name("account.places");
Route::get('/dashboard/place/add', function () {
    return view('dashboard.consignee.place-add');
})->name("account.place-add");
Route::get('/dashboard/place/1/detail', function () {
    return view('dashboard.consignee.place-detail');
})->name("account.place-detail");
Route::get('/dashboard/request', function () {
    return view('dashboard.account.request');
})->name("account.request");
Route::get('/dashboard', function () {
    return view('dashboard.home');
})->name("account.dashboard");
Route::get('/consignee', function () {
    return view('consignee.list');
})->name("consignee.list");
Route::get('/consignee/1', function () {
    return view('consignee.detail');
})->name("consignee.detail");
Route::get('/consignee/{place_id}/consign', function () {
    return view('consignee.consign');
})->name("consignee.consign");

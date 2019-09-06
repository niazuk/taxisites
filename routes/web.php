<?php

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

use App\Http\Controllers\ReCaptchaController;
use App\Mail\ContactSubmission;
use App\Mail\ContactSubmissionServer;
use App\Mail\GetQuote;
use App\Mail\GetQuoteServer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');
Route::get('/offers', function () {
    return view('pages.offers');
})->name('offers');
Route::get('/fleet', function () {
    return view('pages.fleet');
})->name('fleet');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');
Route::get('/thanks', function () {
    return view('pages.thanks');
})->name('thanks');

Route::post('send_email', function (Request $request) {
    
    if ((new ReCaptchaController)->store($request)) {
        Mail::send(new ContactSubmissionServer($request));
        Mail::send(new ContactSubmission($request));
        return view('pages.thanks');
    }
    
})->name('send_email');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sitemap', function (){
    return response(Storage::get('public/images.xml'), 200, [
        'Content-Type' => 'application/xml']);
});
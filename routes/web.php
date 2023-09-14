<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AgentController;
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

Route::get('crowhurst', function () {
    return view('crowhurst.index');
});

Route::get('listings/about', function () {
    return view('listings.about');
});
Route::get('listings/blog', function () {
    return view('listings.blog');
});
Route::get('listings/blog-details', function () {
    return view('listings.blog-details');
});
Route::get('listings/contact', function () {
    return view('listings.contact');
});
Route::get('listings/properties', function () {
    return view('listings.properties');
});
Route::get('listings/property-details', function () {
    return view('listings.property-details');
});
Route::get('listings/team', function () {
    return view('listings.team');
});
Route::get('listings/terms', function () {
    return view('listings.terms');
});
Route::get('listings/testimonials', function () {
    return view('listings.testimonials');
});






Route::get('listings', function () {
    return ('listings.index');
});

Route::get('listings', function () {
    return ('listings.index');
});

Route::get('listings', function () {
    return ('listings.index');
});

Route::get('listings', function () {
    return ('listings.index');
});

Route::get('listings', function () {
    return ('listings.index');
});

Route::get('listings', function () {
    return ('listings.index');
});

Route::get('listings', function () {
    return ('listings.index');
});
















Route::get('agents/create', [AgentController::class, 'create'])->name('agents.create');
Route::post('agents/store', [AgentController::class, 'store'])->name('agents.store');
Route::get('agents/login', [AgentController::class, 'login'])->name('agents.login');
Route::post('agents/verify', [AgentController::class, 'verify'])->name('agents.verify');
Route::get('agents/logout', [AgentController::class, 'logout'])->name('agents.logout');

Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store');
Route::get('clients/login', [ClientController::class, 'login'])->name('clients.login');
Route::post('clients/verify', [ClientController::class, 'verify'])->name('clients.verify');
Route::get('clients/logout', [ClientController::class, 'logout'])->name('clients.logout');



Route::post('agents/verify', [AgentController::class, 'verify'])->name('agents.verify');








Route::resource('listings', ListingController::class);
Route::resource('meetings', MeetingController::class);
Route::resource('clients', ClientController::class);
Route::resource('agents', AgentController::class);











Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

<?php

use App\Models\Cache;
use App\Mail\DemoMail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;

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


// Public Routes

Route::get('/', function () {
    return view('welcome');
});

Route::get('cash', [CacheController::class,'index']);

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Test Routes
    Route::resource('/test', TestController::class);
    Route::delete('/test/force/{test}', [TestController::class, 'forceDelete'])->name('test.force');
    Route::post('/test/restore/{test}', [TestController::class, 'restore'])->name('test.restore');

    // Example Routes
    Route::resource('/example', ExampleController::class);
    Route::delete('/example/force/{example}', [ExampleController::class, 'forceDelete'])->name('example.force');
    Route::post('/example/restore/{example}', [ExampleController::class, 'restore'])->name('example.restore');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Send a Demo mail
Route::get('send/demo', function (){
    $data = [
        'title' => 'Title From web.php',
        'content' => 'Content From web.php',
    ];
    $test = App\Models\Test::find(14);
    Mail::to('test@laravel.com')->send(new DemoMail($test));

});

Route::get('send/test', function (){
    $data = [
        'title' => 'Title From web.php',
        'content' => 'Content From web.php',
    ];
    $test = App\Models\Test::find(14);
    Mail::to('test@laravel.com')->send(new TestMail($test));
});

require __DIR__ . '/auth.php';

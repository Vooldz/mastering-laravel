<?php

use App\Http\Controllers\CacheController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Bus;
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

// Public Routes

Route::get('/', function () {
    return view('welcome');
});

Route::get('cash', [CacheController::class, 'index']);

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

Route::get('/chat', function () {
    return view('chat');
});

// Send a Demo mail
// Route::get('send/demo', function (){
//     $data = [
//         'title' => 'Title From web.php',
//         'content' => 'Content From web.php',
//     ];
//     $test = App\Models\Test::find(14);
//     Mail::to('test@laravel.com')->send(new DemoMail($test));

// });

// Send a test mail
Route::get('send/test', function () {
    // Use the queue directly from here
    // $test = \App\Models\Test::find(14);
    // Mail::to('test@example.com')->queue(new TestMail($test));

    // Use the queue from (App\Jobs)
    // dispatch(new \App\Jobs\JobDemo);
    // dispatch(new \App\Jobs\JobDemo2);

    // Use the queue and batchable
    Bus::batch([
        new \App\Jobs\JobDemo,
        new \App\Jobs\JobDemo2,
    ])->dispatch();
});
Route::get('create', fn() => view('creating'))->name('user');

require __DIR__ . '/auth.php';


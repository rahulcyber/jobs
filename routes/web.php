<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProviderController;
use Illuminate\Routing\Router;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', function () {
            return view('welcome');
        })->name('home');

        Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');
        });

        Route::middleware(['auth'])->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

            Route::middleware(['isProvider'])->name('provider.')->group(function () {
                Route::get('my-jobs', [ProviderController::class, 'myJobs'])->name('my-jobs');
                Route::get('add-jobs', [ProviderController::class, 'myJobs'])->name('add-jobs');
            });
        });


        require __DIR__ . '/auth.php';
    }
);


Route::get('/offline', function () {
    return view('offline');
});

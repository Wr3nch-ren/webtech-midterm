<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('home.index');
// });

Route::resource('/', HomeController::class);

Route::get('/activities', [ActivityController::class, 'index'])->name("activities.index");

Route::get('/activities/detail', [ActivityController::class, 'showDetail'])->name("activities.showDetail");

Route::get('user/profile', [UserController::class, 'profile'])->name("user.profile");
Route::get('user/activities', [UserController::class, 'activities'])->name("user.activities");
Route::get('user/certificates', [UserController::class, 'certificates'])->name("user.certificates");

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/activities', [ActivityController::class, 'index'])->name("activities.index");
// รายละเอียด Route::get('/activities/{activity}/detail', [ActivityController::class, 'showDetail'])->name("activities.index");
Route::get('/activities/detail', [ActivityController::class, 'showDetail'])->name("activities.showDetail");
// แบบฟอร์มสมัคร Route::get('/activities/{activity}/apply', [ActivityController::class, 'apply'])->name("activities.apply");
Route::get('/activities/apply', [ActivityController::class, 'apply'])->name("activities.apply");

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::get('/activities/{activity}/detail', [ActivityController::class, 'showDetail'])->name("activities.index");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/account', [ActivityController::class, 'index'])->name("activities.index");

require __DIR__ . '/auth.php';

<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventOrganizeController;
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

Route::get('/', function () {
    return view('home.index');
});

// Route::resource('/', HomeController::class);

// Route::get('/activities', [ActivityController::class, 'index'])->name("activities.index");

// Route::get('/activities/detail', [ActivityController::class, 'showDetail'])->name("activities.showDetail");

Route::get(
    '/register/create',
    function () {
        return view('register.create');
    }
);

Route::get('user/profile', [UserController::class, 'profile'])->name("user.profile");
Route::get('user/events', [UserController::class, 'participatingEvents'])->name("user.participatingEvents");
Route::get('user/certificates', [UserController::class, 'certificates'])->name("user.certificates");
Route::get('user/profile/edit', [UserController::class, 'editProfile'])->name("user.editProfile");
Route::put('user/profile/edit', [UserController::class, 'update'])->name("user.update");

Route::get('register/create', [UserController::class, 'create'])->name("register.create");
Route::post('register/create', [UserController::class, 'store'])->name("user.store");

Route::get('user/notification', [UserController::class, 'notification'])->name("user.notification");
Route::get('user/organize', [UserController::class, 'organize'])->name("user.organize");

Route::get('organize/home', [EventOrganizeController::class, 'home'])->name("organize.home");
Route::get('organize/dashboard', [EventOrganizeController::class, 'dashboard'])->name("organize.dashboard");
Route::get('organize/tasks', [EventOrganizeController::class, 'tasks'])->name("organize.tasks");
Route::get('organize/info', [EventOrganizeController::class, 'info'])->name("organize.info");
Route::get('organize/create', [EventOrganizeController::class, 'create'])->name("organize.create");

Route::resource('/events', EventController::class);


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

require __DIR__ . '/auth.php';

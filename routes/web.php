<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventOrganizeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\SortController;
use App\Models\RegisteredList;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

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
Route::post('user/certificates', [UserController::class, 'storeCertificate'])->name("user.storeCertificate");
Route::get('user/profile/edit', [UserController::class, 'editProfile'])->name("user.editProfile");
Route::put('user/profile/edit', [UserController::class, 'update'])->name("user.update");

Route::get('user/notification', [UserController::class, 'notification'])->name("user.notification");
Route::get('user/organize', [UserController::class, 'organize'])->name("user.organize");

Route::get('organize/{event}/home', [EventOrganizeController::class, 'home'])->name("organize.home");
Route::get('organize/{event}/dashboard', [EventOrganizeController::class, 'dashboard'])->name("organize.dashboard");
Route::get('organize/{event}/tasks', [EventOrganizeController::class, 'tasks'])->name("organize.tasks");
Route::get('organize/{event}/info', [EventOrganizeController::class, 'info'])->name("organize.info");
Route::get('organize/create', [EventOrganizeController::class, 'create'])->name("organize.create");
Route::post('organize', [EventOrganizeController::class, 'store'])->name("organize.store");
Route::delete('organize/{event}', [EventOrganizeController::class, 'destroy'])->name("organize.destroy");
Route::post('organize/{event}', [EventOrganizeController::class, 'addUser'])->name("organize.addUser");
Route::delete('organize/{event}/{user}', [EventOrganizeController::class, 'deleteUser'])->name("organize.deleteUser");
Route::get('user/verify', [UserController::class, 'verify'])->name("user.verify");

Route::get('/volunteers', [SortController::class, 'volunteers'])->name('events.volunteers');
Route::get('/technical', [SortController::class, 'technical'])->name('events.technical');
Route::get('/recreations', [SortController::class, 'recreations'])->name('events.recreations');

Route::put('/events/{event}', [StaffController::class, 'update'])->name('event.update');

Route::resource('/events', EventController::class);
Route::post('/events/{event}/registerEvent', [EventController::class, 'registerEvent'])->name('events.register-event');

Route::resource('/staff', StaffController::class);
Route::resource('/account', AccountController::class);
Route::resource('/certificate', CertificateController::class);
Route::resource('/registered', RegisteredController::class);
Route::resource('/organizer', OrganizerController::class);



Route::get('/activities', [ActivityController::class, 'index'])->name("activities.index");
// รายละเอียด Route::get('/activities/{activity}/detail', [ActivityController::class, 'showDetail'])->name("activities.index");
Route::get('/activities/detail', [ActivityController::class, 'showDetail'])->name("activities.showDetail");
// แบบฟอร์มสมัคร Route::get('/activities/{activity}/apply', [ActivityController::class, 'apply'])->name("activities.apply");
Route::get('/activities/apply', [ActivityController::class, 'apply'])->name("activities.apply");


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

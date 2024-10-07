<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\GroupMemberData;
use App\Http\Controllers\UserMailSending;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\EnquireFormController;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\TranslatedPageController;

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
Route::middleware(['grouped'])->group(function (){
    // Group middleware to check if user_role is administrator or age is grater then 18.
    Route::resource('/user-data', ResourceController::class);
    Route::get('/user-data/{id}', [ResourceController::class, 'show']);
});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/demo/{name?}', function($name = null) {
//     $data = compact('name');
//     return view('demo')->with($data);
// });

Route::get('/sum/{first?}/{second?}', function($first = null, $second = null){
    $data = compact('first', 'second');
   return view('sum')->with($data);
   // $sum = $first+$second;
   // echo $first.'+'.$second.' = '.$sum;
});

Route::group(["prefix" => 'enquire-form'], function(){
   Route::get('/', [EnquireFormController::class, 'index'])->name('enquire.add');
   Route::post('/', [EnquireFormController::class, 'store']);
   Route::get('/view', [EnquireFormController::class, 'view'])->name('enquireForm.view');
   Route::get('/delete/{id}', [EnquireFormController::class, 'delete'])->name('enquireForm.delete');
   Route::get('/edit/{id}', [EnquireFormController::class, 'edit'])->name('enquireForm.edit');
   Route::post('/update/{id}', [EnquireFormController::class, 'update'])->name('enquireForm.update');
});

Route::group(["prefix" => 'user'], function(){
   Route::get('/get-all-users', [UserDetailsController::class, 'userDataView']);
   Route::get('/data', function(){ return view('user_data-view'); });
   Route::get('/delete/{user_id}', [UserDetailsController::class, 'userDelete']);
   Route::get('/form', function(){ return view('user-form'); });
   Route::post('/form', [UserDetailsController::class, 'userDataSubmit']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/jquery',function(){
    return view('my-jquery');
});

// One to One relation.
Route::get('/group-member-data', [GroupMemberData::class, 'index']);
// // One to Many relation. (To get Members by Groups)
Route::get('/member-data', [GroupMemberData::class, 'getGroupMembers']);

// Route check if user_is set or not in session else redirected on /no-access page using middleware (RouteSessionChecker).
Route::get('/translated-page/{lang?}', [TranslatedPageController::class, 'pageView'])->middleware('SessionChecker');
Route::get('/no-access', function(){
    echo "You are not allowed to access this page.";
});

Route::get('/get-all-session', function (){
    $session = session()->all();
    p($session);
    die;
});
Route::get('/user/login', function(){
    session(['user_id' => '1', 'user_name' => 'kushbhatt', 'user_roll' => 'administrator']);
    return redirect()->back();
    // return "User logged-in successfully.";
});
Route::get('/user/logout', function(){
    session()->forget(['user_id', 'user_name']);
    return redirect()->back();
});

Route::get('send-mail', [EmailController::class, 'sendEmail']);

Route::post('/user-mail', [UserMailSending::class, 'mailSend']);

require __DIR__.'/auth.php';

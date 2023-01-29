<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\Admin\SmsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\WorkerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AjaxCrudController;
use App\Http\Controllers\Admin\FollowUpController;
use App\Http\Controllers\Admin\GarmentsController;
use App\Http\Controllers\Admin\RefferalController;
use App\Http\Controllers\Admin\SateliteController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\ServiceProviderController;

// All Route Cache Clear
// =========================
Route::get('/clear', function() {
    Artisan::call('cache:clear');
        dd("Cache Clear All");
});

// Login
// ===============
Route::get('/', function () {
    return redirect('/login');
});


//Admin
// ============================
Route::middleware(['auth'])->group(function () {

        Route::resource('ajax_crud', AjaxCrudController::class);
        //Garments
        Route::resource('garments', GarmentsController::class);
        Route::get('garments/details/{id}', [GarmentsController::class, 'show'])->name('garments.details');
        Route::get('garments/delete/{id}', [GarmentsController::class, 'destroy'])->name('garments.delete');
        //Worker
        Route::resource('workers', WorkerController::class);
        Route::get('workers/details/{id}', [WorkerController::class, 'show'])->name('workers.details');
        Route::get('workers/delete/{id}', [WorkerController::class, 'destroy'])->name('workers.delete');
        //Service Provider
        Route::resource('service-providers', ServiceProviderController::class);
        //Service
        Route::resource('services', ServiceController::class);
        //Follow Up
        Route::resource('follows', FollowUpController::class);
        //Refferal
        Route::resource('refferals', RefferalController::class);
        //Satelites
        Route::resource('satelites', SateliteController::class);

    Route::controller(MemberController::class)->group(function(){
        Route::get('member/index', 'index')->name('member.index');
        Route::post('member/store', 'store')->name('member.store');
        Route::get('member/show/{id}', 'show')->name('member.show');
        Route::get('member/edit/{id}', 'edit')->name('member.edit');
        Route::post('member/update/{id}', 'update')->name('member.update');
        Route::get('member/delete/{id}', 'destroy')->name('member.delete');

        Route::get('member/request_list', 'request_list')->name('member.request_list');
        Route::get('member/reject_list', 'reject_list')->name('member.reject_list');

        Route::get('member/report', 'report')->name('member.report');
        Route::get('member/report', 'report')->name('member.report');
        Route::get('search/member/report', 'Ajaxreport')->name('member.search.report');
    });

    Route::controller(AdminController::class)->group(function()
        {
        Route::get('/', 'index')->name('index');
        Route::get('password-change', 'PasswordChange')->name('password-change');
        Route::post('store/password-change', 'StorePasswordChange')->name('store.password-change');
        Route::get('logout', 'Logout')->name('logout');

        }
    );
    //User
    Route::controller(UserController::class)->group(function()
        {
            Route::get('user', 'index')->name('user');
            Route::post('user/store', 'store')->name('user.store');
            Route::post('user/update/{id}', 'update')->name('user.update');
            Route::get('user/delete/{id}', 'destroy')->name('user.destroy');
            Route::get('user/user_profile', 'user_profile')->name('user.profile');
            Route::post('user/update_profile/{id}', 'update_profile')->name('user.update_profile');
        }
    );
    //Role
    Route::controller(RoleController::class)->group(function(){
            Route::get('role/index', 'index')->name('role.index');
            Route::post('role/store', 'store')->name('role.store');
            Route::post('role/update/{id}', 'roleupdate')->name('role.roleupdate');
            Route::get('role/delete/{id}', 'destroy')->name('role.destroy');
            Route::get('role/permission/{id}', 'permission')->name('role.permission');
            Route::post('role/permission-store/{id}', 'permissionUpdate')->name('role.permission-store');
    });
    //General Setting Route
    Route::controller(GeneralSettingController::class)->group(function(){
            Route::get('setting/index', 'index')->name('setting.index');
            Route::post('setting/store', 'store')->name('setting.store');
            Route::post('setting/update/{id}', 'update')->name('setting.update');
    });

});

//Search
// =================
Route::controller(AdminController::class)->group(function()
    {
       Route::get('/search', 'search')->name('admin.search');
       Route::get('/search/get-bl-number', 'getBLNumber')->name('admin.getblnumber');
       Route::get('/sms', 'sms')->name('sms');
    }
);
Route::controller(SmsController::class)->group(function(){
    Route::get('/sms', 'index')->name('sms');
    Route::post('/sms/send', 'send')->name('sms.send');
});


Route::get('tables', function(){
    return view('admin.data-table');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

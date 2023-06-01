<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\MyCourseController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\ShowcaseController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Member\DashboardController as MemberDashboardController;
use App\Http\Controllers\Member\CourseController as MemberCourseController;
use App\Http\Controllers\Member\MyCourseController as MemberMyCourseController;
use App\Http\Controllers\Member\ReviewController as MemberReviewController;
use App\Http\Controllers\Member\VideoController as MemberVideoController;
use App\Http\Controllers\Member\ShowcaseController as MemberShowcaseController;
use App\Http\Controllers\Member\TransactionController as MemberTransactionController;
use App\Http\Controllers\Member\ProfileController as MemberProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Landing\CartController;
use App\Http\Controllers\Landing\CategoryController as LandingCategoryController;
use App\Http\Controllers\Landing\CourseController as LandingCourseController;
use App\Http\Controller\Landing\ReviewController as LandingReviewController;
use App\Http\Controller\Landing\ShowcaseController as LandingShowcaseController;

Route::get('/', function(){
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

// admin route
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    // admin dashboard route
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    // admin category route
    Route::resource('/category', CategoryController::class);
    // admin course route
    Route::resource('/course', CourseController::class);
    Route::get('/my-course', MyCourseController::class)->name('mycourse');
    // admin user route
    Route::controller(UserController::class)->as('user.')->group(function(){
        Route::get('/user/profile', 'profile')->name('profile');
        Route::put('/user/profile/{user}', 'profileUpdate')->name('profile.update');
        Route::put('/user/profile/password/{user}', 'profile')->name('profile.password');
    });
    Route::resource('/user', UserController::class)->only('index', 'update', 'destroy');
    // admin video route
    Route::controller(VideoController::class)->as('video.')->group(function(){
        Route::get('/{course:slug}/video', 'index')->name('index');
        Route::get('/{course:slug}/create', 'create')->name('create');
        Route::post('/{course:slug}/store', 'store')->name('store');
        Route::get('/edit/{course:slug}/{video}', 'edit')->name('edit');
        Route::put('/update/{course:slug}/{video}', 'update')->name('update');
        Route::delete('/delete/{video}', 'destroy')->name('destroy');
    });
    // admin showcase route
    Route::get('/showcase', ShowcaseController::class)->name('showcase.index');
    // admin review route
    Route::controller(ReviewController::class)->group(function(){
        Route::get('/review', 'index')->name('review.index');
        Route::post('/review/{course}', 'store')->name('review');
    });
    // admin transaction route
    Route::resource('/transaction', TransactionController::class)->only('index', 'show');
});
// member route
Route::group(['as' => 'member.', 'prefix' => 'account', 'middleware' => ['auth', 'role:member|author']], function(){
    // member dashboard route
    Route::get('/dashboard', MemberDashboardController::class)->name('dashboard');
    // member course route
    Route::get('/my-course', MemberMyCourseController::class)->name('mycourse');
    Route::resource('/course', MemberCourseController::class)->middleware('role:author');
    // member review route
    Route::post('/review/{course}', [MemberReviewController::class, 'store'])->name('review');
    // member video route
    Route::controller(MemberVideoController::class)->as('video.')->middleware('role:author')->group(function(){
        Route::get('/{course:slug}/video', 'index')->name('index');
        Route::get('/{course:slug}/create', 'create')->name('create');
        Route::post('/{course:slug}/store', 'store')->name('store');
        Route::get('/edit/{course:slug}/{video}', 'edit')->name('edit');
        Route::put('/update/{course:slug}/{video}', 'update')->name('update');
        Route::delete('/delete/{video}', 'destroy')->name('destroy');
    });
    // member showcase route
    Route::get('/showcase', ShowcaseController::class)->name('showcase.index');
     // member transaction route
     Route::resource('/transaction', MemberTransactionController::class)->only('index', 'show');
     // member profile route
    Route::controller(MemberProfileController::class)->as('profile.')->group(function(){
        Route::get('/profile', 'index')->name('index');
        Route::put('/profile/{user}', 'updateProfile')->name('update');
        Route::put('/profile/password/{user}', 'updatePassword')->name('password');
    });
});
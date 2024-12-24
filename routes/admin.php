
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// 'middleware' => ['auth:web'],
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'DashboardController@index')->name('index');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('products', DoctorController::class)->names('doctors');
    Route::resource('orders', ServiceController::class)->names('services');
    Route::resource('stock', BannerController::class)->names('banners');
    Route::resource('customers', PackageController::class)->names('packages');
    Route::resource('newsletters', AppointmentController::class)->names('appoinments');
    Route::resource('best-selling', EnquiryController::class)->names('enquiry');
    Route::resource('featured-products', GalleryController::class)->names('gallery');
    Route::resource('coupons', GalleryController::class)->names('activity');
    Route::resource('reviews', GalleryController::class)->names('profile');
    Route::resource('colors', BlogPostController::class)->names('blogs');
    Route::resource('sizes', BlogPostController::class)->names('blogs');
    Route::resource('blog-category', BlogCategoryController::class)->names('blogs-category');
    Route::resource('blogs', BlogPostController::class)->names('blogs');
    Route::resource('blog-category', BlogCategoryController::class)->names('blogs-category');

    Route::resource('activity', BlogCategoryController::class)->names('blogs-category');
});
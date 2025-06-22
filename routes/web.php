<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\WebSliderController;
use App\Http\Controllers\Admin\WebFacilityController;
use App\Http\Controllers\Admin\WebReviewController;
use App\Http\Controllers\Admin\WebClasseController;

// صفحات عامة
Route::view('/', 'home')->name('home');
Route::view('/service', 'service')->name('service');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', function(Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:25',
        'message' => 'required|string',
    ]);
    return back()->with('success', 'Merci pour votre message, nous vous contacterons bientôt.');
})->name('contact');

// تسجيل الدخول
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


// Routes admin
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');

    Route::resource('sliders', WebSliderController::class);
    Route::resource('facilities', WebFacilityController::class);
    Route::resource('reviews', WebReviewController::class);
    Route::resource('classes', WebClasseController::class)->parameters([
        'classes' => 'webClasse'
    ]);
});

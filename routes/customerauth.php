<?php
use App\Http\Controllers\CustomerAuth\AuthenticatedSessionController;
use App\Http\Controllers\CustomerAuth\ConfirmablePasswordController;
use App\Http\Controllers\CustomerAuth\EmailVerificationNotificationController;
use App\Http\Controllers\CustomerAuth\EmailVerificationPromptController;
use App\Http\Controllers\CustomerAuth\NewPasswordController;
use App\Http\Controllers\CustomerAuth\PasswordResetLinkController;
Use App\Http\Controllers\CustomerAuth\RegisteredUserController;
use App\Http\Controllers\CustomerAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('customerregister', [RegisteredUserController::class, 'create'])
                ->name('customerregister');

    Route::post('customerregister', [RegisteredUserController::class, 'store']);

    Route::get('customerlogin', [AuthenticatedSessionController::class, 'create'])
                ->name('customerlogin');

    Route::post('customerlogin', [AuthenticatedSessionController::class, 'store']);

    Route::get('customerforgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('customerpassword.request');

    Route::post('customerforgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('customerpassword.email');

    Route::get('customerreset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('customerpassword.reset');

    Route::post('customerreset-password', [NewPasswordController::class, 'store'])
                ->name('customerpassword.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

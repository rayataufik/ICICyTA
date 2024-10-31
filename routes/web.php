<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\CallPaperController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\RegistrationFeeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::prefix('dashboard/home')->name('dashboard.home.')->group(function () {
        Route::get('/', [HeroSectionController::class, 'index'])->name('index');
        Route::post('/{heroSection}', [HeroSectionController::class, 'update'])->name('update');
        Route::delete('/{heroSection}/sponsor-image', [HeroSectionController::class, 'destroySponsor'])->name('deleteSponsor');
    });

    Route::prefix('dashboard/about')->name('dashboard.about.')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('index');
        Route::post('/{about}', [AboutController::class, 'update'])->name('update');
        Route::delete('/{about}/image', [AboutController::class, 'destroyImage'])->name('deleteImage');
    });

    Route::prefix('dashboard/speakers')->name('dashboard.speakers.')->group(function () {
        Route::get('/', [SpeakerController::class, 'index'])->name('index');
        Route::post('/', [SpeakerController::class, 'store'])->name('store');
        Route::get('/{speaker}/edit', [SpeakerController::class, 'edit'])->name('edit');
        Route::put('/{speaker}', [SpeakerController::class, 'update'])->name('update');
        Route::delete('/{speaker}', [SpeakerController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('dashboard/call-for-papers')->name('dashboard.callpaper.')->group(function () {
        Route::get('/', [CallPaperController::class, 'index'])->name('index');
        Route::post('/{callPaper}', [CallPaperController::class, 'update'])->name('update');
        Route::delete('/{content}', [CallPaperController::class, 'destroyContent'])->name('deleteContent');
        Route::get('/content/{content}/edit', [CallPaperController::class, 'editContent'])->name('editContent');
        Route::put('/content/{content}', [CallPaperController::class, 'updateContent'])->name('updateContent');
    });

    Route::get('/dashboard/for-author', [AuthorController::class, 'index'])->name('for-author');
    Route::post('/dashboard/for-author/important-date', [AuthorController::class, 'storeImportantDate'])->name('important-date.store');
    Route::delete('/dashboard/for-author/important-date/{id}', [AuthorController::class, 'deleteImportantDate'])->name('important-date.delete');
    Route::post('/dashboard/for-author/content', [AuthorController::class, 'storeContent'])->name('content.store');
    Route::delete('/dashboard/for-author/content/{id}', [AuthorController::class, 'deleteContent'])->name('content.delete');
    Route::get('/dashboard/for-author/content/edit/{id}', [AuthorController::class, 'editContent'])->name('content.edit');
    Route::put('/dashboard/for-author/content/{id}', [AuthorController::class, 'updateContent'])->name('content.update');

    Route::get('/dashboard/registration', [RegistrationFeeController::class, 'index'])->name('registration');
    Route::post('/dashboard/registration/fee', [RegistrationFeeController::class, 'storeRegistrationFee'])->name('registration.store');
    Route::delete('/dashboard/registration/fee/{id}', [RegistrationFeeController::class, 'destroyRegistrationFee'])->name('registration.delete');
    Route::post('/dashboard/registration/bank-account', [RegistrationFeeController::class, 'storeBankAccount'])->name('bank-account.store');
    Route::get('/dashboard/registration/bank-account/edit/{id}', [RegistrationFeeController::class, 'editBankAccount'])->name('bank-account.edit');
    Route::put('/dashboard/registration/bank-account/{id}', [RegistrationFeeController::class, 'updateBankAccount'])->name('bank-account.update');
    Route::delete('/dashboard/registration/bank-account/{id}', [RegistrationFeeController::class, 'destroyBankAccount'])->name('bank-account.delete');
    Route::post('/dashboard/registration/link', [RegistrationFeeController::class, 'storeOrUpdateLink'])->name('registration-link.store-or-update');
});

Route::get('/dashboard/commitee', function () {
    return view('pages.dashboard.commitee');
});

Route::get('/dashboard/footer', function () {
    return view('pages.dashboard.footer');
});

Route::get('/dashboard/speaker/edit', function () {
    return view('pages.dashboard.speakeredit');
});

Route::get('/dashboard/call-for-papers/content/edit', function () {
    return view('pages.dashboard.callforpaperedit');
});

Route::get('/dashboard/for-author/content/edit', function () {
    return view('pages.dashboard.forauthoredit');
});

Route::get('/dashboard/registration/bank-account/edit', function () {
    return view('pages.dashboard.registrationfeeedit');
});

Route::get('/dashboard/commitee/content/edit', function () {
    return view('pages.dashboard.commiteeedit');
});

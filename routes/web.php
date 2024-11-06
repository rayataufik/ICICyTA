<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\CallPaperController;
use App\Http\Controllers\CommitteeController;
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
        Route::delete('/{sponsor}/sponsor-image', [HeroSectionController::class, 'destroySponsor'])->name('deleteSponsor');
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
        Route::delete('/{callPaper}/image', [CallPaperController::class, 'destroyImage'])->name('deleteImage');
    });

    Route::prefix('dashboard/for-author')->name('for-author.')->group(function () {
        Route::get('/', [AuthorController::class, 'index'])->name('index');
        Route::post('/important-date', [AuthorController::class, 'storeImportantDate'])->name('important-date.store');
        Route::delete('/important-date/{id}', [AuthorController::class, 'deleteImportantDate'])->name('important-date.delete');

        Route::post('/content', [AuthorController::class, 'storeContent'])->name('content.store');
        Route::delete('/content/{id}', [AuthorController::class, 'deleteContent'])->name('content.delete');
        Route::get('/content/edit/{id}', [AuthorController::class, 'editContent'])->name('content.edit');
        Route::put('/content/{id}', [AuthorController::class, 'updateContent'])->name('content.update');
    });

    Route::prefix('dashboard/registration')->name('registration.')->group(function () {
        Route::get('/', [RegistrationFeeController::class, 'index'])->name('index');
        Route::post('/fee', [RegistrationFeeController::class, 'storeRegistrationFee'])->name('store');
        Route::delete('/fee/{id}', [RegistrationFeeController::class, 'destroyRegistrationFee'])->name('delete');

        Route::post('/bank-account', [RegistrationFeeController::class, 'storeBankAccount'])->name('bank-account.store');
        Route::get('/bank-account/edit/{id}', [RegistrationFeeController::class, 'editBankAccount'])->name('bank-account.edit');
        Route::put('/bank-account/{id}', [RegistrationFeeController::class, 'updateBankAccount'])->name('bank-account.update');
        Route::delete('/bank-account/{id}', [RegistrationFeeController::class, 'destroyBankAccount'])->name('bank-account.delete');

        Route::post('/link', [RegistrationFeeController::class, 'storeOrUpdateLink'])->name('link.store-or-update');
    });

    Route::prefix('dashboard/committee')->name('commitee.')->group(function () {
        Route::get('/', [CommitteeController::class, 'index'])->name('index');
        Route::post('/', [CommitteeController::class, 'store'])->name('store');
        Route::get('/{commitee}/edit', [CommitteeController::class, 'edit'])->name('edit');
        Route::put('/{commitee}', [CommitteeController::class, 'update'])->name('update');
        Route::delete('/{commitee}', [CommitteeController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('dashboard/footer')->name('footer.')->group(function () {
        Route::get('/', [FooterController::class, 'index'])->name('index');
        Route::post('/{footers}', [FooterController::class, 'update'])->name('update');
        Route::delete('/{supporter}/supporter-image', [FooterController::class, 'destroySupporter'])->name('deleteSupporter');
    });
});

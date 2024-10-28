<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\CallPaperController;
use App\Http\Controllers\HeroSectionController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
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
});

Route::get('/dashboard/for-author', function () {
    return view('pages.dashboard.forauthor');
});

Route::get('/dashboard/registration', function () {
    return view('pages.dashboard.registrationfee');
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

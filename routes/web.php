<?php

use App\Livewire\Advisory;
use App\Livewire\AdvisoryBoard;
use App\Livewire\EventPage;
use App\Livewire\Home;
use App\Livewire\NewsPage;
use App\Livewire\Program;
use App\Livewire\ViewTargetSection;
use App\Models\Welcome;
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

Route::get('/', function(){
    return redirect()->route('home');
});

Route::get('/home', Home::class)->name('home');
Route::get('/programs', Program::class)->name('program');
Route::get('/advisory-board', AdvisoryBoard::class)->name('advisory-board');
Route::get('/events', EventPage::class)->name('events');
Route::get('/news', NewsPage::class)->name('news');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/target-section/{path}',ViewTargetSection::class)->name('target-url');

});

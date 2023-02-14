<?php
use App\Http\Livewire\Welcome;

use App\Http\Livewire\Login;

use App\Http\Livewire\Admin\AdminDashboardList;
use App\Http\Livewire\Admin\AdminProfileList;
use App\Http\Livewire\Admin\AdminExerciseList;
use App\Http\Livewire\Admin\AdminDietList;
use App\Http\Livewire\Admin\AdminStatisticsList;
use App\Http\Livewire\Admin\AdminSubscriptionsList;
use App\Http\Livewire\Admin\AdminGuidesList;
use App\Http\Livewire\Admin\AdminTermsList;

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Exercise;
use App\Http\Livewire\Diet;
use App\Http\Livewire\Statistics;
use App\Http\Livewire\Subscriptions;
use App\Http\Livewire\Guide;
use App\Http\Livewire\Terms;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Welcome
// Route::get('/', Welcome::class)->name('welcome');

// Admin
Route::group(['middleware' => ['auth' , 'admin']], function () {
    Route::get('admin/dashboard', AdminDashboardList::class)->name('admin/dashboard');
    Route::get('admin/profile', AdminProfileList::class)->name('admin/profile');
    Route::get('admin/exercise', AdminExerciseList::class)->name('admin/exercise');
    Route::get('admin/diet', AdminDietList::class)->name('admin/diet');
    Route::get('admin/statistics', AdminStatisticsList::class)->name('admin/statistics');
    Route::get('admin/subscriptions', AdminSubscriptionsList::class)->name('admin/subscriptions');
    Route::get('admin/guide', AdminGuidesList::class)->name('admin/guide');
    Route::get('admin/terms', AdminTermsList::class)->name('admin/terms');
});

// Client
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('profile', Profile::class)->name('profile');
    Route::get('exercise', Exercise::class)->name('exercise');
    Route::get('diet', Diet::class)->name('diet');
    Route::get('statistics', Statistics::class)->name('statistics');
    Route::get('subscriptions', Subscriptions::class)->name('subscriptions');
    Route::get('guide', Guide::class)->name('guide');
    Route::get('terms', Terms::class)->name('terms');
});

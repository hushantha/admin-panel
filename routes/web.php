<?php

use App\Http\Livewire\Admin\Home\Dashboard;
use App\Http\Livewire\Admin\System\Permissions\SystemPermissions;
use App\Http\Livewire\Admin\System\Roles\SystemRoles;
use App\Http\Livewire\Admin\System\Roles\SystemRolesCreate;
use App\Http\Livewire\Admin\System\Roles\SystemRolesEdit;
use App\Http\Livewire\Admin\System\Roles\SystemRolesView;
use App\Http\Livewire\Admin\System\Users\SystemUsers;
use App\Http\Livewire\Admin\System\Users\SystemUsersCreate;
use App\Http\Livewire\Admin\System\Users\SystemUsersEdit;
use App\Http\Livewire\Admin\System\Users\SystemUsersView;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'authuser'])->group(function () {
    Route::prefix('system/admins')->group(function () {
        Route::get('/', Dashboard::class)->name('dashboard');

        Route::get('/users', SystemUsers::class)->name('dashboard.users');
        Route::get('/users/create', SystemUsersCreate::class)->name('dashboard.users.create');
        Route::get('/users/view/{id}', SystemUsersView::class)->name('dashboard.users.view');
        Route::get('/users/edit/{id}', SystemUsersEdit::class)->name('dashboard.users.edit');

        Route::get('/roles', SystemRoles::class)->name('dashboard.roles');
        Route::get('/roles/create', SystemRolesCreate::class)->name('dashboard.roles.create');
        Route::get('/roles/view/{id}', SystemRolesView::class)->name('dashboard.roles.view');
        Route::get('/roles/edit/{id}', SystemRolesEdit::class)->name('dashboard.roles.edit');
        Route::get('/roles/permissions/{id}', SystemPermissions::class)->name('dashboard.permissions');
    });
});

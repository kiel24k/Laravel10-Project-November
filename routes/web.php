<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\admin\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/index',[AdminController::class,'AdminIndex']);


//user
route::controller(UserController::class)->group(function(){
    Route::get('user/index','UserIndex');
    Route::get('user/signup','UserSignup')->name('user.signup');
    Route::get('www.Shop.com','UserLogin');
    route::post('www.Shop.coms','UserAuthentication')->name('user.login');
    Route::get('user/section/product','UserSection')->name('user.section');
    route::get('store/items','StoreItems')->name('store.items');
});

//admin
route::controller(AdminController::class)->group(function(){
route::get('display/data','List')->name('admin.display');
route::get('profiless','profile');
route::get('Admin/Panel', 'AdminPanel')->name('admin.panel');
route::get('Admin/Panels', 'AdminPanels')->name('admin.panels');
route::get('Admin/delete/{id}', 'AdminDelete')->name('admin.delete');
route::get('Admin/Add','AdminAdd')->name('admin.add');
route::post('Admin/Add/Data','AdminAddData')->name('admin.adds');
route::get('Admin/Display/Edit/{id}','EditType')->name('admin.update'); //c
route::post('Admin/Update','AdminUpdate')->name('admin.updates');


route::get('item/data','ItemData')->name('data.item');
route::get('item/add','ItemAdd')->name('add.item');
route::get('item/update/{id}','ItemUpdate')->name('update.item');
route::post('item/update/data','ItemUpdateData')->name('update.data.item');
route::get('Delete/Item/{id}','ItemDelete')->name('item.delete');
route::post('add/data/item','AddItem')->name('add.data.item');

});






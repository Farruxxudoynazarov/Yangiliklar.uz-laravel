<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TagsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/lang/{lang}', function ($lang)
    {
    session(['lang'=>$lang]);
    return back();
});


Route::get('/', [MainController::class, 'index']);
Route::get('/category/{slug}', [MainController::class, 'categoryPosts'])->name('categoryPosts'); 
Route::get('/posts{slug}', [MainController::class, 'postDetail'])->name('postDetail');
Route::get('/contact', [MainController::class, 'contact']);

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
   
   
    Route::get('/dashboard', function () {
        return view('layouts.admin');
    })->name('dashboard');


    // Route::post('/logout', 'AuthController'::class);


    Route::resource('categories', CategoriesController::class);
    Route::resource('post', PostsController::class);
    Route::post('/post-image-upload', [PostsController::class, 'upload'])->name('upload');
    Route::resource('tag', TagsController::class); 
    Route::group(['middleware' => ['role:admin']], function() {        
        Route::resource('users',UsersController::class);
        Route::resource('roles', RolesController::class);
     });

    //  Route::resource('role', )


});


require __DIR__.'/auth.php';

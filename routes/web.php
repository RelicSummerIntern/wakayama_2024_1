<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Models\City;
use Illuminate\Http\Request;

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

Route::get('/get-city-id', function (Request $request) {
    logger(__LINE__);
    $municipality = $request->query('municipality');
    $city = City::where('name', $municipality)->first();

    if ($city) {
        return response()->json(['id' => $city->id]);
    } else {
        return response()->json(['error' => '市町村が見つかりませんでした。'], 404);
    }
});

Route::get('/', function () {
    return view('top');
})->name('top');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/list', [ArticleController::class, 'index'])->name('articles.list');
Route::get('/list/{id}', [CityController::class, 'show'])->name('city.show');
Route::post('/list/store', [ArticleController::class, 'store'])->name('articles.store');

Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');

Route::get('/detail/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/place', function () {
    return view('place');
})->name('place');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post/index', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::get('/myposts', [PostController::class, 'myPosts'])->name('myposts');
});

require __DIR__ . '/auth.php';

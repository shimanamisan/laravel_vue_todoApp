<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 会員登録
Route::post('/register', 'Auth\RegisterController@register')->name('register');
// ログイン
Route::post('/login', 'Auth\LoginController@login')->name('login');
// ログアウト
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
// ログインユーザー（ログインしているユーザーを返すだけなのでコントローラーは作成しない）
Route::get('/user', function () {
    return Auth::user();
    })->name('user');
// プロフィール写真投稿
Route::post('/profile/{id}', 'ProfileController@create')->name('profile.create');
// プロフィール一覧
Route::get('/profile', 'ProfileController@profileview')->name('profile.profileview');

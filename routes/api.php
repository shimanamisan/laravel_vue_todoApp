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
// プロフィール一覧でも使う
Route::get('/user', function () {
    return Auth::user();
    })->name('user');
// プロフィール変更
Route::post('/profile/{id}', 'ProfileController@profileEdit')->name('profile.profileEdit');
// Route::post('/profile/{id}',function(){
//     dd(request()->all());
//     $file_name = request()->file->getClientOriginalName();
//     // strage/app/public/profile_imgフォルダへ保存
// 	request()->file->storeAs('public/profile_img',$file_name);
// });

// Route::post('/fileupload',function(){
// 	dd(request()->all());
// });

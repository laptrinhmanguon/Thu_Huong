<?php
Route::group(['prefix' => 'modal/author'], function (){
    Route::get('/index',[\App\Http\Controllers\Modal\AuthorController::class, 'index']);

    Route::get('/view_add', 'Modal\AuthorController@vewAdd');

});
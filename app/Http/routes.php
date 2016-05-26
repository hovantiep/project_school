<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('getAdd', ['as' => 'getAddNews', 'uses' => 'NewsController@getAdd']);

Route::get('file', function () {
    $file = 'upload/files/a b c.txt';

    if (File::isFile($file)) {
        $content = File::get($file);
        $mimeType = File::mimeType($file);

        $response = Response::make($content, 200, array('Content-Type' => $mimeType));
        return $response;
    }
    return 'fail';
});



Route::group(['prefix'=>'backend','middleware'=>'auth'],function(){

    Route::group(['prefix'=>'news'],function(){

        Route::get('index',['as'=>'getIndexNews','uses'=>'NewsController@getIndex']);

        Route::get('add',['as'=>'getAddNews','uses'=>'NewsController@getAdd']);
        Route::post('add',['as'=>'postAddNews','uses'=>'NewsController@postAdd']);

        Route::get('edit/{news}',['as'=>'getEditNews','uses'=>'NewsController@getEdit']);
        Route::post('edit/{news}',['as'=>'postEditNews','uses'=>'NewsController@postEdit']);

        Route::get('delete/{news}',['as'=>'getDeleteNews','uses'=>'NewsController@getDelete']);

    });

    Route::group(['prefix'=>'cate'],function(){

        Route::get('index',['as'=>'getIndexCate','uses'=>'CategoryController@getIndex']);

        Route::get('add',['as'=>'getAddCate','uses'=>'CategoryController@getAdd']);
        Route::post('add',['as'=>'postAddCate','uses'=>'CategoryController@postAdd']);

        Route::get('edit/{cate}',['as'=>'getEditCate','uses'=>'CategoryController@getEdit']);
        Route::post('edit/{cate}',['as'=>'postEditCate','uses'=>'CategoryController@postEdit']);

        Route::get('delete/{cate}',['as'=>'getDeleteCate','uses'=>'CategoryController@getDelete']);

    });
});

Route::get('test',function(){
    return view('frontend.index');
});

Route::group(['prefix'=>'quiz'],function(){

    Route::get('index',['as'=>'getIndexExam','uses'=>'ExaminationController@getIndex']);
    Route::post('index',['as'=>'postIndexExam','uses'=>'ExaminationController@postIndex']);

//    Route::get('test',['as'=>'getTestExam','uses'=>'ExaminationController@AnswerTable']);
    Route::get('test',function(){
        return view('backend.template.add-quiz');
    });
});



Route::any('{all?}',function(){
    return view('errors.503');
})->where('all', '(.*)');
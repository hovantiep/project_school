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

Route::get('test',function(){
   return view('frontend.index');
});
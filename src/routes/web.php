<?php
/*Route::get('/sample',function (){
   return 'sample';
});

Route::get('/sample', 'SampleController@index');*/


$namespace = 'Aadithya\sample\Http\Controllers'
    Route::group(['namespace' => $namespace], function (){
        Route::get('/sample','SampleController@index');
    });
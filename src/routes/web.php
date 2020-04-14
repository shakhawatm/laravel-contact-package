<?php
/**
 * Contact create form
 */

Route::group(['namespace'=>'Shakhawat\Contact\Http\Controllers'], function (){
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});


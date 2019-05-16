<?php

// ramayan\LaraContactForm\src\routes\web.php

// Route::get('contact', function(){
//     return view('Laracontactform::contact');
// });

// Route::post('contact', function(){
//     // logic goes here
//     echo 'test';
// })->name('contact');



Route::group(['namespace' => 'Ramayan\Laracontactform\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
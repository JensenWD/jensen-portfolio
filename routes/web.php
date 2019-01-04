<?php

Route::get('/', function () {
    return view('homepage');
});

Route::get('/project/{$project}', 'PagesController@getProject');
Route::post('/contact-send', 'EmailController@contactEmail')->name('contact');
Route::post('/mailable', function (\Illuminate\Http\Request $request) {
    return new \App\Mail\ContactEmail($request);
})->name('mailable');

//Route::get('/project/garmeo', function () {
//    return view('homepage');
//});
//
//Route::get('/project/hoopmade', function () {
//    return view('homepage');
//});
//
//Route::get('/project/ricoma', function () {
//    return view('homepage');
//});

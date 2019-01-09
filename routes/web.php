<?php

Route::get('/', function () {
    return view('homepage');
});

Route::get('/project/{project}', 'PagesController@getProject');
Route::post('/contact-send', 'EmailController@contactEmail')->name('contact');
Route::post('/mailable', function (\Illuminate\Http\Request $request) {
    return new \App\Mail\ContactEmail($request);
})->name('mailable');

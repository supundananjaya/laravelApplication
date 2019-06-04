<?php

Route::group(['namespace' => 'User'], function() {

    Route::get('/', 'HomeController@index')->name('user.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('user.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('user.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('user.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('user.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('user.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('user.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('user.verification.verify');

});
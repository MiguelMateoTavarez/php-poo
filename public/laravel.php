<?php

Route::get('/');

Redirect::to('/login');

View::make('home');
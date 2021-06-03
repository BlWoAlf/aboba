<?php

use Illuminate\Support\Facades\Route;
use Blwoalf\Aboba\Aboba;

Route::get('aboba', function () {
    $aboba = new Aboba;
    return $aboba->helloAboba();
});

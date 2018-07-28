<?php

use Illuminate\Support\Facades\Route;

function test_helper()
{
	return 'OK';
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

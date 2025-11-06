<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('users', fn () => User::paginate(10)->toResourceCollection());

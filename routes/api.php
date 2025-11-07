<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Team;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Route;

Route::get('users', fn () => User::paginate(50)->toResourceCollection());
Route::get('users/{user}', fn (User $user) => $user->toResource());

Route::get('user-profiles', fn () => UserProfile::paginate(50)->toResourceCollection());
Route::get('user-profiles/{userProfile}', fn (UserProfile $userProfile) => $userProfile->toResource());
    
Route::get('posts', fn () => Post::paginate(50)->toResourceCollection());
Route::get('posts/{post}', fn (Post $post) => $post->toResource());

Route::get('teams', fn () => Team::paginate(50)->toResourceCollection());
Route::get('teams/{team}', fn (Team $team) => $team->toResource());
<?php

namespace Database\Seeders;

use App\Enums\TeamRole;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Team;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Taylor Otwell',
            'email' => 'taylor@laravel.com'
        ]);

        UserProfile::factory()->create([
            'user_id' => $user->getKey(),
            'date_of_birth' => '2011-06-09',
            'timezone' => 'America/Chicago',
        ]);

        $team = Team::factory()->create([
            'name' => 'Laravel Team',
        ]);

        $user->teams()->attach($team, ['role' => TeamRole::OWNER]);
        $user->teams()->attach($team, ['role' => TeamRole::MEMBER]);
        
        User::factory(10)->create();
        $posts = Post::factory(50)->create();

        tap($posts->first(), function (Post $post) use ($user) {
            $post->user_id = $user->getKey();
        })->save();

        Comment::factory()->create([
            'post_id' => $posts->first()->getKey(),
            'user_id' => $user->getKey(),
        ]);
    }
}

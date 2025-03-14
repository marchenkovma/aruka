<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        $user = User::create([
            'name' => 'Maksim',
            'email' => 'marchenkovby@gmail.com',
            'password' => 'v32skpert'
        ]);

        $categories = Category::factory()
            ->count(10)
            ->create();

        $tags = Tag::factory()
            ->count(20)
            ->create();

        Post::factory()
            ->count(20)
            ->create(
                ['user_id' => $user->id]
            );

        Post::factory()
            ->published()
            ->count(30)
            ->create(
                ['user_id' => $user->id]
            );

        Post::all()
            ->each(function ($post) use ($categories, $tags) {
                $post
                    ->categories()
                    ->attach
                    (
                        $categories
                            ->random(rand(1, 3))
                            ->pluck('id')
                            ->toArray()
                    );
                $post
                    ->tags()
                    ->attach
                    (
                        $tags
                            ->random(rand(1, 5))
                            ->pluck('id')
                            ->toArray()
                    );
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Meeting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2000)->create();
        Meeting::factory(200)->create();
        Category::factory(30)->create();

        foreach (Meeting::all() as $meeting) {
            $participants = User::query()
                ->inRandomOrder()
                ->limit(rand(0, 30))
                ->get();

            $categories = Category::query()
                ->inRandomOrder()
                ->limit(rand(1, 4))
                ->get();

            $meeting->participants()->sync($participants);
            $meeting->categories()->sync($categories);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('blogs')->insert([
                'title' => fake()->sentence(6),
                'photo_link' =>  "https://upload.wikimedia.org/wikipedia/commons/6/62/Sunrise_at_Lake_Bled.jpg",
                'content' => fake()->paragraph(30),
                'user_id' =>session('id'),
                'category_id' => rand(1,7),
                'created_at' => fake()->dateTime(now()),
                'updated_at' => now(),
            ]);
        }
    }
}

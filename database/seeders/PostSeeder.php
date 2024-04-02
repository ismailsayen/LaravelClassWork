<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Post::factory(30)->create();
        for ($i = 0; $i < 30; $i++) {
            DB::table('posts')->insert([
                'descriptipn' => Str::random(30)
            ]);
        }
            
    }
}

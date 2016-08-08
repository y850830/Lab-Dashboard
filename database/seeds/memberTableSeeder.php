<?php

use Illuminate\Database\Seeder;
use App\Models\member;

class memberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = member::all();
    }
}

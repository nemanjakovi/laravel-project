<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
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
        \App\Models\User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Junior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Crop',
        //     'location' => 'Belgrade',
        //     'email' => 'mojmail@gmail.com',
        //     'website' => 'https://www.mojsajt.com',
        //     'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        //     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        //     when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        // ]);

        // Listing::create([
        //     'title' => 'Full_Stack Engineer',
        //     'tags' => 'laravel, jbackend,api',
        //     'company' => 'Bomo Crop',
        //     'location' => 'Belgrade',
        //     'email' => 'mojmail@gmail.com',
        //     'website' => 'https://www.mysecundsite.com',
        //     'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        //     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        //     when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

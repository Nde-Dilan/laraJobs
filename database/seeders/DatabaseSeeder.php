<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    //Creating 10 users using the UserFactory found inside the factories folder
    // \App\Models\User::factory(10)->create();
    $user = User::factory()->create([
      "name" => "Dilan",
      "email" => "dilan@gmail.com"
    ]);

    //Creating 10 jobs using the JobFactory found inside the factories folder
    Job::factory(10)->create([
      'user_id' => $user->id,
    ]);

    Job::create([
      'user_id' => $user->id,
      'title' => 'Junior Developer',
      'tags' => 'laravel, php, javascript',
      'company' => 'Wonka Industries',
      'location' => 'Boston, MA',
      'email' => 'email4@email.com',
      'website' => 'https://www.wonka.com',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    ]);
    Job::create([
      'user_id' => $user->id,
      'title' => 'Junior Developer',
      'tags' => 'laravel, php, javascript',
      'company' => 'Wonka Industries',
      'location' => 'Boston, MA',
      'email' => 'email4@email.com',
      'website' => 'https://www.wonka.com',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    ]);

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}

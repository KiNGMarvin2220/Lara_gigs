<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(50)->create();
        //$this->call(ActorSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = User::factory()->create([
            'name' => 'Marvin',
            'email' => 'john@gmail.com',
        ]);
        
        Listing::factory(15)->create([
            'user_id' => $user->id
        ]);

        Product::factory(20)->create();

    }
}

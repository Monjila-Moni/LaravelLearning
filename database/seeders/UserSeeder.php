<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $jsonPath = storage_path('app/users.json');//storage e saved ace ai file ti
        // Check if the file exists
        if (File::exists($jsonPath)) {
            // Decode the JSON file into an array
            $users = json_decode(File::get($jsonPath), true);

            // Insert each user into the database
            foreach ($users as $user) {
                User::create($user);
            }

            $this->command->info('Users table seeded successfully!');
        } 
        else {
            $this->command->error("File not found: {$jsonPath}");
        }
    }
}

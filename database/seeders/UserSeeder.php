<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Task;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@checklist.nl',
            'password' => Hash::make('admin')
            ]);
        $admin->assignRole('admin');


        $user = User::factory()->create([
            'name' => 'user',
            'email' => 'user@checklist.nl',
            'password' => Hash::make('user')
        ]);
        $user->assignRole('user');

        $exampleuser = User::factory()->create([
            'name' => 'example user',
            'email' => 'exampleuser@checklist.nl',
            'password' => Hash::make('user')
        ]);
        $exampleuser->assignRole('user');


        User::factory()->has(Task::factory()->times(5))->create();


    }
}

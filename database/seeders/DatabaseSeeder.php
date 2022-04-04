<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        \App\Models\User::insert(
            [
                [
                    'nik' => '12345678',
                    'name' => 'Masteradmin',
                    'email' => 'masteradmin@pedulidiri.go.id',
                    'password' => bcrypt('123456'),
                    'role' => 'Admin',
                    'created_at' => '2022-04-03 02:25:08',
                ],
                [
                    'nik' => '3212345678123456',
                    'name' => 'nur azizah',
                    'email' => 'azizahsyafiqoh123@gmail.com',
                    'password' => bcrypt('123456'),
                    'role' => 'User',
                    'created_at' => '2022-04-03 02:25:08',
                ],
                [
                    'nik' => '3212345612345678',
                    'name' => 'Bella',
                    'email' => 'abela@gmail.com',
                    'password' => bcrypt('123456'),
                    'role' => 'User',
                    'created_at' => '2022-04-03 02:25:08',
                ]
            ]
                );
    }
}

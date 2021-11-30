<?php

use App\Models\Admin\Products;
use App\User;
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
        // $this->call(UserSeeder::class);
        $admin = new User();
        $admin->name = 'Eduardo';
        $admin->telephone = 8718875558;
        $admin->direction = 'Mexico';
        $admin->email = 'eduarxossa@gmail.com';
        $admin->password = bcrypt('eduarxossa@gmail.com');
        $admin -> save();

        factory(Products::class, 10)->create();
    }
}

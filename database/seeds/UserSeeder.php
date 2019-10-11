<?php

use Illuminate\Database\Seeder;
use Model\User;
use database\factories\UserFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserFactory(User::class, 10);
    }
}

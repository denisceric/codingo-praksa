<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@dnevnik.me',
            'admin' => 1,
            'password' => bcrypt('adminpraks@'),
        ]);
    }
}

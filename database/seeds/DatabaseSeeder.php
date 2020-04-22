<?php

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
        // $this->call(UsersTableSeeder::class);
        //calling table seeders for contacts and group
        //$this->call('GroupTableSeeder');
        $this->call('ContactTableSeeder');
    }
}

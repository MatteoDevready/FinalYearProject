<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Check if the foreign key is set to zero before trunc it
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //The table need to be truncate in order to deal with fresh data
        DB::table('groups')->truncate();
        //group will contain an array of elements
        $groups = [
            ['id' =>1, 'name'=>'Employee', 'created_at'=> new DateTime, 'updated_at'=> new DateTime],
            ['id' =>2, 'name'=>'Clients', 'created_at'=> new DateTime, 'updated_at'=> new DateTime],
            ['id' =>3, 'name'=>'ProjectManagers', 'created_at'=> new DateTime, 'updated_at'=> new DateTime],
        ];

        DB::table('groups')->insert($groups);
    }
}

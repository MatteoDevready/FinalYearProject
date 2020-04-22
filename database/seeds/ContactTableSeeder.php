<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //referring to which table i want to apply the truncate function fro ensureing fresh data
        DB::table('contacts')->truncate();
        $faker = Faker::create();//instance of faker
        $contacts = [];
        //generating dummy date witht he faker class import at line 4
        foreach(range(1,20)as $index){

            $contacts[] = [

                'name'=> $faker->name,
                'group_id'=> rand(1, 3),
                'email'=> $faker->email,
                'phone'=> $faker->phoneNumber,
                'company'=> $faker->company,
                'address'=>"{$faker->streetName} {$faker->postcode} {$faker->city}",
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime

            ];
        }

        DB::table('contacts')->insert($contacts);
    }
}

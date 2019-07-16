<?php

use Illuminate\Database\Seeder;

class ParticularUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jamii_particularuser')->insert([
            'name'=>'jackfrank',
            'email'=>'jackfranker@gmail.com',
            'password'=>'fe01ce2a7fbac8fafaed7c982a04e229',

         ] );
    }
}

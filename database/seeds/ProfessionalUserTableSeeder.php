<?php

use Illuminate\Database\Seeder;

class ProfessionalUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jamii_professionaluser')->insert([
            'name'=>'jackfrank',
            'f_name'=>'jack',
            'email'=>'jackfrank@gmail.com',
            'password'=>'fe01ce2a7fbac8fafaed7c982a04e229',
            'com_name'=>'shenyangcompany',
            'siret'=>'1224',
            'heading'=>'this is demo',
            'address'=>'shenyang medizhangyuan liaoning china',
            'zip'=>'11000',
            'phone'=>'1861244048',
            'type'=>'professional',
            'status'=>'0',
            'civility'=>'Mr',       
         ] );
    }
}

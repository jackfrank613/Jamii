<?php

use Illuminate\Database\Seeder;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jamii_subcategories')->insert([
            'c_id'=>'1',
            'sname'=>'Offres d emploi',
            'option'=>'jobcategory',
        ]);
    }
}

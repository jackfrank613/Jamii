<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jamii_categories')->insert([
            'cname'=>'Emploi',
            'icon'=>'fa-shopping-bag',
         ] );
         DB::table('jamii_categories')->insert([
            'cname'=>'Véhicules',
            'icon'=>'fa-car',
         ] );
         DB::table('jamii_categories')->insert([
            'cname'=>'Immobilier',
            'icon'=>'fa-home',
         ] );
         DB::table('jamii_categories')->insert([
            'cname'=>'Vacances',
            'icon'=>'fa-sun-o',
         ] );
         DB::table('jamii_categories')->insert([
            'cname'=>'Multimédia',
            'icon'=>'fa-star',
         ] );
         DB::table('jamii_categories')->insert([
            'cname'=>'Maison',
            'icon'=>'fa-bed',
         ] );
         DB::table('jamii_categories')->insert([
            'cname'=>'Mode',
            'icon'=>'fa-slideshare',
         ] );
         DB::table('jamii_categories')->insert([
            'cname'=>'Loisirs',
            'icon'=>'fa-star',
         ] );
         DB::table('jamii_categories')->insert([
            'cname'=>'Matériel professionnel',
            'icon'=>'fa-truck',
         ] );

         DB::table('jamii_categories')->insert([
            'cname'=>'Services',
            'icon'=>'fa-handshake-o',
         ] );

         DB::table('jamii_categories')->insert([
            'cname'=>'Divers',
            'icon'=>'fa-search',
         ] );
    }
}

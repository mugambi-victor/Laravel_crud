<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;
class ProductsTabledata extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach(range(1,20) as $index){
            DB::table('products')->insert([
                'name'=>$faker->name,
                'details'=>$faker->text]);
        }
        
    }
}

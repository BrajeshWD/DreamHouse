<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;
class homedesignseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       db::table('home_Designs')->insert(
                  [
            'name'=>'flat',
            'type'=>'3bhk',
            'price'=>'35 lakhs',
            'gallery'=>'img\Koala.jpg',
            'description'=>'this is flat with modular kitchern'
                       ]);
    }
}

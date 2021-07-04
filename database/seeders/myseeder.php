<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Str;
class myseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('students')->insert(
          [   'rollno'=>8,
              'sname'=>str::random(10)
      ]
      );
    }
}

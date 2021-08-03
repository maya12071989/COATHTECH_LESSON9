<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InquiriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $param = [
            'name' => 'tony',
            'email' => 'tony@gmail.com',
           ];
        \DB::table('inquiries')->insert($param);
        $param = [
            'name' => 'jack',
            'email' => 'jack@gmail.com',
        ];
        \DB::table('inquiries')->insert($param);
        //
    }
}

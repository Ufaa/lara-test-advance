<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FaqsTableSeeder extends Seeder
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
            'address' => 'tony@test.co.jp'
        ];
        DB::table('faqs')->insert($param);
        $param = [
            'name' => 'ally',
            'address' => 'ally@test.co.jp'
        ];
        DB::table('faqs')->insert($param);
        $param = [
            'name' => 'sam',
            'address' => 'sam@test.co.jp'
        ];
        DB::table('faqs')->insert($param);
        $param = [
            'name' => 'jack',
            'address' => 'jack@test.co.jp'
        ];
        DB::table('faqs')->insert($param);
    }
}

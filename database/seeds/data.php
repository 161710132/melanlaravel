<?php

use Illuminate\Database\Seeder;

class data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[

        		['nama'=>'melan','kelas'=>'XI RPL 2']



        ];

        DB::table('mel')->insert($a);
    }
}

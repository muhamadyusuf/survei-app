<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    $sql = \File::get(database_path('sqls/lokasi.sql'));
    \DB::unprepared($sql);
}
}

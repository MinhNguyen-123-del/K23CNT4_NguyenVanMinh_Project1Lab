<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NvmVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvmvattu')->insert([
            'nvmMaVTu'=>'DD01',
            'nvmTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'nvmDvTinh'=>'Bộ',
            'nvmPhanTram'=>40,
        ]);
        DB::table('nvmvattu')->insert([
            'nvmMaVTu'=>'DD02',
            'nvmTenVTu'=>'Nụ Hôn Của Em',
            'nvmDvTinh'=>'Cái',
            'nvmPhanTram'=>40,
        ]);
    }
}

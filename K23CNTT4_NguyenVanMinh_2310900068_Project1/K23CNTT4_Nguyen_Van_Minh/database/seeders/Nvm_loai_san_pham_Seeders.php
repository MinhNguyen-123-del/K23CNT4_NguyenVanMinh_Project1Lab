<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nvm_loai_san_pham_Seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvm_loai_san_pham')->insert([ 
            'nvmMaLoai'=>"L001",
            'nvmTenLoai'=>"Áo Ngủ Thu Đông",
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_loai_san_pham')->insert([ 
            'nvmMaLoai'=>"L002",
            'nvmTenLoai'=>"Đồ Trang Điểm Dành Cho Nam",
            'nvmTrangThai'=>1
        ]);
        DB::table('nvm_loai_san_pham')->insert([ 
            'nvmMaLoai'=>"L003",
            'nvmTenLoai'=>"Quần Âu",
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_loai_san_pham')->insert([ 
            'nvmMaLoai'=>"L004",
            'nvmTenLoai'=>"Áo Thời Trang Phong Cách",
            'nvmTrangThai'=>0
        ]);
    }
}

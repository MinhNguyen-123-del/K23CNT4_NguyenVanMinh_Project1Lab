<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvm_loai_san_pham_seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvm_loai_san_pham')->insert([ 
            'nvmMaLoai'=>"L001",
            'nvmTenLoai'=>"Cây Cảnh Văn Phòng",
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_loai_san_pham')->insert([ 
            'nvmMaLoai'=>"L002",
            'nvmTenLoai'=>"Cây Để Bàn",
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_loai_san_pham')->insert([ 
            'nvmMaLoai'=>"L003",
            'nvmTenLoai'=>"Cây Cảnh Phong Thủy",
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_loai_san_pham')->insert([ 
            'nvmMaLoai'=>"L004",
            'nvmTenLoai'=>"Cây Cảnh Thủy Cảnh",
            'nvmTrangThai'=>0
        ]);
    }
}

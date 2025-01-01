<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nvm_ct_hoa_don_Seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvm_ct_hoa_don')->insert([
           'nvmHoaDonID'=>"001",
           'nvmSanPhamID'=>"Quần Baby ",
           'nvmSoLuongMua'=>"2",
           'nvmDonGiaMua'=>"30000",
           'nvmThanhTien'=>"60000",
           'nvmTrangThai'=>1
        ]);
        DB::table('nvm_ct_hoa_don')->insert([
            'nvmHoaDonID'=>"002",
            'nvmSanPhamID'=>"Áo Giáng Sinh" ,
            'nvmSoLuongMua'=>"1",
            'nvmDonGiaMua'=>"70000",
            'nvmThanhTien'=>"70000",
            'nvmTrangThai'=>1
         ]);
         DB::table('nvm_ct_hoa_don')->insert([
            'nvmHoaDonID'=>"003",
            'nvmSanPhamID'=>"Giầy Like",
            'nvmSoLuongMua'=>"1",
            'nvmDonGiaMua'=>"160000",
            'nvmThanhTien'=>"160000",
            'nvmTrangThai'=>0
         ]);
         DB::table('nvm_ct_hoa_don')->insert([
            'nvmHoaDonID'=>"004",
            'nvmSanPhamID'=>"Túi mù labubu",
            'nvmSoLuongMua'=>"5",
            'nvmDonGiaMua'=>"20000",
            'nvmThanhTien'=>"100000",
            'nvmTrangThai'=>0
         ]);
         DB::table('nvm_ct_hoa_don')->insert([
            'nvmHoaDonID'=>"005",
            'nvmSanPhamID'=>"Áo Khoác Da Quý Phái",
            'nvmSoLuongMua'=>"1",
            'nvmDonGiaMua'=>"999000",
            'nvmThanhTien'=>"999000",
            'nvmTrangThai'=>1
         ]);
         DB::table('nvm_ct_hoa_don')->insert([
            'nvmHoaDonID'=>"006",
            'nvmSanPhamID'=>"Son Dưỡng Black",
            'nvmSoLuongMua'=>"3",
            'nvmDonGiaMua'=>"67000",
            'nvmThanhTien'=>"201000",
            'nvmTrangThai'=>1
         ]);
         DB::table('nvm_ct_hoa_don')->insert([
            'nvmHoaDonID'=>"007",
            'nvmSanPhamID'=>"Quần ống rộng dáng dài Choice FA1-0795-3 chất nhung tăm 3 màu tùy chọn phong cách",
            'nvmSoLuongMua'=>"2",
            'nvmDonGiaMua'=>"72000",
            'nvmThanhTien'=>"140000",
            'nvmTrangThai'=>1
         ]);
    }
}

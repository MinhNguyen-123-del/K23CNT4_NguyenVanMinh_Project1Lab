<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvm_san_pham_seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"VP001",
            'nvmTenSanPham'=>"Cây Phú Quý",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>100,
            'nvmDonGia'=>699000,
            'nvmMaLoai'=>1,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"VP002",
            'nvmTenSanPham'=>"Cây Đại Phú Gia",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>200,
            'nvmDonGia'=>550000,
            'nvmMaLoai'=>1,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"VP003",
            'nvmTenSanPham'=>"Cây Hạnh Phúc",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>150,
            'nvmDonGia'=>250000,
            'nvmMaLoai'=>1,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"VP004",
            'nvmTenSanPham'=>"Cây Vạn Lộc",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>300,
            'nvmDonGia'=>790000,
            'nvmMaLoai'=>1,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"PT01",
            'nvmTenSanPham'=>"Cây Thiết Mộc Lan",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>150,
            'nvmDonGia'=>590000,
            'nvmMaLoai'=>3,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"PT02",
            'nvmTenSanPham'=>"Cây Trường Sinh",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>100,
            'nvmDonGia'=>150000,
            'nvmMaLoai'=>3,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"PT03",
            'nvmTenSanPham'=>"Cây Hạnh phúc",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>200,
            'nvmDonGia'=>299000,
            'nvmMaLoai'=>3,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"PT04",
            'nvmTenSanPham'=>"Cây Hoa Nhà(Lài Ta)",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>300,
            'nvmDonGia'=>199000,
            'nvmMaLoai'=>3,
            'nvmTrangThai'=>0
        ]);

    }
}

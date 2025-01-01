<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nvm_san_pham_Seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"VP001",
            'nvmTenSanPham'=>"Áo phông nữ nam unisex local brand CLOUDZY FA1-0645-5 form oversize tay lỡ thun labubu",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>100,
            'nvmDonGia'=>102000,
            'nvmMaLoai'=>1,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"VP002",
            'nvmTenSanPham'=>"Áo trễ vai nữ Choice HT68 cộc tay dáng dài, thanh lịch cho nữ",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>200,
            'nvmDonGia'=>71000,
            'nvmMaLoai'=>1,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"VP003",
            'nvmTenSanPham'=>"Quần ống rộng dáng dài Choice FA1-0795-3 chất nhung tăm 3 màu tùy chọn phong cách",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>150,
            'nvmDonGia'=>72000,
            'nvmMaLoai'=>1,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"VP004",
            'nvmTenSanPham'=>"Áo thun nữ Choice FA1-0507-3 baby tee phong cách basic",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>300,
            'nvmDonGia'=>43000,
            'nvmMaLoai'=>1,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"PT01",
            'nvmTenSanPham'=>"Áo phông nam nữ local brand Choice FA1-0645-9 tay lỡ form rộng cổ tròn oversize WHITE BUNNY",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>150,
            'nvmDonGia'=>91000,
            'nvmMaLoai'=>3,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"PT02",
            'nvmTenSanPham'=>"Bông tẩy trang Natural Choice XB02 cottonpad",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>100,
            'nvmDonGia'=>15000,
            'nvmMaLoai'=>3,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"PT03",
            'nvmTenSanPham'=>"Vớ gấu Choice BT82 họa tiết dễ thương",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>200,
            'nvmDonGia'=>35000,
            'nvmMaLoai'=>3,
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_san_pham')->insert([
            'nvmMaSanPham'=>"PT04",
            'nvmTenSanPham'=>" Set 10 khẩu trang 5D Kenko ES-81.14 chống nắng chống bụi 3 lớp cao cấp",
            'nvmHinhAnh'=>"abc",
            'nvmSoLuong'=>300,
            'nvmDonGia'=>19900,
            'nvmMaLoai'=>2,
            'nvmTrangThai'=>0
        ]);
    }
}

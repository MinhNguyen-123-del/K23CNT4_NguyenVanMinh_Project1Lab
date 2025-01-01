<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Nvm_hoa_don_Seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvm_hoa_don')->insert([
            'nvmMaHoaDon'=>"HD01",
            'nvmMaKhachHang'=>"1",
            'nvmNgayHoaDon'=>"2024-12-29",
            'nvmNgayNhan'=>"2024-12-31",
            'HoTenKhachHang'=>"Nguyễn Văn Minh",
            'nvmEmail'=>"Minh1234@gmail.com",            
            'nvmDienThoai'=>"0387853605",
            'nvmDiaChi'=>"Hà Nội",
            'nvmTongTriGia'=>"140.000",
            'nvmTrangThai'=>1
        ]);
        DB::table('nvm_hoa_don')->insert([
            'nvmMaHoaDon'=>"HD02",
            'nvmMaKhachHang'=>"2",
            'nvmNgayHoaDon'=>"2024-12-24",
            'nvmNgayNhan'=>"2024-12-31",
            'HoTenKhachHang'=>"Đặng Thị Thủy",
            'nvmEmail'=>"Thuy1234@gmail.com",
            'nvmDienThoai'=>"0387853687",
            'nvmDiaChi'=>"Ứng Hòa",
            'nvmTongTriGia'=>"200.000",
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_hoa_don')->insert([
            'nvmMaHoaDon'=>"HD03",
            'nvmMaKhachHang'=>"3",
            'nvmNgayHoaDon'=>"2024-12-29",
            'nvmNgayNhan'=>"2024-12-30",
            'nvmEmail'=>"Cham234@gmail.com",
            'nvmDienThoai'=>"0387853656",
            'nvmDiaChi'=>"Hải Dướng",
            'nvmTongTriGia'=>"50.000",
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_hoa_don')->insert([
            'nvmMaHoaDon'=>"HD04",
            'nvmMaKhachHang'=>"4",
            'nvmNgayHoaDon'=>"2024-12-21",
            'nvmNgayNhan'=>"2024-12-24",
            'HoTenKhachHang'=>"Trần Minh Trí",
            'nvmEmail'=>"TriDepTrai234@gmail.com",
            'nvmDienThoai'=>"0387853605",
            'nvmDiaChi'=>"Tây Nguyên",
            'nvmTongTriGia'=>"140.000",
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_hoa_don')->insert([
            'nvmMaHoaDon'=>"HD05",
            'nvmMaKhachHang'=>"5",
            'nvmNgayHoaDon'=>"2024-12-24",
            'nvmNgayNhan'=>"2024-12-31",
            'HoTenKhachHang'=>"Bạch Ngọc Mai",
            'nvmEmail'=>"MaiMai234@gmail.com",
            'nvmDienThoai'=>"0387853785",
            'nvmDiaChi'=>"Hưng Yên",
            'nvmTongTriGia'=>"110.000",
            'nvmTrangThai'=>1
        ]);
    }
}

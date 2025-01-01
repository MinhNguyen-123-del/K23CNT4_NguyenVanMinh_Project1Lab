<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nvm_khach_hang_Seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvm_khach_hang')->insert([ 
            'nvmMaKhachHang'=>"K001",
            'nvmHoTenKhachhang'=>"Nguyễn Văn Minh",
            'nvmEmail'=>"Minh1234@gmail.com",
            'nvmMatKhau'=>"1234",
            'nvmDienThoai'=>"0387853605",
            'nvmDiaChi'=>"Hà Nội",
            'nvmNgayDangKy'=>"2024-12-27",
            'nvmTrangThai'=>1
        ]);
        DB::table('nvm_khach_hang')->insert([ 
            'nvmMaKhachHang'=>"K002",
            'nvmHoTenKhachhang'=>"Đặng Thị Thủy",
            'nvmEmail'=>"Thuy1234@gmail.com",
            'nvmMatKhau'=>"1234",
            'nvmDienThoai'=>"0387853687",
            'nvmDiaChi'=>"Ứng Hòa",
            'nvmNgayDangKy'=>"2024-12-22",
            'nvmTrangThai'=>0
        ]);
        DB::table('nvm_khach_hang')->insert([ 
            'nvmMaKhachHang'=>"K003",
            'nvmHoTenKhachhang'=>"Nguyễn Ngọc Bảo Châm",
            'nvmEmail'=>"Cham234@gmail.com",
            'nvmMatKhau'=>"1234",
            'nvmDienThoai'=>"0387853656",
            'nvmDiaChi'=>"Hải Dướng",
            'nvmNgayDangKy'=>"2024-12-27",
            'nvmTrangThai'=>1
        ]);
        DB::table('nvm_khach_hang')->insert([ 
            'nvmMaKhachHang'=>"K004",
            'nvmHoTenKhachhang'=>"Trần Minh Trí",
            'nvmEmail'=>"TriDepTrai234@gmail.com",
            'nvmMatKhau'=>"1234",
            'nvmDienThoai'=>"0387853605",
            'nvmDiaChi'=>"Tây Nguyên",
            'nvmNgayDangKy'=>"2024-10-11",
            'nvmTrangThai'=>1
        ]);
        DB::table('nvm_khach_hang')->insert([ 
            'nvmMaKhachHang'=>"K005",
            'nvmHoTenKhachhang'=>"Bạch Ngọc Mai",
            'nvmEmail'=>"MaiMai234@gmail.com",
            'nvmMatKhau'=>"1234",
            'nvmDienThoai'=>"0387853785",
            'nvmDiaChi'=>"Hưng Yên",
            'nvmNgayDangKy'=>"2024-09-15",
            'nvmTrangThai'=>1
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvm_quan_tri extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   $nvmMatKhau=md5("123456@");
        DB::table('nvm_quan_tri')->insert([            
            'nvmTaiKhoan'=>"Vanminhham@gmail.com",
            'nvmMatKhau'=> $nvmMatKhau,
            'nvmTrangThai'=> 0,
        ]);
        DB::table('nvm_quan_tri')->insert([
           
            'nvmTaiKhoan'=>"MinhNguyen372005",
            'nvmMatKhau'=> $nvmMatKhau,
            'nvmTrangThai'=> 0,
        ]);
    }
}

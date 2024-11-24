create database K23CNTT4_NguyenVanMinh_project1_SQL
create table Quan_Tri(
Tai_Khoan nvarchar(50) primary key,
Mat_Khau nvarchar (32),
Trang_Thai tinyint
)
create table Khach_Hang(
MaKH int primary key,
Ho_Ten nvarchar(100),
Tai_Khoan nvarchar (50) Unique,
Mat_Khau nvarchar (32),
Dia_Chi nvarchar(200),
Dien_Thoai nvarchar (30),
Email nvarchar (50),
Ngay_Sinh datetime ,
Ngay_Cap_Nhat  datetime  ,
Gioi_Tinh tinyint,
Tich_Diem int Default 0,
Trang_Thai tinyint 


)
create table Nhan_Hieu(
MaNH int primary key,
Ten_Nhan_Hieu nvarchar (50),
Trang_Thai tinyint 
)
create table Loai_San_Pham(
MaLSP int primary key,
Ten_LSP nvarchar (50),
Trang_Thai tinyint ,

)
create table San_Pham(
MaSP int primary key,
TenSP nvarchar (200),
Mo_Ta nvarchar (250),
Thong_Tin text,
Gia_Nhap float default 0,
Gia float default 0,
Gia_Khi_Sale float default 0,
Ngay_Cap_Nhat datetime ,
Luot_Xem int,
Trang_Thai tinyint ,
MaLSP int ,
MaNH int ,
foreign key (MaLSP)references Loai_San_Pham(MaLSP),
foreign key (MaNH)references Nhan_Hieu(MaNh)

)
create table PT_Van_Chuyen(
MaPTVC int primary key,
TenPTVC nvarchar (50),
Do_Dai int,
Don_Gia float default 0,
Trang_Thai tinyint,

)
create table PT_Thanh_Toan(
MaPTTT int primary key,
TenPTTT nvarchar (50),
Trang_Thai tinyint 
)
create table Hoa_Don(
MaHD int primary key,
Ngay_HD datetime ,
Hoten_nguoinhan nvarchar (100),
Diachi_nguoinhan nvarchar(200),
Dienthoai_nguoinhan nvarchar(30),
Diachi_email nvarchar(50),
Ngay_giao_hang datetime,
Trang_Thai tinyint,
MaKH int ,
MaPTVC int,
MaPTTT int ,
foreign key (MaKH)references Khach_Hang(MaKH),
foreign key (MaPTVC)references PT_Van_Chuyen(MaPTVC),
foreign key (MaPTVC) references PT_Thanh_Toan(MaPTTT)
)
 create table Mau_Sac(
 MaMS int primary key,
 Ten_MS nvarchar (50),
 Trang_Thai Tinyint 
 )
 create table Kich_Co(
 MaKC int primary key,
 Ten_KC nvarchar(50),
 Trang_Thai Tinyint
 )
 create table Hinh_Anh(
 MaHA int primary key,
 Ten_file_anh nvarchar(50),
 Trang_Thai Tinyint,
 MaSP int ,
 foreign key (MaSp)references San_Pham(MaSP)
 )
 create table San_Pham_CT(
 MaSPCT int primary key ,
 So_luong int default 0 ,
 MaMS int ,
 MaKC int ,
 MaSP int ,
foreign key (MaSp)references San_Pham(MaSP),
foreign key (MaKC)references Kich_Co(MaKC),
foreign key (MaMS)references Mau_Sac(MaMS)
)create database K23CNTT4_NguyenVanMinh_project1_SQL
create table Quan_Tri(
Tai_Khoan nvarchar(50) primary key,
Mat_Khau nvarchar (32),
Trang_Thai tinyint
)
create table Khach_Hang(
MaKH int primary key,
Ho_Ten nvarchar(100),
Tai_Khoan nvarchar (50) Unique,
Mat_Khau nvarchar (32),
Dia_Chi nvarchar(200),
Dien_Thoai nvarchar (30),
Email nvarchar (50),
Ngay_Sinh datetime ,
Ngay_Cap_Nhat  datetime  ,
Gioi_Tinh tinyint,
Tich_Diem int Default 0,
Trang_Thai tinyint 


)
create table Nhan_Hieu(
MaNH int primary key,
Ten_Nhan_Hieu nvarchar (50),
Trang_Thai tinyint 
)
create table Loai_San_Pham(
MaLSP int primary key,
Ten_LSP nvarchar (50),
Trang_Thai tinyint ,

)
create table San_Pham(
MaSP int primary key,
TenSP nvarchar (200),
Mo_Ta nvarchar (250),
Thong_Tin text,
Gia_Nhap float default 0,
Gia float default 0,
Gia_Khi_Sale float default 0,
Ngay_Cap_Nhat datetime ,
Luot_Xem int,
Trang_Thai tinyint ,
MaLSP int ,
MaNH int ,
foreign key (MaLSP)references Loai_San_Pham(MaLSP),
foreign key (MaNH)references Nhan_Hieu(MaNh)

)
create table PT_Van_Chuyen(
MaPTVC int primary key,
TenPTVC nvarchar (50),
Do_Dai int,
Don_Gia float default 0,
Trang_Thai tinyint,

)
create table PT_Thanh_Toan(
MaPTTT int primary key,
TenPTTT nvarchar (50),
Trang_Thai tinyint 
)
create table Hoa_Don(
MaHD int primary key,
Ngay_HD datetime ,
Hoten_nguoinhan nvarchar (100),
Diachi_nguoinhan nvarchar(200),
Dienthoai_nguoinhan nvarchar(30),
Diachi_email nvarchar(50),
Ngay_giao_hang datetime,
Trang_Thai tinyint,
MaKH int ,
MaPTVC int,
MaPTTT int ,
foreign key (MaKH)references Khach_Hang(MaKH),
foreign key (MaPTVC)references PT_Van_Chuyen(MaPTVC),
foreign key (MaPTVC) references PT_Thanh_Toan(MaPTTT)
)
 create table Mau_Sac(
 MaMS int primary key,
 Ten_MS nvarchar (50),
 Trang_Thai Tinyint 
 )
 create table Kich_Co(
 MaKC int primary key,
 Ten_KC nvarchar(50),
 Trang_Thai Tinyint
 )
 create table Hinh_Anh(
 MaHA int primary key,
 Ten_file_anh nvarchar(50),
 Trang_Thai Tinyint,
 MaSP int ,
 foreign key (MaSp)references San_Pham(MaSP)
 )
 create table San_Pham_CT(
 MaSPCT int primary key ,
 So_luong int default 0 ,
 MaMS int ,
 MaKC int ,
 MaSP int ,
foreign key (MaSp)references San_Pham(MaSP),
foreign key (MaKC)references Kich_Co(MaKC),
foreign key (MaMS)references Mau_Sac(MaMS)
)
create table CT_Hoa_Don (
MaHD int ,
MaSPCT int ,
So_luong_ban int default 0 ,
Gia_ban float default 0 ,
Tra_Lai int default 0
foreign key (MaHD)references Hoa_Don(MaHD),
foreign key (MaSPCT)references San_Pham_CT(MaSPCT),
)
create table Binh_Luan (
MaBL int primary key,
MaKH int ,
MaSP int ,
Tieu_De nvarchar (100),
Noi_Dung text ,
Ngay_BL datetime default 'current' ,
Trang_Thai tinyint ,
foreign key (MaKH)references Khach_Hang(MaKH),
foreign key (MaSP)references San_Pham(MaSP),
)
create table Tin_Tuc(
MaTT int primary key,
Tieu_De nvarchar(200),
Mo_Ta nvarchar(250),
Noi_Dung text ,
Loai_Tin nvarchar(100),
Ngay_Dang_Tin datetime ,
Ngay_Cap_Nhat datetime ,
Hinh_anh nvarchar (50),
Tang_Thai tinyint 
)
create table Lien_He(
MaLH int primary key,
Tieu_De nvarchar(200),
Dia_Chi nvarchar (250),
Dien_Thoai nvarchar(250),
Email nvarchar (100),
Facebook nvarchar(100),
Trang_Thai tinyint
)
create table Phan_Hoi(
MaPH int primary key,
Tieu_De nvarchar (200),
Noi_Dung text,
Ngay_Gui datetime ,
Email nvarchar (100),
Facebook nvarchar(100),
Tra_Loi text ,
Trang_Thai Tinyint,
Da_Xem tinyint

)
create table Flash_sale(
MaSp int,
MaNH int ,
TenSP nvarchar(100),
Khung_Gio datetime,
Mo_Ta nvarchar (200),
Gia_Goc float default 0,
Gia_sale float default 0,
Luot_Xem int default 0 ,
Trang_Thai tinyint 
foreign key (MaSP)references San_Pham(MaSP),
foreign key (MaNH)references Nhan_Hieu(MaNH),

)
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class them_sinh_vien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sinhvien=[
            ['ho_sv'=>'Nguyễn thị','ten_sv'=>'Hải','phai'=>'Nữ','ngay_sinh'=>'1979-10-04','noi_sinh'=>'sài gòn',
            'dia_chi'=>'123 Võ VĂn Tần','ma_lop'=>1,'hoc_bong'=>1000000,'hinh'=>'hinh'],
            ['ho_sv'=>'Trần Văn ','ten_sv'=>'Chính','phai'=>'Nam','ngay_sinh'=>'1980-12-24','noi_sinh'=>'Sài gòn',
            'dia_chi'=>'3 Nguyễn Bỉnh Khiêm Q1','ma_lop'=>2,'hoc_bong'=>1200000,'hinh'=>'hinh'],

            ['ho_sv'=>'Lê Thị Bạch','ten_sv'=>'Yến','phai'=>'Nữ','ngay_sinh'=>'1977-02-21','noi_sinh'=>'Hà Nội',
            'dia_chi'=>' 75 Parter Q3','ma_lop'=>1,'hoc_bong'=>140000,'hinh'=>'hinh'],

            ['ho_sv'=>'Trần Thanh','ten_sv'=>'Mai','phai'=>'Nam','ngay_sinh'=>'1978-12-20','noi_sinh'=>'Bến Tre',
            'dia_chi'=>'56 hai Bà Trưng','ma_lop'=>2,'hoc_bong'=>0,'hinh'=>'hinh'],

            ['ho_sv'=>'trần Thị Thu','ten_sv'=>'Thủy','phai'=>'Nữ','ngay_sinh'=>'1981-02-13','noi_sinh'=>'Sài Gòn',
            'dia_chi'=>'43 An Lạc Vũng Tàu','ma_lop'=>2,'hoc_bong'=>0,'hinh'=>'hinh'],

            ['ho_sv'=>'Trần Anh','ten_sv'=>'Tuấn','phai'=>'Nam','ngay_sinh'=>'1978-01-12','noi_sinh'=>'Sài gòn',
            'dia_chi'=>'10 Nguyễn Du Q1','ma_lop'=>3,'hoc_bong'=>0,'hinh'=>'hinh'],

            ['ho_sv'=>'TRần Thanh ','ten_sv'=>'Triều','phai'=>'Nam','ngay_sinh'=>'1977-02-01','noi_sinh'=>'Long An',
            'dia_chi'=>'12 Điện Biên Phủ - Long An','ma_lop'=>3,'hoc_bong'=>800000,'hinh'=>'hinh'],

            ['ho_sv'=>'Nguyễn Văn','ten_sv'=>'Chính','phai'=>'Nam','ngay_sinh'=>'1977-01-01','noi_sinh'=>'Sài Gòn',
            'dia_chi'=>'5 Nguyễn Văn Cư Q5','ma_lop'=>4,'hoc_bong'=>120000,'hinh'=>'hinh'],

            ['ho_sv'=>'Lê Thị','ten_sv'=>'Kim','phai'=>'Nam','ngay_sinh'=>'1981-12-20','noi_sinh'=>'Sài Gòn',
            'dia_chi'=>'12 Nguyên Thiệp Q4','ma_lop'=>4,'hoc_bong'=>120000,'hinh'=>'hinh'],
        ];
        try{
            foreach($sinhvien as $sv){
                DB::table('sinh_vien')->insert($sv);
            }
        }catch(\Throwable $kh)
        {
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class them_lop_hoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lophoc = [
            ['ten_lop'=>'Cao đẳng tin học A','ma_khoa'=>1,'gvcn'=>'Nguyễn Hoài Nam','siso'=>100,'hoc_phi'=>800000],
            ['ten_lop'=>'Cao Đẳng Tin Học A','ma_khoa'=>1,'gvcn'=>'Nguyễn Thị Bích Nga','siso'=>80,'hoc_phi'=>800000],
            ['ten_lop'=>'Cao Dẳng Cơ Khi A','ma_khoa'=>4,'gvcn'=>'Hồ Văn Chung','siso'=>120,'hoc_phi'=>950000],
            ['ten_lop'=>'Cao Đẳng Cơ Khí B','ma_khoa'=>4,'gvcn'=>'Nguyễn Quốc Thắng','siso'=>100,'hoc_phi'=>900000],
        ];
        try{
            foreach($lophoc as $lh){
                DB::table('lop_hoc')->insert($lh);
            }
        }catch(\Throwable $lh)
        {
        }
    }
}

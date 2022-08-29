<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class them_khoa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themkhoa=[
            ['ten_khoa'=>'Công nghệ thông tin'],
            ['ten_khoa'=>'Đại cương'],
            ['ten_khoa'=>'Quan hệ hợp tác quốc tế'],
            ['ten_khoa'=>'Có khí'],
        ];
        try{
            foreach($themkhoa as $kh){
                DB::table('khoa')->insert($kh);
            }
        }catch(\Throwable $kh)
        {
        }
    }
}

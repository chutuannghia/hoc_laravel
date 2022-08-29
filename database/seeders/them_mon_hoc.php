<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class them_mon_hoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monhoc = [
            ['ten_mh'=> "Trí tuệ nhân tạo",'so_tin_chi'=>"4" ],
            ['ten_mh'=> "truyền tin",'so_tin_chi'=>"4" ],
            ['ten_mh'=> "Đồ hạo",'so_tin_chi'=>"8" ],
            ['ten_mh'=> "Văn Phạm",'so_tin_chi'=>"7" ],
            ['ten_mh'=> "Đàm thoại",'so_tin_chi'=>"5" ],
            ['ten_mh'=> "Vật lý nguyên tử",'so_tin_chi'=>"4" ],
            ['ten_mh'=> "Vật lý đại cương",'so_tin_chi'=>"4" ],
            ['ten_mh'=> "Triết học",'so_tin_chi'=>"6" ],
            ['ten_mh'=> "Toán đại cương",'so_tin_chi'=>"4" ]
        ];
        try{
            foreach($monhoc as $mh){
                DB::table('mon_hoc')->insert($mh);
            }
        }
        catch(\Throwable $lh)
        {}
    }
}

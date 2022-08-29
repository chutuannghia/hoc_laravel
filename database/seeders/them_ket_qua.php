<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class them_ket_qua extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ketqua = [
            ['ma_sv'=>1,'ma_mh'=>1,'lan_thi'=>1,'diem_thi'=>2.0],
            ['ma_sv'=>2,'ma_mh'=>1,'lan_thi'=>1,'diem_thi'=>2.7],
            ['ma_sv'=>3,'ma_mh'=>1,'lan_thi'=>1,'diem_thi'=>5.0],
            ['ma_sv'=>4,'ma_mh'=>1,'lan_thi'=>1,'diem_thi'=>7.0],
            ['ma_sv'=>5,'ma_mh'=>1,'lan_thi'=>1,'diem_thi'=>6.0],
            ['ma_sv'=>1,'ma_mh'=>2,'lan_thi'=>1,'diem_thi'=>4.0],
            ['ma_sv'=>2,'ma_mh'=>2,'lan_thi'=>1,'diem_thi'=>6.0],
            ['ma_sv'=>3,'ma_mh'=>2,'lan_thi'=>1,'diem_thi'=>7.0],
            ['ma_sv'=>4,'ma_mh'=>2,'lan_thi'=>1,'diem_thi'=>5.5],
            ['ma_sv'=>5,'ma_mh'=>2,'lan_thi'=>1,'diem_thi'=>6.5],
            ['ma_sv'=>1,'ma_mh'=>3,'lan_thi'=>1,'diem_thi'=>7.5],
            ['ma_sv'=>2,'ma_mh'=>3,'lan_thi'=>1,'diem_thi'=>9.0],
            ['ma_sv'=>3,'ma_mh'=>3,'lan_thi'=>1,'diem_thi'=>10.0],
            ['ma_sv'=>4,'ma_mh'=>3,'lan_thi'=>1,'diem_thi'=>3.0],
            ['ma_sv'=>5,'ma_mh'=>3,'lan_thi'=>1,'diem_thi'=>6.0],
            ['ma_sv'=>1,'ma_mh'=>4,'lan_thi'=>1,'diem_thi'=>8.0],
            ['ma_sv'=>2,'ma_mh'=>4,'lan_thi'=>1,'diem_thi'=>3.5],
            ['ma_sv'=>3,'ma_mh'=>4,'lan_thi'=>1,'diem_thi'=>5.0],
            ['ma_sv'=>4,'ma_mh'=>4,'lan_thi'=>1,'diem_thi'=>8.0],
            ['ma_sv'=>5,'ma_mh'=>4,'lan_thi'=>1,'diem_thi'=>6.0],
            ['ma_sv'=>6,'ma_mh'=>5,'lan_thi'=>1,'diem_thi'=>7.5],
            ['ma_sv'=>7,'ma_mh'=>5,'lan_thi'=>1,'diem_thi'=>9.0],
            ['ma_sv'=>8,'ma_mh'=>5,'lan_thi'=>1,'diem_thi'=>4.5],
            ['ma_sv'=>9,'ma_mh'=>5,'lan_thi'=>1,'diem_thi'=>4.0],
            ['ma_sv'=>10,'ma_mh'=>5,'lan_thi'=>1,'diem_thi'=>8.0],
            ['ma_sv'=>6,'ma_mh'=>6,'lan_thi'=>1,'diem_thi'=>6.5],
            ['ma_sv'=>7,'ma_mh'=>6,'lan_thi'=>1,'diem_thi'=>4.0],
            ['ma_sv'=>8,'ma_mh'=>6,'lan_thi'=>1,'diem_thi'=>3.0],
            ['ma_sv'=>9,'ma_mh'=>6,'lan_thi'=>1,'diem_thi'=>4.0],
            ['ma_sv'=>10,'ma_mh'=>6,'lan_thi'=>1,'diem_thi'=>4.5],
            ['ma_sv'=>6,'ma_mh'=>7,'lan_thi'=>1,'diem_thi'=>5.0],
            ['ma_sv'=>7,'ma_mh'=>7,'lan_thi'=>1,'diem_thi'=>6.5],
            ['ma_sv'=>8,'ma_mh'=>7,'lan_thi'=>1,'diem_thi'=>7.0],
            ['ma_sv'=>9,'ma_mh'=>7,'lan_thi'=>1,'diem_thi'=>5.5],
            ['ma_sv'=>10,'ma_mh'=>7,'lan_thi'=>1,'diem_thi'=>4.0],
            ['ma_sv'=>6,'ma_mh'=>8,'lan_thi'=>1,'diem_thi'=>5.0],
            ['ma_sv'=>7,'ma_mh'=>8,'lan_thi'=>1,'diem_thi'=>4.0],
            ['ma_sv'=>8,'ma_mh'=>8,'lan_thi'=>1,'diem_thi'=>6.5],
            ['ma_sv'=>9,'ma_mh'=>8,'lan_thi'=>1,'diem_thi'=>7.0],
            ['ma_sv'=>10,'ma_mh'=>8,'lan_thi'=>1,'diem_thi'=>8.5],
            ['ma_sv'=>6,'ma_mh'=>9,'lan_thi'=>1,'diem_thi'=>5.0],
            ['ma_sv'=>7,'ma_mh'=>9,'lan_thi'=>1,'diem_thi'=>5.5],
            ['ma_sv'=>8,'ma_mh'=>9,'lan_thi'=>1,'diem_thi'=>5.0],
            ['ma_sv'=>9,'ma_mh'=>9,'lan_thi'=>1,'diem_thi'=>6.5],
            ['ma_sv'=>10,'ma_mh'=>9,'lan_thi'=>1,'diem_thi'=>10],
        ];
        foreach($ketqua as $kq){
            DB::table('ket_qua')->insert($kq);
        }
        try{

        }catch(\Throwable $kq)
        {
        }
    }
}

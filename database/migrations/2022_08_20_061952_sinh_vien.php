<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('sinh_vien')){
            Schema::create('sinh_vien',function(Blueprint $table){
                $table->increments('ma_sv');
                $table->string('ho_sv',30);
                $table->string('ten_sv',10);
                $table->string('phai',3);
                $table->date('ngay_sinh');
                $table->string('noi_sinh',50);
                $table->string('dia_chi',50);
                $table->integer('ma_lop');
                $table->integer('hoc_bong');
                $table->string('hinh',20);

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::DropIfExists('sinh_vien');
    }
};

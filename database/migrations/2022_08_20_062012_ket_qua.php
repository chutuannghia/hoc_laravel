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
        if(!Schema::hasTable('ket_qua')){
            Schema::create('ket_qua',function(Blueprint $table){
                $table->increments('id');
                $table->integer('ma_sv');
                $table->integer('ma_mh');
                $table->integer('lan_thi');
                $table->float('diem_thi',8,2);
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
        Schema::DropIfExists('ket_qua');
    }
};

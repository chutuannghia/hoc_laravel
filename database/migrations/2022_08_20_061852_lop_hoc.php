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
        if(!Schema::hasTable('lop_hoc')){
            Schema::create('lop_hoc',function(Blueprint $table){
                $table->increments('ma_lop');
                $table->string('ten_lop',30);
                $table->integer('ma_khoa');
                $table->string('gvcn',40);
                $table->integer('siso');
                $table->integer('hoc_phi');
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
        Schema::DropIfExists('lop_hoc');
    }
};

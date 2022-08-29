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
        if(! Schema::hasTable('mon_hoc')){
            Schema::create('mon_hoc',function(Blueprint $table){
                $table->increments('ma_mh');
                $table->string('ten_mh',50);
                $table->integer('so_tin_chi');
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
        Schema::DropIfExists('mon_hoc');
    }
};

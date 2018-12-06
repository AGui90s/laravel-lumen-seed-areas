<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->unsignedInteger('parent_id')->comment('地区父节点');
            $table->char('area_code', 6)->comment('地区编码');
            $table->string('area_name', 20)->comment('地区名称');
            $table->tinyInteger('area_level')->default(0)->comment('地区级别，1省（地级市），2市，3区（县）');
            $table->char('area_tel_code', 6)->comment('区号');
            $table->char('area_lng', 10)->comment('经度');
            $table->char('area_lat', 10)->comment('纬度');

            $table->softDeletes();
            $table->timestamps();

            $table->unique('area_code');

            $table->comment = '中国省市区三级表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}

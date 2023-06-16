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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('celebrity',30);//出演者
            $table->string('date',10);//放送日
            $table->string('place',50);//〇〇県〇〇市
            $table->string('overview',1000)->nullable();//ロケ概要
            $table->string('key_phrase',100)->nullable();//ロケ中で最も面白い言葉
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};

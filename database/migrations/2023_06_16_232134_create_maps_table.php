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
        Schema::create('maps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id');
            $table->string('store_name',50);//店の名前
            $table->string('adress',100);//店の住所
            $table->string('gormet',50)->nullable();//出演者が食べたもの
            $table->string('key_word',100)->nullable();//locationsマイグレーションファイルのloca_phrase
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
        Schema::dropIfExists('maps');
    }
};

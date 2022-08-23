<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sneakers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("colorway");
            $table->string("brand");
            $table->string("description");
            $table->string("releasedate");
            $table->float("retailprice");
            $table->float("price");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sneakers');
    }
};

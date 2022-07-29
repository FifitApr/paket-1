<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormpemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formpemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('namapemesan');
            $table->string('email');
            $table->bigInteger('notelp');
            $table->string('namatamu');
            $table->enum('tipekamar', ['Superior','Deluxe','Presidential Suite']);
            $table->string('tglcekin');
            $table->string('tglcekout');
            $table->string('jmlkamar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formpemesanans');
    }
}

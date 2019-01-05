<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKalbarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalbar', function (Blueprint $table) {
            $table->string('tahun');
            $table->integer('budidayalaut');
            $table->integer('tambak');
            $table->integer('kolam');
            $table->integer('keramba');
            $table->integer('jaringapung');
            $table->integer('sawah');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kalbar');
    }
}

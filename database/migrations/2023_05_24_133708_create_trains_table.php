<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('stazione_di_partenza');
            $table->string('Stazione_di_arrivo');
            $table->date('giorno_partenza');
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->integer('codice_treno');
            $table->tinyInteger('Numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');

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
        Schema::dropIfExists('trains');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->text('titre');
            $table->longText('descriptionp')->nullable();
            $table->double('montant');
            $table->text('photo');
            $table->text('lieu');
            $table->double('latitude');
            $table->double('longitude');
            $table->unsignedBigInteger('porteur_id');
            $table->foreign('porteur_id')
            ->references('id')
            ->on('porteurs');
            $table->string('etat');
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
        Schema::dropIfExists('projets');
    }
}

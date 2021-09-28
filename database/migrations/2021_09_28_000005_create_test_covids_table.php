<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestCovidsTable extends Migration
{
    public function up()
    {
        Schema::create('test_covids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_rendez_vous');
            $table->date('date_voyage');
            $table->string('nom');
            $table->string('prenoms')->nullable();
            $table->string('statut');
            $table->integer('telephone');
            $table->string('sexe')->nullable();
            $table->date('date_naissance');
            $table->string('email')->nullable();
            $table->string('adresse')->nullable();
            $table->time('heure_rendez_vous');
            $table->string('destination');
            $table->time('heure_voyage')->nullable();
            $table->longText('message')->nullable();
            $table->string('nom_complet')->nullable();
            $table->string('resultat')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

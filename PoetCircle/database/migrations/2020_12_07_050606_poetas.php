<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Poetas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('poetas')){
            Schema::table('poetas', function (Blueprint $table) {
                if (!Schema::hasColumn('idPoeta'))
                    $table->increments('idPoeta');
                if (!Schema::hasColumn('Nombre'))
                    $table->string('Nombre');
                if (!Schema::hasColumn('Apellido'))
                    $table->string('Apellido');
                if (!Schema::hasColumn('Direccion'))
                    $table->string('Direccion');
                if (!Schema::hasColumn('CodigoPostal'))
                    $table->string('CodigoPostal');
                if (!Schema::hasColumn('Telefono'))
                    $table->string('Telefono');
                if (!Schema::hasColumn('created_at'))
                    $table->timestamps();
            });
        }else{
            Schema::create('poetas', function (Blueprint $table) {
                $table->increments('idPoeta');
                $table->string('Nombre');
                $table->string('Apellido');
                $table->string('Direccion');
                $table->string('CodigoPostal');
                $table->string('Telefono');
                $table->timestamps();
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
        Schema::table('poetas', function (Blueprint $table) {
            Schema::dropIfExists('poetas');
        });
    }
}

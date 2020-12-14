<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('clientes')){
            Schema::table('clientes', function (Blueprint $table) {
                if (!Schema::hasColumn('idCliente'))
                    $table->increments('idCliente');
                if (!Schema::hasColumn('Nombre'))
                    $table->string('Nombre', 30);
                if (!Schema::hasColumn('Apellido'))
                    $table->string('Apellido', 40);
                if (!Schema::hasColumn('Direccion'))
                    $table->string('Direcion', 100);
                if (!Schema::hasColumn('CodigoPostal'))
                    $table->string('CodigoPostal', 10);
                if (!Schema::hasColumn('Telefono'))
                    $table->string('Telefono', 15);
                if (!Schema::hasColumn('created_at'))
                    $table->timestamps();
            });
        }else{
            Schema::create('clientes', function (Blueprint $table) {
                $table->increments('idCliente');
                $table->string('Nombre', 30);
                $table->string('Apellido', 40);
                $table->string('Direccion', 100);
                $table->string('CodigoPostal', 10);
                $table->string('Telefono', 15);
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
        Schema::table('clientes', function (Blueprint $table) {
            Schema::dropIfExists('clientes');
        });
    }
}

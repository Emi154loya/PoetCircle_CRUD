<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('ventas')){
            Schema::table('ventas', function (Blueprint $table) {
                if (!Schema::hasColumn('idVenta'))
                    $table->increments('idVenta');
                if (!Schema::hasColumn('Fecha'))
                    $table->date('Fecha');
                if (!Schema::hasColumn('Monto'))
                    $table->integer('Monto');
                if (!Schema::hasColumn('idCliente'))
                    $table->integer('idCliente');
                if (!Schema::hasColumn('created_at'))
                    $table->timestamps();
            });
        }else {
            Schema::create('ventas', function (Blueprint $table) {
                $table->increments('idVenta');
                $table->date('Fecha');
                $table->integer('Monto');
                $table->integer('idCliente');
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
        Schema::table('ventas', function (Blueprint $table) {
            Schema::dropIfExists('ventas');
        });
    }
}

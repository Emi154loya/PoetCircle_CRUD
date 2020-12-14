<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventaspublicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('ventaspublicaciones')){
            Schema::table('ventaspublicaciones', function (Blueprint $table) {
                if (!Schema::hasColumn('idVenta'))
                    $table->integer('idVenta');
                if (!Schema::hasColumn('idPublicacion'))
                    $table->integer('idPublicacion');
                if (!Schema::hasColumn('created_at'))
                    $table->timestamps();
            });
        }else{
            Schema::create('ventaspublicaciones', function (Blueprint $table) {
                $table->integer('idVenta');
                $table->integer('idPublicacion');
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
        Schema::table('ventaspublicaciones', function (Blueprint $table) {
            Schema::dropIfExists('ventaspublicaciones');
        });
    }
}

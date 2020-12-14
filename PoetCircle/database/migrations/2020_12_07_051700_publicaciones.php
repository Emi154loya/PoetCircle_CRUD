<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('publicaciones')){
            Schema::table('publicaciones', function (Blueprint $table) {
                if (!Schema::hasColumn('idPublicaciones'))
                    $table->increments('idPublicaciones');
                if (!Schema::hasColumn('Titulo'))
                    $table->string('Titulo');
                if (!Schema::hasColumn('Precio'))
                    $table->string('Precio');
                if (!Schema::hasColumn('created_at'))
                    $table->timestamps();
            });
        }else {
            Schema::create('publicaciones', function (Blueprint $table) {
                $table->increments('idPublicaciones');
                $table->string('Titulo');
                $table->string('Precio');
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
        Schema::table('publicaciones', function (Blueprint $table) {
            Schema::dropIfExists('publicaciones');
        });
    }
}

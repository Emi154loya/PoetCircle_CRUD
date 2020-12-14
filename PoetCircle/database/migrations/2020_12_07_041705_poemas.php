<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Poemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('poemas')){
            Schema::table('poemas', function (Blueprint $table) {
                if (!Schema::hasColumn('idPoema'))
                    $table->increments('idPoema');
                if (!Schema::hasColumn('Titulo'))
                    $table->string('Titulo', 50);
                if (!Schema::hasColumn('Contenido'))
                    $table->text('Contenido');
                if (!Schema::hasColumn('idPoeta'))
                    $table->integer('idPoeta');
                if (!Schema::hasColumn('created_at'))
                    $table->timestamps();
            });
        }else{
            Schema::create('poemas', function (Blueprint $table) {
                $table->increments('idPoema');
                $table->string('Titulo', 50);
                $table->text('Contenido');
                $table->integer('idPoeta');
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
        Schema::table('poemas', function (Blueprint $table) {
            Schema::dropIfExists('poemas');
        });
    }
}

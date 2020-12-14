<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PoemasPublicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            if (Schema::hasTable('poemasPublicaciones')){
                Schema::table('poemasPublicaciones', function (Blueprint $table) {
                    if (!Schema::hasColumn('idPoema'))
                        $table->integer('idPoema');
                    if (!Schema::hasColumn('idPublicacion'))
                        $table->integer('idPublicacion');
                    if (!Schema::hasColumn('created_at'))
                        $table->timestamps();
                });
            }else{
                Schema::create('poemasPublicaciones', function (Blueprint $table) {
                    $table->integer('idPoema');
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
        Schema::table('poemasPublicaciones', function (Blueprint $table) {
            Schema::dropIfExists('poemasPublicaciones');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('elements');
            $table->string('style_combat');
            $table->integer('force');
            $table->integer('vitesse');
            $table->integer('perception_vitesse');
            $table->integer('instinct');
            $table->integer('lvl_clan');
            $table->integer('lvl_art_ninja');
            $table->integer('lvl_combat');
            $table->text('histoire');
            $table->text('description_physique');
            $table->unsignedBigInteger('user_id')->index();
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
    Schema::dropIfExists('profiles');
}
}

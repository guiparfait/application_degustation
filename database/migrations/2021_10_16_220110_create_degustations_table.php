<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDegustationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degustations', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('arome');
            $table->string('saveur');
            $table->string('apparence');
            $table->text('impression_generale');
            $table->string('sensation');
            $table->integer('note_arome');
            $table->integer('note_saveur');
            $table->integer('note_apparence');
            $table->integer('note_sensation');
            $table->integer('note_impression_generale');
            $table->string('photo');
            $table->string('acetaldehyde', 1)->default('0');
            $table->string('alcoholic', 1)->default('0');
            $table->string('astringent', 1)->default('0');
            $table->string('diacetyl', 1)->default('0');
            $table->string('dms', 1)->default('0');
            $table->string('estery', 1)->default('0');
            $table->string('grassy', 1)->default('0');
            $table->string('light_Struck', 1)->default('0');
            $table->string('metallic', 1)->default('0');
            $table->string('musty', 1)->default('0');
            $table->string('oxidized', 1)->default('0');
            $table->string('phenolic', 1)->default('0');
            $table->string('solvent', 1)->default('0');
            $table->string('sour_acidic', 1)->default('0');
            $table->string('sulfur', 1)->default('0');
            $table->string('vegetal', 1)->default('0');
            $table->string('yeasty', 1)->default('0');
            $table->integer('stylistic_accuracy')->default('0');
            $table->integer('technical_merit')->default('0');
            $table->integer('intangibles')->default('0');
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
        Schema::dropIfExists('degustations');
    }
}

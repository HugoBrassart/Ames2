<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ames', function (Blueprint $table) {
            $table->id();
            $table->boolean('sexe');
            $table->string('nom');
            $table->integer('prix');
            $table->string('couleur');
            $table->date('date_de_naissance');
            $table->string('image_path')->nullable();
            $table->foreignId('user_id')->constrained();

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
        Schema::dropIfExists('ames');
    }
}

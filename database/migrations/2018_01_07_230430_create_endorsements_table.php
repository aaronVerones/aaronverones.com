<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndorsementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endorsements', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['group', 'individual']);
            $table->string('individual_name')->nullable();
            $table->string('group_name')->nullable();
            $table->string('position')->nullable();
            $table->unsignedInteger('number_of_members')->nullable();
            $table->text('message')->nullable();
            $table->string('logo', 255)->nullable();
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
        Schema::dropIfExists('endorsements');
    }
}

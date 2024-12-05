<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouses', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->nullable(); // Email or Phone Number
            $table->string('best_way_to_contact')->nullable(); // Email or Phone Number
            $table->string('email')->nullable(); // Email
            $table->string('phone_number')->nullable(); // Phone Number
            $table->string('street_name')->nullable(); // Street name
            $table->string('apt')->nullable(); // Apartment number
            $table->string('city')->nullable(); // City
            $table->string('state')->nullable(); // State
            $table->string('zip')->nullable(); // Zip Code
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
        Schema::dropIfExists('spouses');
    }
}

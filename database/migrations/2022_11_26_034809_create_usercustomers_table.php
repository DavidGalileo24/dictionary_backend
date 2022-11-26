<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('usercustomers')) {
            Schema::create('usercustomers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('last_name');
                $table->string('email')->unique();
                $table->string('phone')->nullable();
                $table->date('date_of_birth');
                $table->enum('gender', ['Male', 'Female']);
                $table->foreignId('country_id')->constrained();
                $table->foreignId('state_id')->constrained();
                $table->foreignId('company_id')->constrained();
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
        Schema::dropIfExists('usercustomers');
    }
};

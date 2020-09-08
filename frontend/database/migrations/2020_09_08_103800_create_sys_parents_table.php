<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_parents', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->string('relationship');
            $table->text('address');
            $table->string('phone_number');
            $table->string('occupation')->nullable();
            $table->string('ktp_number')->nullable();
            $table->string('ktp_file')->nullable();
            $table->string('kk_number')->nullable();
            $table->string('kk_file')->nullable();
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
        Schema::dropIfExists('sys_parents');
    }
}

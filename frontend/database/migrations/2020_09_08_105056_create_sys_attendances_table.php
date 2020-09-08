<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_attendances', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->timestamp('check_in')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->timestamp('check_out')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->string('location');
            $table->string('ip_address');
            $table->string('latitude');
            $table->string('longitude');
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
        Schema::dropIfExists('sys_attendances');
    }
}

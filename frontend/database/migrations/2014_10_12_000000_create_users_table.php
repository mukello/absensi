<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->unique()->nullable();
            $table->string('nis')->unique();
            $table->string('nisn')->unique()->nullable();
            $table->string('nip')->unique()->nullable();

            $table->string('name');
            $table->string('gender', 20)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('religion')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('phone_number')->unique();
            $table->text('address')->nullable();
            $table->string('photo')->nullable();
            $table->string('flag')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->integer('created_by')->default(0)->nullable();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->integer('updated_by')->default(0)->nullable();
            $table->timestamp('deleted_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->integer('deleted_by')->default(0)->nullable();
            $table->char('is_deleted', 1)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

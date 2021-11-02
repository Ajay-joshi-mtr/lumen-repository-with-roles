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
            $table->string('uid', 255)->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('alt_mobile')->nullable();
            $table->string('designation')->nullable();
            $table->string('address')->nullable();
            $table->string('profile_image')->nullable();

            $table->unsignedTinyInteger('percentage')->nullable();// for refrence percentage variable
            $table->enum('type', ['Saleried', 'Percentage'])->default('Saleried');             
            $table->unsignedTinyInteger('ref_per')->nullable();// for refrence percentage variable
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');            
            $table->json('settings')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->enum('status', ['Active', 'Inactive', 'Suspend'])->default('Inactive');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}

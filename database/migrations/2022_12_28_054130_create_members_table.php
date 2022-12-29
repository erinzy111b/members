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
        Schema::create('members', function (Blueprint $table) {
            $table->id('m_id');
            $table->string('m_name', 20);
            $table->string('m_username', 20)->unique();
            $table->string('m_passwd', 100);
            $table->enum('m_sex', ['男', '女', '其他']);
            $table->date('m_birthday')->nullable();
            $table->enum('m_level', ['admin', 'member']);
            $table->string('m_email', 100)->nullable();
            $table->string('m_url', 100)->nullable();
            $table->string('m_phone', 100)->nullable();
            $table->string('m_address', 100)->nullable();
            $table->integer('m_login')->unsigned()->default(0);
            $table->dateTime('m_logintime')->nullable();
            $table->dateTime('m_jointime');
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
        Schema::dropIfExists('members');
    }
};
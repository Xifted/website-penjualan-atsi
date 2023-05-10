<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('admin_id')->autoIncrement();
            $table->string('username', 20)->unique();
            $table->string('password', 255);
            $table->string('email', 100);
            $table->string('name', 40);
            $table->date('birth');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->string('job_position');
            $table->date('hire_date');
            $table->text('address');
            $table->bigInteger('phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};

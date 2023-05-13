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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained('admins')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('client_id')->constrained('clients')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->longText('description');
            $table->enum('status' , ['Open' , 'End'])->default('Open');
            $table->date('deadline');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};

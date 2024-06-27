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
        Schema::create('rules', function (Blueprint $table) {
            
            //kita ganti variabel rule nya dari string ke text karena 
            $table->id();
            $table->foreignId('field_id');          
            $table->text('rule_in_field')->nullable();
            $table->text('rule_out_field')->nullable();
            $table->text('rule_rent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};

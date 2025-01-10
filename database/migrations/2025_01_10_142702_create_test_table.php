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
        Schema::create('nominations', function (Blueprint $table) {
            $table->id();
            $table->string('committee_type')->nullable();
            $table->string('election_name')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('nominee_symbol')->nullable();
            $table->string('district')->nullable();
            $table->string('constituency')->nullable();
            $table->date('dob')->nullable();
            $table->string('nid_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('nid_file')->nullable(); // For uploaded NID file
            $table->string('tin_file')->nullable(); // For uploaded TIN file
            $table->string('symbol_file')->nullable(); // For uploaded Symbol file
            $table->string('other_file')->nullable(); // For any other uploaded file
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominations');
    }
};

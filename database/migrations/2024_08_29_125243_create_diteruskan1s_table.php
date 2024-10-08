<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('diteruskan1s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // foreign key : 
            $table->foreignId('disposisi1_id')->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('user_id')->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diteruskan1s');
    }
};

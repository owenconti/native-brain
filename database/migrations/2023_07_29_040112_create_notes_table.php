<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('notes', function (Blueprint $table) {
        //     $table->id();
        //     $table->text('body');
        //     $table->timestamps();
        // });
        DB::statement('CREATE VIRTUAL TABLE notes USING fts4 (id, body, created_at, updated_at);');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};

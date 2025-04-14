<?php

use Filament\Forms\Components\Contracts\CanBeLengthConstrained;
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
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id('id_pendaftar');
            $table->string('nama');
            $table->string('email');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->foreignId('id_event')
                ->constrained('events', 'id_event')
                ->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};

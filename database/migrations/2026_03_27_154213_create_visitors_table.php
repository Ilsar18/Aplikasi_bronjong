<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visitors', function (Blueprint $col) {
            $col->id();
            $col->string('ip_address', 45); // Mendukung IPv4 dan IPv6
            $col->string('user_agent')->nullable(); // Menyimpan info browser/perangkat
            $col->date('visit_date'); // Untuk filter Today/Yesterday/Month
            $col->timestamp('last_seen'); // Untuk filter Online Users (realtime)
            $col->timestamps();

            // Indexing agar query statistik cepat meski data sudah ribuan
            $col->index(['visit_date', 'ip_address']);
            $col->index('last_seen');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
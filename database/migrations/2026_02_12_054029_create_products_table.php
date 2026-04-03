<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name'); // nama produk
            $table->string('slug')->unique(); // untuk URL
            $table->text('description')->nullable(); // deskripsi produk
            $table->text('specification')->nullable(); // spesifikasi teknis

            $table->string('image')->nullable(); // gambar utama
            $table->decimal('price', 15, 2)->nullable(); // opsional

            $table->boolean('is_active')->default(true); // tampil / tidak

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

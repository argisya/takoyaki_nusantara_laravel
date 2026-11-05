<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('id_sales');
            // Relasi Foreign Key ke tabel outlets
            $table->foreignId('id_outlet')->constrained('outlets', 'id_outlet')->onDelete('cascade');
            $table->string('invoice_number')->unique();
            $table->decimal('total_price', 12, 2);
            $table->integer('total_items');
            $table->dateTime('sale_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign(['id_outlet']);
        });
        
        Schema::dropIfExists('sales');
    }
};

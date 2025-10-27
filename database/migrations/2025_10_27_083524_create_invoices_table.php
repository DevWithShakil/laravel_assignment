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
       Schema::create('invoices', function (Blueprint $table) {
    $table->id();
    $table->string('total'); // According to diagram
    $table->string('discount'); // According to diagram
    $table->string('vat'); // According to diagram
    $table->string('payable'); // According to diagram
    $table->unsignedBigInteger('user_id');
    $table->unsignedBigInteger('customer_id');
    $table->timestamps();
    $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
    $table->foreign('customer_id')->references('id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

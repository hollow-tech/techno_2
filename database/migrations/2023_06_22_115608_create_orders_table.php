<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('orderId');
        $table->string('customerName');
        $table->string('product');
        $table->integer('quantity');
        $table->decimal('totalPrice', 8, 3);
        $table->unsignedBigInteger('cart_id');
        $table->foreign('cart_id')->references('id')->on('cart_items')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};

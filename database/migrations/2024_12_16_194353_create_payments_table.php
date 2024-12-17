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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id') 
                  ->references('id') 
                  ->on('users') 
                  ->onDelete('cascade') 
                  ->onUpdate('cascade'); 

            $table->unsignedBigInteger('subscription_id')->nullable(); 
            $table->foreign('subscription_id') 
                  ->references('id') 
                  ->on('subscriptions')   
                  ->onDelete('set null') 
                  ->onUpdate('set null'); 

            $table->unsignedBigInteger('currency_id')->nullable(); 

            $table->foreign('currency_id') 
                ->references('id') 
                ->on('currencies') 
                ->onDelete('set null') 
                ->onUpdate('cascade');

            $table->date('payment_date');
            $table->integer('amount');
            $table->string('status');
            $table->string('payment_method');
            $table->integer('card_number');
            $table->string('card_name');
            $table->string('card_expiration');
            $table->string('card_cvc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

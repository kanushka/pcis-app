<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_item_id');
            $table->foreignId('supplier_id');
            $table->foreignId('account_id');
            $table->enum('currency', ['LKR', 'USD'])->default('LKR');
            $table->float('amount', 11, 2);
            $table->enum('type', ['credit', 'debit'])->default('credit');
            $table->string('note')->nullable();
            $table->foreignId('paid_by');
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
        Schema::dropIfExists('transactions');
    }
}

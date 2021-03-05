<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakePositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->float('short_quantity')->nullable();
            $table->float('avarage_price')->nullable();
            $table->float('current_day_profit_loss')->nullable();
            $table->float('current_day_profit_loss_percentage')->nullable();
            $table->float('long_quantity')->nullable();
            $table->float('settled_long_quantity')->nullable();
            $table->float('aged_quantity')->nullable();
            $table->string('instrument')->nullable();
            $table->float('market_value')->nullable();
            $table->unsignedBigInteger('account_id');
            $table
            ->foreign('account_id')
            ->references('id')
            ->on('accounts')
            ->onDelete('cascade');
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
        Schema::dropIfExists('positions');
    }
}

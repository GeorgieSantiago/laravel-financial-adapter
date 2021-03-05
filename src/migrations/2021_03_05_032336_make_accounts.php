<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('ext_account_id');
            $table->string('account_name');
	        $table->string('account_type');
            $table->string('account_external_id');
	        $table->boolean('is_day_trader')->nullable()->default();
	        $table->boolean('is_closing_only_restricted')->nullable();
            $table->unsignedBigInteger('service_account_id');
            $table
            ->foreign('service_account_id')
            ->references('id')
            ->on('service_accounts')
            ->onDelete('cascade');
            $table->boolean('is_day_trader');
	        $table->float('accured_interest', 10, 2);
	        $table->float('buying_power', 10, 2);
	        $table->float('cash_balance', 10, 2);
	        $table->float('stock_buying_power', 10, 2);
	        $table->float('option_buying_power', 10, 2);
	        $table->string('equity');
            $table->float('equity_percentage', 10, 2);
            $table->float('maintenence_call', 10, 2);
            $table->float('maintenence_required', 10, 2);
            $table->float('margin', 10, 2);
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
        Schema::dropIfExists('accounts');
    }
}

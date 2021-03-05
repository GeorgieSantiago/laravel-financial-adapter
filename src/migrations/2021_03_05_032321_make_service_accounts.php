<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeServiceAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('service_id');
            $table->text('auth_code')->nullable();
            $table->text('access_token');
            $table->text('refresh_token')->nullable();
            $table->dateTime('expires_at')->nullable();
            $table
            ->foreign('service_id')
            ->references('id')
            ->on('services')
            ->onDelete('cascade');
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
        Schema::dropIfExists('service_accounts');
    }
}

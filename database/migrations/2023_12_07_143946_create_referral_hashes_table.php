<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralHashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_hashes', function (Blueprint $table) {
            $table->id();
            $table->string('hash');
            $table->foreignId('created_by');
            $table->unsignedBigInteger('max_usage');
            $table->unsignedBigInteger('current_usage')->default(0);
            $table->json('registered_users');
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
        Schema::dropIfExists('referral_hashes');
    }
}

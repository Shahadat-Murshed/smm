<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvOrdersDripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adv_orders_drip', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->foreignId('order_id');
            $table->unsignedBigInteger('api_order_id')->nullable();
            $table->foreignId('api_provider_id');
            $table->foreignId('service_id');
            $table->string('link');
            $table->unsignedBigInteger('order_quantity');
            $table->unsignedBigInteger('start')->default(0);
            $table->unsignedBigInteger('remaining');
            $table->unsignedBigInteger('drip_quantity');
            $table->tinyInteger('runs');
            $table->tinyInteger('interval');
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
        Schema::dropIfExists('adv_orders_drip');
    }
}

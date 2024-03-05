<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adv_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->json('service_details');
            $table->bigInteger('total_quantity')->nullable();
            $table->double('price','10','2')->nullable();
            $table->string('status')->nullable();
            $table->string('status_description')->nullable();
            $table->text('reason')->nullable();
            $table->bigInteger('start_counter')->nullable();
            $table->bigInteger('remains')->nullable();
            $table->timestamp('added_on', 0);
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
        Schema::dropIfExists('adv_orders');
    }
}

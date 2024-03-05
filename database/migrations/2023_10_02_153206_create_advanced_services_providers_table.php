<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvancedServicesProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advanced_services_providers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('advanced_service_id')->nullable();
            $table->bigInteger('api_provider_id')->nullable();
            $table->bigInteger('api_service_id')->nullable();
            $table->string('api_provider_price')->nullable();
            $table->tinyInteger('drip_feed')->nullable();
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
        Schema::dropIfExists('advanced_services_providers');
    }
}

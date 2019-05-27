<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_id');
            $table->unsignedInteger('customer_id');
            $table->string('billing_name')->nullable();
            $table->string('billing_email')->nullable();
            $table->string('billing_phone',20)->nullable();
            $table->text('billing_address')->nullable();
            $table->unsignedInteger('billing_subdistrict_id')->nullable();
            $table->string('billing_subdistrict')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_province')->nullable();
            $table->string('billing_zip_code',6)->nullable();
            $table->string('billing_country',3)->nullable()->default('IDN');
            $table->string('shipping_name');
            $table->string('shipping_email');
            $table->string('shipping_phone');
            $table->text('shipping_address');
            $table->unsignedInteger('shipping_subdistrict_id')->nullable();
            $table->string('shipping_subdistrict')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_province')->nullable();
            $table->string('shipping_zip_code',6)->nullable();
            $table->string('shipping_country',3)->nullable()->default('IDN');
            $table->string('shipment_id')->nullable();
            $table->string('shipment_name')->nullable();
            $table->unsignedInteger('shipping_cost');
            $table->string('payment_type')->nullable();
            $table->unsignedTinyInteger('order_status')->nullable();
            $table->string('shipping_tracking_number')->nullable();
            $table->unsignedInteger('admin')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedInteger('admin_fee')->default(0)->change();
            $table->unsignedInteger('total_amount')->default(0)->change();
            $table->boolean('prism_checkout')->default(false)->change();
            $table->timestamps();
            
            //$table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('billing_subdistrict_id')->references('id')->on('subdistricts');
            //$table->foreign('shipping_subdistrict_id')->references('id')->on('subdistricts');
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
}

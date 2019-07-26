<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('description', 300);
            $table->decimal('price', 10, 2);
            //$table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('color', 20)->nullable();
            $table->string('featured_img', 300);
            $table->integer('stock');
            $table->softDeletes();
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

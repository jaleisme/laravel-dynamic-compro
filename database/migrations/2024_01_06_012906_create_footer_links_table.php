<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_link', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->longtext('link');
            $table->bigInteger('footer_id')->unsigned();
            $table->foreign('footer_id')->references('id')->on('footer');
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
        Schema::dropIfExists('footer_link');
    }
}

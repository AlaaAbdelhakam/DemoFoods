<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_metallic_tins_page_contents', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('MTitem')->nullable();
            $table->text('MTbrand')->nullable();
            $table->text('MTcasepack')->nullable();
            $table->text('MTorigin')->nullable();
            $table->text('MTingridients')->nullable();
            $table->text('MTsealedshelflife')->nullable();
            $table->text('MTstorage')->nullable();
            $table->text('MTattributes')->nullable();
            $table->text('MTdrainedweight')->nullable();
            $table->text('MTgrosscaseweight')->nullable();
            $table->text('MTcasedimensions')->nullable();
            $table->text('MTcasecube')->nullable();
            $table->text('MTtihi')->nullable();
            $table->text('MTallergens')->nullable();
            $table->text('img_MTfirst');
            $table->text('img_MTsecond');
            $table->text('img_MTthird');
            $table->bigInteger('jawharacproducts_id')->unsigned(); 
            $table->foreign('jawharacproducts_id')->references('id')->on('jawharacproducts')->onDelete('cascade');
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
        Schema::dropIfExists('single_metallic_tins_page_contents');
    }
};
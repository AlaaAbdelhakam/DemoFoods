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
        Schema::create('single_plastic_barrels_page_contents', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('PBitem')->nullable();
            $table->text('PBbrand')->nullable();
            $table->text('PBcasepack')->nullable();
            $table->text('PBorigin')->nullable();
            $table->text('PBingridients')->nullable();
            $table->text('PBsealedshelflife')->nullable();
            $table->text('PBstorage')->nullable();
            $table->text('PBattributes')->nullable();
            $table->text('PBdrainedweight')->nullable();
            $table->text('PBgrosscaseweight')->nullable();
            $table->text('PBcasedimensions')->nullable();
            $table->text('PBcasecube')->nullable();
            $table->text('PBtihi')->nullable();
            $table->text('PBallergens')->nullable();
            $table->text('img_PBfirst');
            $table->text('img_PBsecond');
            $table->text('img_PBthird');
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
        Schema::dropIfExists('single_plastic_barrels_page_contents');
    }
};
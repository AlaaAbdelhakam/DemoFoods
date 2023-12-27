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
        Schema::create('single_plastic_pouch_page_contents', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('PPitem')->nullable();
            $table->text('PPbrand')->nullable();
            $table->text('PPcasepack')->nullable();
            $table->text('PPorigin')->nullable();
            $table->text('PPingridients')->nullable();
            $table->text('PPsealedshelflife')->nullable();
            $table->text('PPstorage')->nullable();
            $table->text('PPattributes')->nullable();
            $table->text('PPdrainedweight')->nullable();
            $table->text('PPgrosscaseweight')->nullable();
            $table->text('PPcasedimensions')->nullable();
            $table->text('PPcasecube')->nullable();
            $table->text('PPtihi')->nullable();
            $table->text('PPallergens')->nullable();
            $table->text('img_PPfirst');
            $table->text('img_PPsecond');
            $table->text('img_PPthird');
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
        Schema::dropIfExists('single_plastic_pouch_page_contents');
    }
};
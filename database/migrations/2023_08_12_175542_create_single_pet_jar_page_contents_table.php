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
        Schema::create('single_pet_jar_page_contents', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('PJitem')->nullable();
            $table->text('PJbrand')->nullable();
            $table->text('PJcasepack')->nullable();
            $table->text('PJorigin')->nullable();
            $table->text('PJingridients')->nullable();
            $table->text('PJsealedshelflife')->nullable();
            $table->text('PJstorage')->nullable();
            $table->text('PJattributes')->nullable();
            $table->text('PJdrainedweight')->nullable();
            $table->text('PJgrosscaseweight')->nullable();
            $table->text('PJcasedimensions')->nullable();
            $table->text('PJcasecube')->nullable();
            $table->text('PJtihi')->nullable();
            $table->text('PJallergens')->nullable();
            $table->text('img_PJfirst');
            $table->text('img_PJsecond');
            $table->text('img_PJthird');
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
        Schema::dropIfExists('single_pet_jar_page_contents');
    }
};
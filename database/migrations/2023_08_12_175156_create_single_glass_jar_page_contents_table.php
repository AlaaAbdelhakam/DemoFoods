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
        Schema::create('single_glass_jar_page_contents', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('GJitem')->nullable();
            $table->text('GJbrand')->nullable();
            $table->text('GJcasepack')->nullable();
            $table->text('GJorigin')->nullable();
            $table->text('GJingridients')->nullable();
            $table->text('GJsealedshelflife')->nullable();
            $table->text('GJstorage')->nullable();
            $table->text('GJattributes')->nullable();
            $table->text('GJdrainedweight')->nullable();
            $table->text('GJgrosscaseweight')->nullable();
            $table->text('GJcasedimensions')->nullable();
            $table->text('GJcasecube')->nullable();
            $table->text('GJtihi')->nullable();
            $table->text('GJallergens')->nullable();
            $table->text('img_GJfirst');
            $table->text('img_GJsecond');
            $table->text('img_GJthird');
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
        Schema::dropIfExists('single_glass_jar_page_contents');
    }
};
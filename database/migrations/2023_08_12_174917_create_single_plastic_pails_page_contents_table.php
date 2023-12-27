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
        Schema::create('single_plastic_pails_page_contents', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('PPailsitem')->nullable();
            $table->text('PPailsbrand')->nullable();
            $table->text('PPailscasepack')->nullable();
            $table->text('PPailsorigin')->nullable();
            $table->text('PPailsingridients')->nullable();
            $table->text('PPailssealedshelflife')->nullable();
            $table->text('PPailsstorage')->nullable();
            $table->text('PPailsattributes')->nullable();
            $table->text('PPailsdrainedweight')->nullable();
            $table->text('PPailsgrosscaseweight')->nullable();
            $table->text('PPailscasedimensions')->nullable();
            $table->text('PPailscasecube')->nullable();
            $table->text('PPailstihi')->nullable();
            $table->text('PPailsallergens')->nullable();
            $table->text('img_PPailsfirst');
            $table->text('img_PPailssecond');
            $table->text('img_PPailsthird');
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
        Schema::dropIfExists('single_plastic_pails_page_contents');
    }
};
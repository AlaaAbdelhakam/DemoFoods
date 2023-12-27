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
        Schema::create('main_page_contents', function (Blueprint $table) {
            $table->id();
            $table->text('main_page_title_first')->nullable();
            $table->text('slogan_first')->nullable();
            
            $table->text('img_first');
            
            $table->text('main_page_title_second')->nullable();
            $table->text('slogan_second')->nullable();
            
            $table->text('img_second');
            
            $table->text('main_page_title_third')->nullable();
            $table->text('slogan_third')->nullable();
            
            $table->text('img_third');
            
            $table->text('category_first_title_1')->nullable();
            $table->text('category_first_description_1')->nullable();
            
            $table->text('img_first_categoryone')->nullable();
            
            $table->text('category_first_title_2')->nullable();
            $table->text('category_first_description_2')->nullable();
            
            $table->text('img_second_categoryone')->nullable();
            
            $table->text('category_first_title_3')->nullable();
            $table->text('category_first_description_3')->nullable();
            
            $table->text('img_third_categoryone')->nullable();
            
            $table->text('category_second_title_1')->nullable();
            $table->text('category_second_description_1')->nullable();
            
            $table->text('img_first_categorytwo')->nullable();
            
            $table->text('category_second_title_2')->nullable();
            $table->text('category_second_description_2')->nullable();
            
            $table->text('img_second_categorytwo')->nullable();
            
            $table->text('category_second_title_3')->nullable();
            $table->text('category_second_description_3')->nullable();
            
            $table->text('img_third_categorytwo')->nullable();
            
            $table->text('category_third_title_1')->nullable();
            $table->text('category_third_description_1')->nullable();
            
            $table->text('img_first_categorythree')->nullable();
            
            $table->text('category_third_title_2')->nullable();
            $table->text('category_third_description_2')->nullable();
            
            $table->text('img_second_categorythree')->nullable();
            
            $table->text('category_third_title_3')->nullable();
            $table->text('category_third_description_3')->nullable();
            
            $table->text('img_third_categorythree')->nullable();

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
        Schema::dropIfExists('main_page_contents');
    }
};
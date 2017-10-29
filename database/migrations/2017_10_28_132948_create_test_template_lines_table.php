<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTemplateLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_template_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('number_of_questions');
            $table->integer('min_weight')->default(0);
            $table->integer('max_weight')->default(10);

            $table->integer('category_id')->unsigned();
            $table->integer('test_template_id')->unsigned();

            $table->foreign('test_template_id')->references('id')->on('test_templates')->onDelete('cascade');;
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_template_lines');
    }
}

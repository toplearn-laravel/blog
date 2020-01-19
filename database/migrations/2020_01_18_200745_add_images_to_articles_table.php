<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->text('image')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */x
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}

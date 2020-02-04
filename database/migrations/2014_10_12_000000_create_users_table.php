<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->text('avatar');
            // $table->string('email')->unique();
            // $table->unique('email');
            // $table->index('state');
            // $table->primary('id');
            // $table->renameIndex('state', 'sth');
            // $table->dropPrimary(sth');
            $table->string('info', 255);
            $table->timestamps();



            // $table->dropPrimary('state', 'sth');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{

    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('user_id')->nullable()->index();
            $table->string('name');
            $table->string('email');
            $table->text('content');
            $table->text('excerpt');
            /*$table->integer('contact_count')->unsigned()->default(0);*/
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

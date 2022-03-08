<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('post',function ($table){
            $table->integer('heart')->after('status')->nullable();
            $table->string('title',100)->change();
            $table->string('description')->nullable()->change();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('post',function ($table){
            $table->dropColumn('heart');
            $table->dropforeign('post_user_id_foreign');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('self_introduction',500)->nullable();
            $table->tinyInteger('sex')->default(0);
            $table->integer('area')->nullable();
            $table->integer('age')->nullable();
            $table->integer('want_talk')->nullable();
            $table->integer('can_talk')->nullable();
            $table->integer('occupation')->nullable();
            $table->string('img_name')->default('../../images/avator.jpeg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('self_introduction');
            $table->dropColumn('sex');
            $table->dropColumn('area');
            $table->dropColumn('age');
            $table->dropColumn('want_talk');
            $table->dropColumn('can_talk');
            $table->dropColumn('occupation');
            $table->dropColumn('img_name');
        });
    }
}

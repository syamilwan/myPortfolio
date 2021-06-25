<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeUserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('street');
            $table->dropColumn('area');
            $table->dropColumn('gender');
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
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
            $table->string('street')->nullable();
            $table->string('area')->nullable();
            $table->string('gender')->nullable();
            $table->dropColumn('city');
            $table->dropColumn('postcode');
            $table->dropColumn('address1');
            $table->dropColumn('address2');
        });
    }
}

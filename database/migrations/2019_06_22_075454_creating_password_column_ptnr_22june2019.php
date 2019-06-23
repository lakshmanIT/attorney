<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatingPasswordColumnPtnr22june2019 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ptnr', function (Blueprint $table) {
			$table->timestamp('email_verified_at')->nullable();
			$table->string('status');
			$table->integer('deleted');
			$table->rememberToken();
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
        Schema::table('ptnr', function (Blueprint $table) {
            //
        });
    }
}

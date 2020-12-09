<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedBd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_coins', function (Blueprint $table) {
            $table->increments('id');
            $table->char('code',50)->index();
            $table->char('coinOrigin',50);
            $table->char('codein',50);
            $table->char('name',60);
            $table->decimal('high',10,5);
            $table->decimal('low',10,5);
            $table->decimal('bid',10,5);
            $table->decimal('ask',10,5);
            $table->timestamp('created_at');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_coins');
    }
}

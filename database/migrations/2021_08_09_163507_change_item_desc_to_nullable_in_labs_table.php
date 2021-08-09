<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeItemDescToNullableInLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('labs', function (Blueprint $table) {
            $table->string('item_desc')->nullable()->change();
            $table->integer('item_quantity')->nullable()->change();
            $table->integer('item_error')->nullable()->change();
            $table->integer('item_value')->nullable()->change();
            $table->integer('item_total')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('labs', function (Blueprint $table) {
            $table->string('item_desc')->nullable(false)->change();
            $table->integer('item_quantity')->nullable(false)->change();
            $table->integer('item_error')->nullable(false)->change();
            $table->integer('item_value')->nullable(false)->change();
            $table->integer('item_total')->nullable(false)->change();
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('floor_num');
            $table->text('street');
            $table->string('type');
            $table->string('notes')->nullable();
            $table->integer('bulding _on');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('region_id');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP')); 


            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');

            $table->foreign('region_id')
                  ->references('id')
                  ->on('regions')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}

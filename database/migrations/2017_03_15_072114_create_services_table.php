<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->integer('duration_hours')->unsigned()->default(0);
            $table->integer('duration_minutes')->unsigned()->default(15);
            $table->string('pricing_type')->nullable();
            $table->double('pricing_amount')->nullable();
            $table->double('pricing_percentage')->nullable();
            $table->string('pricing_bill_at')->nullable();
            $table->smallInteger('buffer_before')->unsigned()->nullable();
            $table->smallInteger('buffer_after')->unsigned()->nullable();
            $table->smallInteger('maximum_schedule_notice_hours')->unsigned()->nullable();
            $table->smallInteger('maximum_per_day')->unsigned()->nullable();
            $table->boolean('active')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('services');
    }
}

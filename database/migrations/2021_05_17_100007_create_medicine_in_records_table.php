<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineInRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_in_records', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('DVT')->nullable();
            $table->string('sl')->nullable();
            $table->integer('price')->nullable();
            $table->integer('total');
            $table->string('sl_Morning')->nullable();
            $table->string('DVT_Morning')->nullable();
            $table->string('sl_Afternoon')->nullable();
            $table->string('DVT_Afternoon')->nullable();
            $table->string('sl_Night')->nullable();
            $table->string('DVT_Night')->nullable();
            $table->string('date_create')->nullable(); // lấy thuốc có ngày nhập xa nhất để trừ
            $table->string('doctor_id');
            $table->string('record_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('medicine_in_records');
    }
}

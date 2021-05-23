<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_medical_records', function (Blueprint $table) {
            $table->id();
            $table->string('symptom'); //triệu chứng
            $table->string('branch'); //chi nhánh
            $table->string('specialist'); //chuyên khoa
            $table->string('diagnose')->nullable(); //Chuẩn đoán
            $table->string('support')->nullable(); // kết quả xét nghiệm x quang
            $table->string('status')->nullable(); // tình trạng 'đợi kết quả xét nghiệm or hoàn thành'
            $table->string('note')->nullable(); //lưu ý từ BS
            $table->string('file')->nullable();
            $table->string('noteMedicine')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->string('name_patient')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->string('doctor_id')->nullable();
            $table->string('nameDoctor')->nullable();
            $table->string('dateBook')->nullable();
            $table->string('timeBook')->nullable();
            $table->string('Diagnostic_Results')->nullable();
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
        Schema::dropIfExists('personal_medical_records');
    }
}

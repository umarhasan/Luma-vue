<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_no');
            $table->text('address');
            $table->integer('institute_status')->default(1)->comment('1 = Pending, 2 = Approved, 3 = Unapproved');
            $table->integer('status')->default(1)->comment('1 = Active, 2 = Inactive');
            $table->string('created_by');
            $table->date('created_date');
            $table->date('created_time');
            $table->string('updated_by')->nullable();
            $table->date('updated_date')->nullable();
            $table->string('updated_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}

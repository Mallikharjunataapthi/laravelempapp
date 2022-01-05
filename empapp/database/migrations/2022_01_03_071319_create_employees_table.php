<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('name');
			$table->unsignedBigInteger('designation_id');
			$table->enum('gender', ['male', 'female']);
			$table->mediumText('image_url');
			$table->double('salary', 10, 2);
			$table->date('resigned_date');
			$table->enum('is_exist', ['1', '0'])->default('1');
  			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

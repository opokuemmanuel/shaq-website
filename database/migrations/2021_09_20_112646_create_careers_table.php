<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('careers', function (Blueprint $table) {
      $table->id();
      $table->string('job_position')->unique();
      $table->string('slug');
      $table->longText('job_description');
      $table->enum('status', ['Show', 'Hide'])->default('Show');
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
    Schema::dropIfExists('careers');
  }
}

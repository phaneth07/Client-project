<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->string('job_title');
            $table->string('job_classification');
            $table->string('job_industry');
            $table->string('type_of_job');
            $table->string('location');
            $table->string('salary')->nullable();
            $table->string('number_of_hiring');
            $table->string('qualification');
            $table->string('experience_level');
            $table->string('language');
            $table->longtext('description')->nullable();
            $table->longtext('requirement')->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->string('date_file');
            $table->string('job_priority');
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_posts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applications', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->text('about');
			$table->text('career');
			$table->text('project');
			$table->string('resume_name');
			$table->string('resume_hash');
			$table->integer('stage_id');
			$table->integer('user_id');
			$table->integer('salary_range_id');
			$table->boolean('work_status')->default(false);
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
		Schema::drop('applications');
	}

}

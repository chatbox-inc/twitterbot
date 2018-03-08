<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Twibot extends Migration
{

	protected function schemas(){
		$schemas = [];

		$schemas["twbt_user"] = function(Blueprint $table){
			$table->increments("id");
			$table->string("login_account_id");
			$table->timestamps();
		};

		$schemas["twbt_twitter_auth"] = function(Blueprint $table){
			$table->increments("id");
			$table->string("twitter_id");
			$table->string("nickname");
			$table->string("name");
			$table->string("email");
			$table->string("avatar");
			$table->string("token");
			$table->string("token_secret");
			$table->timestamps();
		};

		$schemas["twbt_message"] = function(Blueprint $table){
			$table->increments("id");
			$table->string("twitter_id");
			$table->text("message");
			$table->dateTime("message_at");
			$table->dateTime("queue_start_at")->nullable();
			$table->dateTime("queue_finish_at")->nullable();
			$table->text("log")->nullable();
			$table->text("repeater")->nullable();
			$table->timestamps();
		};

		return $schemas;


	}

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    foreach ( $this->schemas() as $tableName => $schema ) {
			Schema::create($tableName,$schema);
    	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    foreach ( $this->schemas() as $tableName => $schema ) {
		    Schema::dropIfExists($tableName);
	    }
    }
}

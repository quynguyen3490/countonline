<?php 
public function up(){
	Schema::create('countonline', function($t){
		$t->increments('id');
		$t->string('ip',15);
		$t->string('time');
		$t->timestamps();
	});
}

public function down(){
	Schema::drop('countonline');
}
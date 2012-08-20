<?php defined('SYSPATH') or die('No direct script access.');

class Model_Order extends Model {

	public function delivery_methods(){
	return $query = DB::query(Database::SELECT, "select * from delivery_metods")->execute();
	}
	
	public function payment_methods(){
	return $query = DB::query(Database::SELECT, "select * from payment_metods")->execute();
	}
	
}
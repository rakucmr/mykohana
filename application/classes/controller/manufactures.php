<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Manufactures extends Controller_Index{

	public function before()
	{
		parent::before();
		//Вывод в шаблон
		$this->template->page_title = 'Производительи';
	
	}

	public function action_index(){

			$manufactures = ORM::factory('manufactures')->find_all();
			$content = View::factory('v_manufactures',array('manufactures' => $manufactures));
			$this->template->page_title = 'Производительи';
			$this->template->block_center = $content;
	}	

	public function action_manufacture(){
			$id = (int)$this->request->param('id');
			$manufactures = ORM::factory('manufactures', $id);
			$manufacture = $manufactures->as_array();
			$content = View::factory('v_manufacture',array('manufacture' => $manufacture));
			$this->template->page_title = 'Производитель';
			$this->template->block_center = $content;
	}
	
}
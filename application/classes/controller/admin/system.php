<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_System extends Controller_Admin_Index{

	public function before()
	{
		parent::before();
		//Вывод в шаблон
		$this->template->page_title = 'Система';
	
	}

	public function action_index(){


		$this->template->block_center = View::factory('/admin/v_system');

	}	

	public function action_settings(){
		$settings = ORM::factory('setting')->find_all();	
		$this->template->block_center = View::factory('admin/v_settings',array('settings'=>$settings)) ;
	
	}
		
}
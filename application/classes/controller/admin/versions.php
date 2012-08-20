<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Versions extends Controller_Admin_Index{

	public function before()
	{
		parent::before();
		//Вывод в шаблон
		$this->template->page_title = 'Версия';
	
	}

	public function action_index(){
	
	$v = $view->versions = Kohana::$config->load('versions');
	
		$versions = Kohana::$config->load('versions');
		//$content = View::factory('/admin/v_versions', array('versions'=>$versions));
		//$this->template->block_center = $content;
	}	

}
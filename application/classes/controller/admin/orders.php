<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Orders extends Controller_Admin_Index{

	public function before()
	{
		parent::before();
		//Вывод в шаблон
		$this->template->page_title = 'Заказы';
	
	}

	public function action_index(){

				if(!Auth::instance()->logged_in()) {
				$this->request->redirect('/admin/auth');
				}

			$this->template->block_center = 'Заказы';
	}	

	public function action_add(){
		$this->template->block_center = View::factory('/admin/v_addproduct');
	}
}
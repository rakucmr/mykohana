<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Admin_Base{

	public function before()
	{
		parent::before();
		
		if(!Auth::instance()->logged_in('admin')) {
				$this->request->redirect('/admin/auth');
		}
		
		if(Auth::instance()->logged_in('admin')){
			$admin_info = $this->user;
		$this->template->admin_info = $admin_info;
		}
			
		$admin_menu = View::factory('/admin/v_admin_menu');
		$this->template->admin_menu = $admin_menu;
		
		//Вывод в шаблон
		$this->template->title = 'Админисртрирование';
		$this->template->page_title = 'Главная страница админки';
		
		$this->template->scripts[] = 'js/jquery-1.7.1.min.js';
		$this->template->scripts[] = 'js/jquery.MultiFile.pack.js';
		$this->template->scripts[] = 'js/upload.js';
		$this->template->scripts[] = 'js/view_images.js';
		
		$this->template->styles[] = 'themes/admin_menu.css';
		$this->template->styles[] = 'themes/admin_style.css';
		
	}

	public function action_index(){
	
	$content = View::factory('/admin/v_index');
	$this->template->block_center = $content;
	}	
	
}
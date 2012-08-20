<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Modules extends Controller_Admin_Index{

	public function before()
	{
		parent::before();
		//Вывод в шаблон
		$this->template->page_title = 'Модульи';
	
	}

	public function action_index(){

			$modules = ORM::factory('pages')->find_all();
			$content = View::factory('/admin/v_modules',array('modules' => $modules));
			$this->template->page_title = 'Модульи';
			$this->template->block_center = $content;
	}	

	public function action_add(){
		if(isset($_POST['submit'])){
 
			$data = Arr::extract($_POST, array('page_title', 'page_alias', 'page_text'));
			$pages = ORM::factory('modules');
			$pages->values($data);
				
			try{
					$pages->save();
					$this->request->redirect('/admin/modules');
			}
			catch(ORM_Validation_Exception $e){
					$errors = $e->errors('validation');
			}

		}
		
		$content = View::factory('/admin/v_addpages')
					->bind('errors', $errors)
					->bind('data',$data);
		
		$this->template->page_title = 'Добавить страницу';
		$this->template->block_center = $content;
	}
	
	public function action_edit(){
	$id =(int) $this->request->param('id');
	$pages = ORM::factory('pages', $id);
	
	if(!$pages->loaded()){
		$this->request->redirect('/admin/pages');
	}
	
	$data = $pages->as_array();
	
		
	// Редактирование
        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('page_title', 'page_alias', 'page_text'));
            $pages->values($data);

            try {
                $pages->save();
                $this->request->redirect('admin/pages');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
        }
		$content = View::factory('/admin/v_editpages')
					->bind('id', $id)
					->bind('errors', $errors)
					->bind('data', $data);
					
		$this->template->page_title = 'Редактировть страницу';
		$this->template->block_center = $content;
	}
	
	public function action_delete(){
	    $id = (int) $this->request->param('id');
        $pages = ORM::factory('modules', $id);

        if(!$pages->loaded()) {
            $this->request->redirect('admin/modules');
        }

        $pages->delete();
        $this->request->redirect('admin/modules');
	
	}

	
	public function action_delivery(){
		$delivery = ORM::factory('delivery')->find_all();
		$content = View::factory('/admin/v_modules_delivery',array('delivery' => $delivery));
		$this->template->page_title = 'Модуль доставки';
		$this->template->block_center = $content;
	}	
	
	
	public function action_payments(){
		$payments = ORM::factory('payment')->find_all();
		$content = View::factory('/admin/v_modules_payments',array('payments' => $payments));
		$this->template->page_title = 'Модуль Оплаты';
		$this->template->block_center = $content;
	}
	
	
	
}
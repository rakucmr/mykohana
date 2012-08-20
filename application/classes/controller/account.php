<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Account extends Controller_Index {
    public function before(){
        parent::before();
        if(!$this->auth->logged_in()) {
            $this->request->redirect('login');
        }
}
    public function action_index() {
 	
        $content = View::factory('v_account');
        // Выводим в шаблон
        $this->template->title = 'Личный кабинет';
        $this->template->page_title = 'Личный кабинет';
        $this->template->block_center = $content;
    }

	public function action_myprofile(){
	
	if(isset($_POST['submit'])){
			$users = ORM::factory('user');
			try {
				$users->where('id', '=', $this->user->id)
						->find()
						->update_user($_POST, array('username','first_name', 'email', 'phone'));
				$this->request->redirect('account/myprofile');
			}
			
			catch (ORM_Validation_Exception $e){
				$errors = $e->errors('user');
			}
	}
	
		// Выводим в шаблон
		$content = View::factory('v_myprofile')->bind('user', $this->user)->bind('errors', $errors);

        $this->template->title = 'Личный кабинет - Персональная информация';
        $this->template->page_title = 'Посмотреть или изменить персональные данные';
        $this->template->block_center = $content;
		
	}

	
	public function action_changepassword(){
	    $content = View::factory('v_change_password');
        // Выводим в шаблон
        $this->template->title = 'Личный кабинет - ';
        $this->template->page_title = 'Изменение пароля';
        $this->template->block_center = $content;
	}
	
}
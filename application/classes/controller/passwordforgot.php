<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Passwordforgot extends Controller_Index{

	public function before(){
		parent::before();
		if(Auth::instance()->logged_in()) {
            $this->request->redirect('account');
        }
	}


	public function action_index(){

    if(isset($_POST['submit'])){
    $email = Email::factory('Регистрация на сайте','Регистрация на сайте успешно завешена')
                    ->to($data['email'],"ваш новый пароль $newpass")
                    ->from('admin@mykohana.loc','mykohan')
                    ->send();

    }





	    $block_center = View::factory('v_password_forgot', array());

		$this->template->page_title = 'Забыли пароль?';
		$this->template->block_center = $block_center;
	}

}
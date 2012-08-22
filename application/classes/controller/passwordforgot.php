<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Passwordforgot extends Controller_Index{

	public function before(){
		parent::before();
		if(Auth::instance()->logged_in()) {
            $this->request->redirect('account');
        }
	}

/*
public function hash($str)
{
    if ( ! $this->_config['hash_key'])
        throw new Kohana_Exception('A valid hash key must be set in your auth config.');

    return hash_hmac($this->_config['hash_method'], $str, $this->_config['hash_key']);
}
*
/*
static public function hash_password($password)
{
    return $this->hash($password);
}
*/



	public function action_index(){

    if(isset($_POST['submit'])){
    $email = Arr::get($_POST,'email');

   $newpass = 'sdfddsfsfsd';

    $data = ORM::factory('user')->where('email','=', $email)->find();

    $data->password = $newpass;
    $data->save();


    $email = Email::factory('Регистрация на сайте','Регистрация на сайте успешно завешена')
                    ->to($email['email'],"ваш новый пароль")
                    ->from('admin@mykohana.loc','mykohan')
                    ->send();

    }





	    $block_center = View::factory('v_password_forgot', array());

		$this->template->page_title = 'Забыли пароль?';
		$this->template->block_center = $block_center;
	}

}
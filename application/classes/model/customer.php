<?php defined('SYSPATH') or die('No direct script access.');

class Model_Customer extends Model_Auth_User {

	protected $_table_name = 'customers';

    protected $_primary_key = 'id';


    public function labels()
    {
        return array(
            'username' => 'Логин',
            'email' => 'E-mail',
            'first_name' => 'ФИО',
            'password' => 'Пароль',
            'password_confirm' => 'Повторить пароль',
			'phone' => 'Номер телефона',
			'address' => 'Адрес',
			'agree' => 'Вы должны принять условию'
        );
    }

    public function rules()
	{
		return array(
			'username' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 32)),
				array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
				///array(array($this, 'username_available'), array(':validation', ':field')),
				array(array($this, 'unique'), array('username', ':value')),
			),
            'first_name' => array(
				array('not_empty'),
				array('min_length', array(':value', 2)),
				array('max_length', array(':value', 32)),
			),
			'password' => array(
				array('not_empty'),
			),
			'email' => array(
				array('not_empty'),
			    array('min_length', array(':value', 4)),
				array('max_length', array(':value', 127)),
				array('email'),
			//	array(array($this, 'email_available'), array(':validation', ':field')),
				array(array($this, 'unique'), array('email', ':value')),
			),
			'phone' => array(
				array('not_empty'),
				array('phone'),
				),
		
			'address'=>array(
			array('not_empty'),
			),	

		);
	}
} 

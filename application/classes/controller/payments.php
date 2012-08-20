<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Payments extends Controller_Index{

	public function before(){
		parent::before();
	}


	public function action_index(){
		$payments = Model::factory('order')->payment_methods();
		$block_center = View::factory('v_payments', array('payments' => $payments,));
		
		$this->template->title = 'Способы оплаты';
		$this->template->page_title = 'Способы оплаты';
		$this->template->block_center = $block_center;	
	}

	public function action_pay(){
		print $id = $this->request->param('id');
		$pay = ORM::factory("payment",$id);//->where('payment_id', '=', $id)->find();
		
		$payment = $pay->as_array();
		
		//print_r($payment);
		
		$this->template->title = 'Способы оплаты';
		$this->template->page_title = 'Способы оплаты';
		
		$content = View::factory('v_pay', array('payment'=>$payment));
		$this->template->block_center = $content;
	}
	

}
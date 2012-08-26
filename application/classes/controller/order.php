<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Order extends Controller_Index{

	public function before(){
		parent::before();
		if(!Auth::instance()->logged_in()) {
            $this->request->redirect('account');
        }
	}


	public function action_index(){
        if(empty($this->payment))
    {
     $this->request->redirect();
    }
		$orders = Model::factory('order')->delivery_methods();
		$checkout = View::factory('v_checkout', array('orders' => $orders,));

		$this->template->page_title = 'Способы доставки';
		$this->template->block_center = array('checkout'=>$checkout);
	}
	
	public function action_payment(){
        if(empty($this->payment))
    {
     $this->request->redirect();
    }
		$payments = Model::factory('order')->payment_methods();
		$checkout= View::factory('v_payments', array('payments' => $payments,));
		
		$this->template->title = 'Способы оплаты';
		$this->template->page_title = 'Способы оплаты';
		$this->template->block_center = array('checkout'=>$checkout) ;
	}
	
	
}
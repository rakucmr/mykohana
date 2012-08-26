<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Payments extends Controller_Index{

	public function before(){
		parent::before();
	}


	public function action_index(){

  

		$payments = Model::factory('order')->payment_methods();
		$payments = View::factory('v_payments', array('payments' => $payments,));

		$this->template->title = 'Способы оплаты';
		$this->template->page_title = 'Способы оплаты';
		$this->template->block_center = array('payments'=>$payments);
	}

	public function action_pay(){

    if(empty($this->payment))
    {
     $this->request->redirect();
    }

	   // print $id = $this->request->param('id');

      if(!empty($_POST['pay_id'])) $id = $_POST['pay_id'];

       if(@is_numeric($id))
         {
        $payment = ORM::factory("payment")->where('payment_id', '=', $id)->find();

		$this->template->title = 'Способ оплаты';
		$this->template->page_title = 'Оплата';

		$pay = View::factory('v_pay', array('carts'=>$this->payment,  'p_session'=>$this->p_session, 'payment'=>$payment));
		$this->template->block_center = array('pay'=>$pay);
         }

	}
	

}
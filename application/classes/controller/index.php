<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base {

    public $p_session;

	public function before(){
	    parent::before();
        $this->p_session = $this->session->get('products');
		
				//Вывод в шаблон
		$this->template->title = 'Интернет-магазин';
		$this->template->site_name = 'IT Books';
		$this->template->description = 'Интернет-магазин книг по IT';
	
		$this->template->scripts[] = 'js/jquery-1.7.1.min.js';
		$this->template->scripts[] = 'js/nivoslider/jquery.nivo.slider.js';
        $this->template->scripts[] = 'js/view_images.js';
        $this->template->styles[] = 'themes/nivo-slider.css';
		$this->template->styles[] = 'themes/topmenu.css';
		$this->template->styles[] = 'themes/style.css';

	   //Вывод раздела ползоваелей можно вызват блоках или отдельно
		if($this->auth->logged_in()) {
			$user = $this->auth->get_user();
			$userarea = View::factory('v_userarea')->bind('user',$user);
			
        }else{
		$userarea = View::factory('v_nologin');
		}

    	//Получаем категории можно вызвать в блоках
		$categories = ORM::factory('category');
		$categories = $categories->fulltree()->as_array();
		$left_categories = View::factory('v_categories')->bind('categories', $categories);
		//$this->template->left_categories = View::factory('v_categories')->bind('categories', $categories);

        //вывод поизводителей можно вызвать в блоках или отдельно
		$manufactures = ORM::factory('manufactures')->find_all();
		$manufactures = View::factory('v_manufactures',array('manufactures' => $manufactures));
		$this->template->manufactures = $manufactures;

        //собираем мимни корзину для блоков

        $carts = ORM::factory('product');


       if($this->p_session != Null){
			foreach($this->p_session as $id=>$count){

			$carts->or_where('id', 'IN', array($id));
			}
			$carts = $carts->find_all();

		}
		else{
		$carts = null;
		}


    	//$this->template->minicart = $mini_cart;
		$minicart = View::factory('v_minicart', array(
            'carts' => $carts, 'p_session'=>$this->p_session
        ));
        //// конец корзыны



    $products = ORM::factory("product")->limit(10)->find_all()->as_array();
     $products = View::factory('v_lastproducts', array('products'=>$products));
   	 $this->template->block_center = array('products'=>$products);



        //Подключение блоков
		$this->template->userarea=$userarea;
		$this->template->search_form = View::factory('v_searchform');
	   //	$this->template->block_center = View::factory('v_index');
    	$this->template->block_left = array('left_categories'=>$left_categories);
		$this->template->block_right = array('minicart'=>$minicart, 'manufactures'=>$manufactures);

	}

	public function action_index()
	{
	$banners = ORM::factory('banner')->find_all();
	$this->template->slider_banner = View::factory('v_banner', array('banners'=>$banners));

   }

} // End 


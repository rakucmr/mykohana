<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Index {
	
 public function action_index()
	{	
	$keyword = Arr::get($_GET, 'search_keyword');
	$keyword = trim($keyword);
	
	
		if(!empty($keyword ) and strlen($keyword)>3){
			
		$products = ORM::factory("product")->where('title', "like", "%$keyword%")->find_all();


            $this->template->block_center = View::factory('v_search_result', array('products'=>$products));

            $noresult = 'нечего не найдена' ;
            $this->template->block_center = View::factory('v_search_result', array('products'=>$products))
                                            ->bind('noresult', $noresult);


  		}
		else{
			$this->template->block_center = '<br><br><p> <span class="error_msg"> Длина слов должна бвть больше 3 буквы </span> </p>';
			}
			
	}
} 
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Articles extends Controller_Index{

	public function before()
	{
		parent::before();
		//Вывод в шаблон
		$this->template->page_title = 'Статии';

	}


	public function action_article()
	{
       // Получаем статию
	   $id = (int)$this->request->param('id');
	   $articles = ORM::factory('article', $id)->as_array();
       $content = View::factory('v_article',array('articles' => $articles));
	   $this->template->page_title = '';
	   $this->template->block_center = $content;

	}


	public function action_index(){

      $count = ORM::factory('article')->count_all();

      $pagination = Pagination::factory(array(
      'total_items' => $count,
    ))
    ->route_params(array(
    'controller' => Request::current()->controller(),
    'action' => Request::current()->action(),
  ));


    $articles = ORM::factory('article')
                ->limit($pagination->items_per_page)
  				->offset($pagination->offset)
                ->find_all();
    $content = View::factory('v_articles',array('articles' => $articles, 'pagination'=>$pagination));
    $this->template->page_title = 'Статии';
    $this->template->block_center = $content;
	}



}
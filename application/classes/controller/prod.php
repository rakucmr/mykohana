<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Prod extends Controller_Index{


function action_index(){

    $m = ORM::factory('product')->find_all()->as_array();

       print '<pre>';

     //  print_r($m);


       foreach($m as $man){

        print_r($man->manufactures->title);
       }

      print '</pre>';
}

}
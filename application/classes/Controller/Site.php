<?php


class Controller_Site extends Controller_Layout{
    
    public function action_index(){
        $this->page = View::factory('template/menu');
    }
    
}


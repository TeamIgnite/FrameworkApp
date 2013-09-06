<?php

class HomeController extends Frame\Controller\View {

    public $layout = 'layouts/master';
    
    public function index() {
        $name = 'Frame';

        return $this->make('home', compact('name'));
    }

}
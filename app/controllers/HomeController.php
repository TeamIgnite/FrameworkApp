<?php

class HomeController extends Frame\Controller\View {

    public $composer = 'Frame\\Controller\\Composers\\Twig';
    
    public function index() {
        $welcome = '歓迎';
        $name = 'Frame';

        return $this->make('home', compact('name', 'welcome'));
    }

}
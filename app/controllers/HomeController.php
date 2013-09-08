<?php

class HomeController extends Framework\Controller\View {

    public $composer = 'Framework\\Controller\\Composers\\Twig';
    
    public function index() {
        $welcome = '歓迎';
        $name = 'Framework';

        return $this->make('home', compact('name', 'welcome'));
    }

}
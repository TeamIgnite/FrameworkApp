<?php

class HomeController extends Frame\Controller\Markdown {
    
    public function index() {
        $markdown = "## Welcome to Frame";

        return $markdown;
    }

}
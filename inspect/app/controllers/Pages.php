<?php

require_once(APPROOT .'\models\Category.php');
require_once(APPROOT .'\models\News.php');


  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){


      $data = [
        'title' => 'Inspect',
        'news_categories' => Category::getAllCategory(),
        'top_news' => News::getTopNews(),
        'sponsored_news'=> News::getSponsoredNews(),
        'current_news' => News::getCurrentNews(),
        'error' => ''
      ];
     
      $this->view('index', $data);
    }

    public function signUp(){
      $data = [
        'title' => 'Sign Up',
        'error' => ''
      ];
      $this->view('sign_up', $data);
    }

    public function signIn(){
      $data = [
        'title' => 'Sign In',
        'error' => ''
      ];
      $this->view('sign_in', $data);
    }
  }
<?php

require_once(APPROOT .'\models\Category.php');
require_once(APPROOT .'\models\News.php');
require_once(APPROOT .'\models\User.php');


  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

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
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'yes'){
        return $this->view('custom404', []);
      }else{
        $data = [
          'title' => 'Sign Up',
          'error' => ''
        ];
        $this->view('sign_up', $data);
      }

    }

    public function signIn(){
      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'yes'){
        return $this->view('custom404', []);
      }else{
        $data = [
          'title' => 'Sign In',
          'error' => ''
        ];
        $this->view('sign_in', $data);
      }
    }

    public function notFound(){
      $this->view('custom404', []);
    }
  }
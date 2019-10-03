<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Inspect',
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
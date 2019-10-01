<?php
  class SignIn extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Sign in',
      ];
     
      $this->view('sign_in', $data);
    }
  }
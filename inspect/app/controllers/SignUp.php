<?php
  class SignUp extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Sign Up',
      ];
     
      $this->view('sign_up', $data);
    }
  }
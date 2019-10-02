<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\User.php');

  class SignUp extends Controller {
    public function __construct(){
    }
    
    public function index(){
        $email = CleanParams::clean('email', $_POST['email']);
        $organization = CleanParams::clean('text', $_POST['organization']);
        $password = trim($_POST['password'], ' ');
        $data = [];
        $password = hash('sha256', $password);

        if(User::checkSignUp($email, $organization) > 0){
          $data = [
            'title'=> 'Sign Up',
            'error' => 'Someone has done Signup using these credentials'
          ];
          return $this->view('sign_up', $data);
        }else{
          User::insertUser($email, $organization, $password);
          $data = [
            'title' => 'Sign In',
            'error' => ''
          ];
          return $this->view('sign_in', $data);
        }
    }
  }
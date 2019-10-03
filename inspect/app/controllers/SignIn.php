<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\User.php');


  class SignIn extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $email = CleanParams::clean('email', $_POST['email']);
      $password = trim($_POST['password'], ' ');

      $password = $password = hash('sha256', $password);

      if(User::getSignInCount($email, $password) > 0){
        
        $user = User::getSignInInfo($email, $password);
        
        session_start();
        $_SESSION['user_id'] = $user[0]['user_id'];
        $_SESSION['email']   =  $user[0]['email'];
        $_SESSION['organization']   =  $user[0]['organization'];
        $_SESSION['logged_in'] = 'yes';

        $data = [
          'title' => 'Inspect',
          'error' => ''
        ];
        header("Location: " . URLROOT);
      }else{
        $data = [
          'title' => 'Sign In',
          'error' => 'wrong username or password'
        ];
        //return $this->view('sign_in', $data);
        header("Location: " . URLROOT . 'SignIn');
      }
    }
  }
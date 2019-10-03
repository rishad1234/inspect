<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\User.php');


  class Logout extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      session_start();
      $_SESSION['logged_in'] = 'no';
      $data=[
        'title'=> 'Inspect',
        'error' => ''
      ];
      //return $this->view('index', $data);
      header("Location: " . URLROOT);
    }
  }
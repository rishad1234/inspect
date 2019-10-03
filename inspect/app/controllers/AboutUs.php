<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\User.php');


  class AboutUs extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data=[
        'title'=> 'About Us',
        'error' => ''
      ];
      return $this->view('about', $data);
    }
  }
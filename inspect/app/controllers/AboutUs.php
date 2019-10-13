<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\User.php');
require_once(APPROOT .'\models\About.php');


  class AboutUs extends Controller {
    public function __construct(){
     
    }
    
    public function index(){


      $editor = array_chunk(About::getEditors(), 3);
      $data=[
        'title'=> 'About Us',
        'about_p' => About::getAboutP(),
        'co_founders' => About::getCoFounders(),
        'editor' =>$editor,
        'error' => ''
      ];
      return $this->view('about', $data);
    }
  }
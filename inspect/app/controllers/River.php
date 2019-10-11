<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\News.php');


  class River extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
        $data = [
            'title' => "River",
            'news_data' => News::getRiverNews(),
            'error' => ''
          ];
          $this->view('river', $data);
    }
  }
<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\News.php');


  class SingleNews extends Controller {
    public function __construct(){
     
    }
    
    public function index($param){
        $data = [
            'title'=> 'News',
            'news' => News::getSingleNews($param)
        ];
        return $this->view('news_detail', $data);
    }
  }
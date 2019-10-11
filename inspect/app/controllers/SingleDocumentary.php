<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\News.php');
require_once(APPROOT .'\models\Documentary.php');



  class SingleDocumentary extends Controller {
    public function __construct(){
     
    }
    
    public function index($param){
        session_start();
        if($_SESSION['logged_in'] == 'yes'){

            $simillar_documentaries = array_chunk(Documentary::getSimillarDocumentaries($param), 2);

            $documentary = Documentary::getSingleDocumentary($param);
            $data = [
                'title'=> 'News',
                'documentary' => $documentary,
                'sponsored_news' => News::getSponsoredNews(),
                'similar_documentaries' => $simillar_documentaries,
                'error'=> ''
            ];
            return $this->view('documentary_details', $data);
        }else{
            echo "not found";
        }
    }
  }
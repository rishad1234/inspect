<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\News.php');
require_once(APPROOT .'\models\Documentary.php');


  class Documentaries extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      session_start();

      if( isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'yes'){

        $documentaries = array_chunk(Documentary::getAllDocumentaries(), 2);
        $data=[
            'title'=> 'Documentaries',
            'sponsored_news'=> News::getSponsoredNews(),
            'documentaries' => $documentaries,
            'error' => ''
          ];
          return $this->view('documentaries', $data);
      }else{
        // header('Location: ' . URLROOT);
        return $this->view('custom404', []);
      }
    }
  }
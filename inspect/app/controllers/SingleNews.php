<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\News.php');


  class SingleNews extends Controller {
    public function __construct(){
     
    }
    
    public function index($param){
      $news = News::getSingleNews($param);
        $data = [
            'title'=> 'News',
            'news' => $news,
            'sponsored_news' => News::getSponsoredNews(),
            'similar_news' => News::getSimilarNewsByCategory($news['category_id'], $news['news_id']),
            'error'=> ''
        ];
        return $this->view('news_detail', $data);
    }
  }
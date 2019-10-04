<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\News.php');
require_once(APPROOT .'\models\Category.php');


  class CategoryType extends Controller {
    public function __construct(){
     
    }
    
    public function index($param){
        $title = Category::getSingleCategory($param)['category'];
        $data = [
            'title'=> $title,
            'news_categories' => Category::getAllCategory(),
            'top_news' => News::getTopNewsByCategory($param),
            'sponsored_news'=> News::getSponsoredNews(),
            'current_news' => News::getCurrentNewsByCategory($param),
            'error' => ''
        ];
        return $this->view('index', $data);
    }
  }
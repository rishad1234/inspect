<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\User.php');
require_once(APPROOT .'\models\News.php');
require_once(APPROOT .'\models\Job.php');

  class GetHired extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
        session_start();
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'yes'){
            $data = [
                'title' => "Get Hired",
                'sponsored_news'=> News::getSponsoredNews(),
                'jobs' => Job::getAllJobs(),
                'error' => ''
            ];
            return $this->view('get_hired', $data);
        }else{
            return $this->view('custom404', []);
        }
    }
  }
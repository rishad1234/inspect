<?php
  class PagesController extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Inspect',
      ];
     
      $this->view('index', $data);
    }
  }
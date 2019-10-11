<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\Contact.php');
require_once(APPROOT .'\models\News.php');


  class ContactUs extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      session_start();
      $data=[
        'title'=> 'Contact Us',
        'sponsored_news'=> News::getSponsoredNews(),
        'error' => ''
      ];
      return $this->view('contact', $data);
    }

    public function contactSubmit(){
        $name = $email = CleanParams::clean('text', $_POST['name']);
        $email = CleanParams::clean('email', $_POST['email']);
        $message = htmlspecialchars(trim($_POST['message']));

        Contact::submitContact($name, $email, $message);

        header('Location: ' . URLROOT);
    }
  }
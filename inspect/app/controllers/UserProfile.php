<?php

require_once(APPROOT .'\helpers\CleanParams.php');
require_once(APPROOT .'\models\News.php');
require_once(APPROOT .'\models\Documentary.php');
require_once(APPROOT .'\models\User.php');



  class UserProfile extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if($_SESSION['logged_in'] == 'yes'){

            $user_id = $_SESSION['user_id'];
            $user_email = $_SESSION['email'];
            $user_organization = $_SESSION['organization'];

            $user = User::getUserData($user_id, $user_email, $user_organization);
            
            $data = [
                'title'=> 'Profile',
                'user' => $user,
                'error'=> ''
            ];
            return $this->view('user_profile', $data);
            
        }else{
            echo "not found";
        }
    }
    public function saveUser(){
        session_start();

        if($_SESSION['logged_in'] == 'yes'){

            $user_data=[
                'full_name' => CleanParams::clean('text', $_POST['full_name']),
                'email' => CleanParams::clean('email', $_POST['email']),
                'password' => trim($_POST['password'], ' '),
                'age' => trim($_POST['age'], ' '),
                'organization' => CleanParams::clean('text', $_POST['organization']),
                'gender' => CleanParams::clean('text', $_POST['gender']),
                'address' => htmlspecialchars(trim($_POST['address'], ' ')),
                'phone_number' => htmlspecialchars(trim($_POST['phone_number'], ' '))
            ];

            if(isset($_FILES['user_image']['name']) && $_FILES['user_image']['name']!=='') {
                $ext = substr($_FILES['user_image']['name'], strpos($_FILES['user_image']['name'],'.'), strlen($_FILES['user_image']['name'])-1);     
                $image = $_SESSION['user_id']. $_SESSION['organization'] .$ext;
                $normalDestination = PROJECTROOT . '/public/storage/user_images/' . $image;
                move_uploaded_file($_FILES['user_image']['tmp_name'], $normalDestination);
            }
            
            User::saveUserData($user_data, $_SESSION['user_id'], $image, $_SESSION['password']);

            header("Location: " . URLROOT . 'userProfile');
            
        }else{
            echo 'not found';
        }
    }
  }
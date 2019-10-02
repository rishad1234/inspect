<?php 

class CleanParams{

    public static function clean($type, $param){
        if($type == 'email'){
            $email = trim($param, ' ');
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }else{
                return $email;
            }
        }else if($type == 'text'){
            $arg = trim($param, ' ');
            if (!preg_match("/^[a-zA-Z ]*$/", $arg)) {
                return false;
            }else{
                return $arg;
            }
        }
    }
}
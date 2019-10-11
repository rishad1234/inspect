<?php
class User{
    
    public static function checkSignUp($email, $organization){
        $database = new Database;

        $database->query('select * from users where email = :email and organization = :organization');
        $database->bind('email', $email);
        $database->bind('organization', $organization);

        $database->execute();

        return $database->rowCount();
    }

    public static function insertUser($email, $organization, $password){
        $database = new Database;

        $database->query('insert into users (email, organization, password) values (:email, :organization, :password)');
        $database->bind('email', $email);
        $database->bind('organization', $organization);
        $database->bind('password', $password);

        return $database->execute();
    }

    public static function getSignInCount($email, $password){
        $database = new Database;

        $database->query('select * from users where email = :email and password = :password');
        $database->bind('email', $email);
        $database->bind('password', $password);

        $database->execute();
        return $database->rowCount();
    }

    public static function getSignInInfo($email, $password){
        $database = new Database;

        $database->query('select * from users where email = :email and password = :password');
        $database->bind('email', $email);
        $database->bind('password', $password);
        return $database->resultSet();
    }

    public static function getUserData($user_id, $user_email, $user_organization){
        $database = new Database;

        $database->query('select * from users where email = :user_email and user_id = :user_id and organization = :user_organization');
        $database->bind('user_email', $user_email);
        $database->bind('user_id', $user_id);
        $database->bind('user_organization', $user_organization);
        return $database->single();
    }

    public static function saveUserData($user_data, $user_id, $image, $password){
        $database = new Database;

        $database->query('update users set email = :email, password = :password, organization = :organization, age = :age, address = :address, phone_number = :phone_number, gender = :gender, user_image = :user_image, full_name = :full_name where user_id = :user_id');

        $database->bind('email', $user_data['email']);

        $database->bind('password', hash('sha256', $user_data['password']));

        $database->bind('organization', $user_data['organization']);
        $database->bind('age', $user_data['age']);
        $database->bind('address', $user_data['address']);
        $database->bind('phone_number', $user_data['phone_number']);
        if($user_data['gender'] == 'Male'){
            $database->bind('gender', 'M');
        }else{
            $database->bind('gender', 'F');
        }
        $database->bind('user_image', $image);
        $database->bind('full_name', $user_data['full_name']);
        $database->bind('user_id', $user_id);
        
        $database->execute();
    }

    public static function getUserImage($user_id){
        $database = new Database;

        $database->query('select user_image from users where user_id = :user_id');
        $database->bind('user_id', $user_id);
        return $database->single();
    }
}
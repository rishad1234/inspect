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
}
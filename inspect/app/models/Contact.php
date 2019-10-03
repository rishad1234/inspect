<?php
class Contact{
    
    public static function submitContact($name, $email, $message){
        $database = new Database;

        $database->query('insert into contacts (name, email, message, created_at) values (:name, :email, :message, :created_at)');
        $database->bind('name', $name);
        $database->bind('email', $email);
        $database->bind('message', $message);
        $database->bind('created_at', date('Y-m-d H:i:s'));

        $database->execute();

        return $database->rowCount();
    }
}
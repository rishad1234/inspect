<?php
class About{
    
    public static function getAboutP(){
        $database = new Database;

        $database->query('select content from about_p');

        return $database->single();
    }

    public static function getEditors(){
        $database = new Database;

        $database->query('select * from editor_panel');

        return $database->resultSet();
    }

    public static function getCoFounders(){
        $database = new Database;

        $database->query('select * from co_founders');

        return $database->resultSet();
    }
}
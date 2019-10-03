<?php
class Category{
    
    public static function getAllCategory(){
        $database = new Database;

        $database->query('select * from news_categories');

        $database->execute();

        return $database->resultSet();
    }
}
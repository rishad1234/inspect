<?php
class Category{
    
    public static function getAllCategory(){
        $database = new Database;

        $database->query('select * from news_categories');

        return $database->resultSet();
    }

    public static function getSingleCategory($id){
        $database = new Database;

        $database->query('select * from news_categories where category_id = :category_id');
        $database->bind('category_id', $id);

        return $database->single();
    }
}
<?php
class News{
    
    public static function getTopNews(){
        $database = new Database;

        $database->query('select * from news where sponsored = 0 order by created_at desc limit 2');

        return $database->resultSet();
    }

    public static function getSingleNews($id){
        $database = new Database;
        $database->query('select * from news where news_id = :news_id');
        $database->bind('news_id', $id);

        return $database->single();
    }
    public static function getSponsoredNews(){
        $database = new Database;

        $database->query('select * from news where sponsored = 1 order by created_at desc limit 4');

        return $database->resultSet();
    }

    public static function getCurrentNews(){
        $database = new Database;

        $database->query('select * from news where sponsored = 0 order by created_at desc limit 50 offset 2');

        return $database->resultSet();
    }

    public static function getTopNewsByCategory($id){
        $database = new Database;

        $database->query('select * from news where sponsored = 0 and category_id = :category_id order by created_at desc limit 2');
        $database->bind('category_id', $id);

        return $database->resultSet();
    }

    public static function getCurrentNewsByCategory($id){
        $database = new Database;

        $database->query('select * from news where sponsored = 0 and category_id = :category_id order by created_at desc limit 50 offset 2');
        $database->bind('category_id', $id);

        return $database->resultSet();
    }
    public static function getSimilarNewsByCategory($category_id, $news_id){
        $database = new Database;

        $database->query('select * from news where sponsored = 0 and category_id = :category_id and news_id != :news_id order by created_at desc limit 3');
        $database->bind('category_id', $category_id);
        $database->bind('news_id', $news_id);

        return $database->resultSet();
    }
}
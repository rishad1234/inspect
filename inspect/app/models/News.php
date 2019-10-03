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
}
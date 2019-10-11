<?php
class Documentary{
    
    public static function getSingleDocumentary($param){
        $database = new Database;

        $database->query('select * from documentaries where documentary_id = :documentary_id');
        $database->bind('documentary_id', $param);

        return $database->single();
    }

    public static function getAllDocumentaries(){
        $database = new Database;

        $database->query('select * from documentaries order by created_at desc');

        return $database->resultSet();
    }

    public static function getSimillarDocumentaries($documentary_id){
        $database = new Database;

        $database->query('select * from documentaries where documentary_id != :documentary_id order by created_at desc limit 4');
        $database->bind('documentary_id', $documentary_id);

        return $database->resultSet();
    }
}
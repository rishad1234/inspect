<?php
class Job{
    
    public static function getAllJobs(){
        $database = new Database;

        $database->query('select * from job_posts order by created_at desc');
        return $database->resultSet();
    }
}
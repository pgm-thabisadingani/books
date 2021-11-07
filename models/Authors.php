<?php

class Author extends BaseModel {

    protected $table = 'authors';
    protected $pk = 'id';

    public static function getBookByAuthorId(int $id) {
        global $db;
    }    

    
        
    private function addAuthor($author) {

        global $db;

        $sql = "INSERT INTO `authors`(`first_name`, `middle_name`, `last_name`)
                VALUES (:first_name, :middle_name, :last_name)";

        $pdo_statement = $db->prepare($sql);

        $pdo_statement->exec(

            [
                ':first_name' => $author->first_name,
                ':middle_name' => $author->middle_name,
                ':last_name' => $author->last_name,
            ]

         );

    }
    

}
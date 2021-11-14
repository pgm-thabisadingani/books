<?php

class Author extends BaseModel {

    protected $table = 'authors';
    protected $pk = 'id';

    public static function getBookByAuthorId(int $id) {
        global $db;
    }    

    
        
     function addAuthor($author) {

        global $db;

        $sql = "INSERT INTO `authors`(`first_name`, `middle_name`, `last_name`)
                VALUES (:first_name, :middle_name, :last_name)";

        $pdo_statement = $db->prepare($sql);
        // echo $sql;

        $pdo_statement->execute(

            [
                ':first_name' => $author->first_name,
                ':middle_name' => $author->middle_name,
                ':last_name' => $author->last_name,
            ]

         );

    }
 
    function deleteById(int $id) {
        global $db;

        $sql = "DELETE FROM `authors` WHERE `id` = :id";
        $pdo_statement = $db->prepare($sql);
        return $pdo_statement->execute([':id' => $id]);

    }  
    
    
    function updateAuthor($author) {

    global $db;
    $sql = "UPDATE  authors
            SET `first_name` = :first_name,
                `middle_name` = :middle_name,
                `last_name` = :last_name
                WHERE `id` =  :id";
    $pdo_statement = $db->prepare($sql);
    return $pdo_statement->execute(

        [
            ':first_name' => $author->first_name,
            ':middle_name' => $author->middle_name,
            ':last_name' => $author->last_name,
            ':id' => $author->id,
        ]
    );

    }

}
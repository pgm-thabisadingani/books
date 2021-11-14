<?php

class Genre extends BaseModel {

    protected $table = 'genres';
    protected $pk = 'id';

 
    function addGenre($genre) {

        global $db;

        $sql = "INSERT INTO `genres`(`name`)
                VALUES (:name)";

        $pdo_statement = $db->prepare($sql);

        $pdo_statement->execute([':name' => $genre->name]);

    }
    

    function deleteById(int $id) {
        global $db;

        $sql = "DELETE FROM `genres` WHERE `id` = :id";
        $pdo_statement = $db->prepare($sql);
        return $pdo_statement->execute([':id' => $id]);

    }


    function updateGenre($genre) {

        global $db;
        $sql = "UPDATE  genres
                SET `name` = :name
                    WHERE `id` =  :id";
        $pdo_statement = $db->prepare($sql);
        return $pdo_statement->execute(
    
            [
                ':name' => $genre->name,
                ':id' => $genre->id,
            ]
        );
    
    }

}
<?php

class Genre extends BaseModel {

    protected $table = 'genres';
    protected $pk = 'id';


    private function addGenre($genre) {

        global $db;

        $sql = "INSERT INTO `genres`(`name`)
                VALUES (:name)";

        $pdo_statement = $db->prepare($sql);

        $pdo_statement->execute([':name' => $genre->name]);

    }

}
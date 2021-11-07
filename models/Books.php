<?php

class Book extends BaseModel {

    protected $table = 'books';
    protected $pk = 'id';

    public static function getGenresByBookId(int $id) {
        
        global $db;

        $sql = 'SELECT `books` . `id`, `books` . `description`, GROUP_CONCAT(`genres` . `name` 
                ORDER BY `genres` . `name`) Genres FROM `books` 
                INNER JOIN `books_genres` on `books_genres`.`book_id` = `books`.`id` 
                INNER JOIN `genres` on `genres`.`id` = `books_genres`.`genre_id` 
                GROUP BY `books` . `id` ,  `books` . `title`
                ';
    
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->bindParam(':id', $id); 
        $pdo_statement->execute();
        return $pdo_statement->fetchAll();

    }

    public static function getAuthorsByBookId(int $id) {
        
        global $db;

        $sql = 'SELECT `books` . `id`, `books` . `description`, GROUP_CONCAT(`authors` . `first_name` , `authors` . `last_name`
                ORDER BY `authors` . `first_name`) Authors FROM `books` 
                INNER JOIN `books_authors` on `books_authors`.`book_id` = `books`.`id` 
                INNER JOIN `authors` on `authors`.`id` = `books_authors`.`author_id` 
                GROUP BY `books` . `id`, `books` . `title`
                ';
    
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->bindParam(':id', $id); 
        $pdo_statement->execute();
        return $pdo_statement->fetchAll();

    }


}
                // Me trying to combine 3 tale (failed), but working on it.

                // SELECT `books` . `id`, `books` . `description`, GROUP_CONCAT(`genres` . `name` 
                // ORDER BY `genres` . `name`) Genres , GROUP_CONCAT(`authors` . `first_name` , `authors` . `last_name`
                // ORDER BY `authors` . `first_name`) Authors FROM `books` 
                // INNER JOIN `books_genres` on `books_genres`.`book_id` = `books`.`id` 
                // INNER JOIN `genres` on `genres`.`id` = `books_genres`.`genre_id` 
                // INNER JOIN `books_authors` on `books_authors`.`book_id` = `books`.`id` 
                // INNER JOIN `authors` on `authors`.`id` = `books_authors`.`author_id`
                // GROUP BY `books` . `id` ,  `books` . `title`


                
// $sql = "INSERT INTO `authors`(`first_name`, `middle_name`,`last_name`)
// VALUES (:first_name, :middle_name, :last_name)";


// $pdo_statement = $db->prepare($sql);

// $pdo_statement = $connect->exec(

// [
// ':first_name' => $author->first_name,
// ':description' => $author->middle_name,
// ':users_id' => $author->last_name,
// ]

// );

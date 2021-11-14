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


    function addBook($book) {
        global $db;
        $sql = "INSERT INTO `books`(`title`, `isbn`, `nr_pages`, `image_url`,`publication_date`, `description`)
                VALUES (:title, :isbn, :nr_pages, :image_url, :publication_date, :description )";
        $pdo_statement = $db->prepare($sql);
        // echo $sql;
        $pdo_statement->execute(
            [
                ':title' => $book->title,
                ':isbn' => $book->isbn,
                ':nr_pages' => $book->nr_pages,
                ':image_url' => $book->image_url,
                ':publication_date' => $book->publication_date,
                ':description' => $book->description,
            ]

         );

    }
    
    function updateBook($book) {

        global $db;
        $sql = "UPDATE  books
                SET `title` = :title,
                    `isbn` = :isbn,
                    `nr_pages` = :nr_pages,
                    `image_url` = :image_url,
                    `publication_date` = :publication_date,
                    `description` = :description
                    WHERE `id` =  :id";
        $pdo_statement = $db->prepare($sql);
        return $pdo_statement->execute(
    
            [
                ':title' => $book->title,
                ':isbn' => $book->isbn,
                ':nr_pages' => $book->nr_pages,
                ':image_url' => $book->image_url,
                ':publication_date' => $book->publication_date,
                ':description' => $book->description,
                ':id' => $book->id
            ]
        );
    
        }

         
    function deleteById($id) {
        global $db;

        $sql = "DELETE FROM `books` WHERE `id` = :id";
        $pdo_statement = $db->prepare($sql);
        return $pdo_statement->execute([':id' => $id]);

    }  

}

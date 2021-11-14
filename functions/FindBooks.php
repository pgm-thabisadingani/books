<?php
    function searchBookByTitle($search_term = '') {

    global $db;

    $exec_var = [];

    if($search_term) {
        $sql = "SELECT * 
        FROM `books` 
        WHERE `title` LIKE ? 
        ORDER BY `id` ASC";

        $exec_var[] = "%$search_term%";

    } else {
        $sql = 'SELECT * 
        FROM `books` 
        ORDER BY `id` ASC';
    }


    $pdo_statement = $db->prepare($sql);
    $pdo_statement->execute($exec_var);
    $data = $pdo_statement->fetchAll();

    return $data;
    }


    function searchAuthorsByTitle($search_term = '') {

        global $db;
    
        $exec_var = [];
    
        if($search_term) {
            $sql = "SELECT * 
            FROM `authors` 
            WHERE `first_name` LIKE ? 
            ORDER BY `id` ASC";
    
            $exec_var[] = "%$search_term%";
    
        } else {
            $sql = 'SELECT * 
            FROM `authors` 
            ORDER BY `id` ASC';
        }
    
    
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute($exec_var);
        $data = $pdo_statement->fetchAll();
    
        return $data;
        }

        function searchGenresByTitle($search_term = '') {

            global $db;
        
            $exec_var = [];
        
            if($search_term) {
                $sql = "SELECT * 
                FROM `genres` 
                WHERE `name` LIKE ? 
                ORDER BY `id` ASC";
        
                $exec_var[] = "%$search_term%";
        
            } else {
                $sql = 'SELECT * 
                FROM `genres` 
                ORDER BY `id` ASC';
            }
        
        
            $pdo_statement = $db->prepare($sql);
            $pdo_statement->execute($exec_var);
            $data = $pdo_statement->fetchAll();
        
            return $data;
            }
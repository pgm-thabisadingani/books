<?php

class GenresController extends BaseController {

protected function index () {
    $this->viewParams['genres'] = Genre::getAll();

    $this->loadView();
    }
    
    
    protected function addGenre (){

        $genre = new Genre(); //create a new instantie

        if(isset($_POST['add_genre'])){

            $genre->name = $_POST['name'];

            addGenre($genre);

        }
        addGenre($genre);
    }


}
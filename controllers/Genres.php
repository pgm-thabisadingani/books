<?php

class GenresController extends BaseController {

protected function index () {
    $this->viewParams['genres'] = Genre::getAll();
    
    if(isset($_POST['delete_genre']) ) { // the button submit target name (form)
        $genre = new Genre();
            $deleted = true;
            $id = trim($_POST['genre_id']); // need to ask the name of the input (input)

            if(empty ($id)){
                $deleted = false;
            }
            if($deleted){
                $genre->deleteById($id);
                echo($id);
                header("Refresh:0");
            }

        }

        $this->loadView();

    }
    
    
    protected function create (){
 //create a new instantie

        if(isset($_POST['add_genre'])){
            $genre = new Genre();
            $genre->name = trim($_POST['name']);

            $genre->addGenre($genre);
            header('Location: /genres');

        }
        $this->loadView();
    }

    protected function update ($params) {

        $this->viewParams['genres'] = Genre::getById($params[0]);

        $genre_id = Genre::getById($params[0]);

        if (isset($_POST['edit_genre'])) {
            $genre = new Genre();
        
            $genre->name = trim( $_POST['name'] );
            $genre->id = $params[0];

            $genre->updateGenre($genre);
            header('Location: /genres');
            
            print_r($genre);
          }

          
        $this->loadView();
    }


}
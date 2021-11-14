<?php

class AuthorsController extends BaseController {

        protected function index () {
        $this->viewParams['authors'] = Author::getAll();


        if(isset($_POST['delete_author']) ) { // the button submit target name (form)
            $author = new Author();
                $deleted = true;
                $id = trim($_POST['author_id']); // need to ask the name of the input (input)

                if(empty ($id)){
                    $deleted = false;
                }
                if($deleted){
                    $author->deleteById($id);
                    echo($id);
                    header("Refresh:0");
                }

            }

            $this->loadView();

    }

    protected function create () {
       
        if(isset($_POST['add_author']) ) {
         $author = new Author();
            $author->first_name = trim( $_POST['first_name'] );
            $author->middle_name = trim( $_POST['middle_name'] );
            $author->last_name = trim( $_POST['last_name'] );

            $author->addAuthor($author);
            header('Location: /authors');
        }

        $this->loadView();  
    }


    protected function update ($params) {

        $this->viewParams['authors'] = Author::getById($params[0]);

        $author_id = Author::getById($params[0]);

        if (isset($_POST['edit_author'])) {
            $author = new Author();
        
            $author->first_name = trim( $_POST['first_name'] );
            $author->middle_name = trim( $_POST['middle_name'] );
            $author->last_name = trim( $_POST['last_name'] );
            $author->id = $params[0];

            $author->updateAuthor( $author);
            header('Location: /authors');
            
            print_r($author);
          }

          
        $this->loadView();
    }


    protected function searchAuthor ($params) {
    }

}
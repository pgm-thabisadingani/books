<?php

class AuthorsController extends BaseController {

        protected function index () {
        $this->viewParams['authors'] = Author::getAll();
        $this->loadView();
    }



    protected function addNewAuthor () {

     $author = new Author();

        if(isset($_POST['add_author']) ) {
            $author->first_name = trim( $_POST['first_name'] );
            $author->middle_name = trim( $_POST['middle_name'] );
            $author->last_name = trim( $_POST['last_name'] );
        }

        $author->addAuthor($author);
        print_r($author);
    }


    protected function editAuthor ($params=[]) {


    }

}
<?php

class BooksController extends BaseController {

    protected function index () {
        $this->viewParams['books'] = Book::getAll();

        $this->loadView();
    }
    
    protected function detail ($params = []) {
        $this->viewParams['books_genres'] = Book::getGenresByBookId($params[0]);
        $this->viewParams['books_authors'] = Book::getAuthorsByBookId($params[0]);
        
        $book = Book::getById($params[0]);
        
        
        if(isset($params[0])) {
            
            if($book->id) {
                $this->viewParams['book'] = $book;
                $this->loadView();
            }
            else {
                //redirect to home
                $this->redirect('/books');
            }
        }
        else {
            //redirect to home
            $this->redirect('/books');
        }
        
    }
    
}
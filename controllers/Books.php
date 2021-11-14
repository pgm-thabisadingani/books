<?php

class BooksController extends BaseController {

    protected function index () {
        $this->viewParams['books'] = Book::getAll();

       if(isset($_POST['delete_book']) ) { // the button submit target name (form)
            $book = new Book();
                $deleted = true;
                $id = trim($_POST['book_id']); // need to ask the name of the input (input)

                if(empty ($id)){
                    $deleted = false;
                }
                if($deleted){
                    $book->deleteById($id);
                    echo($id);
                    header("Refresh:0");
                }

            }

            $this->loadView();
    }
    
    protected function detail ($params) {
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

    protected function create (){
        //create a new instantie
       
               if(isset($_POST['add_book'])){
                   $book = new Book();
                   $uploads_dir = BASE_DIR . '/images/';

                   $book->title = trim($_POST['title']);
                   $book->isbn = trim($_POST['isbn']);
                   $book->nr_pages = trim($_POST['nr_pages']);
                  
                   $book->publication_date = date('Y-m-d', strtotime($_POST['publication_date']));
                   $book->description = trim($_POST['description']);
                   $uploads_dir = BASE_DIR . '/images/';

                   $image = $_FILES['image_url']['name'];
                   if(isset($image) && !empty($image)){     
                       if(is_uploaded_file($_FILES['image_url']['tmp_name'])); {
                           move_uploaded_file($_FILES['image_url']['tmp_name'], $uploads_dir.$image);
                           $book->image_url = $image;
                       }
                   } else {
                       echo 'Add an image';
                   }

                   $book->addBook($book);
                   header('Location: /books');
       
               }
               $this->loadView();
           }

           protected function update ($params){
            //create a new instantie
                    $this->viewParams['books'] = Book::getById($params[0]);

                    $book_id = Book::getById($params[0]);
           
                   if(isset($_POST['edit_book'])){
                       $book = new Book();
                       $uploads_dir = BASE_DIR . '/images/';
    
                       $book->title = trim($_POST['title']);
                       $book->isbn = trim($_POST['isbn']);
                       $book->nr_pages = trim($_POST['nr_pages']);
                      
                       $book->publication_date = date('Y-m-d', strtotime($_POST['publication_date']));
                       $book->description = trim($_POST['description']);
                       $uploads_dir = BASE_DIR . '/images/';
    
                       $image = $_FILES['image_url']['name'];

                       if(isset($image)){     
                           if(is_uploaded_file($_FILES['image_url']['tmp_name'])); {
                               move_uploaded_file($_FILES['image_url']['tmp_name'], $uploads_dir.$image);
                               $book->image_url = $image;
                           }
                       } else {
                           echo 'edit the book';
                       }
                       
                       $book->id = $params[0];

                       $book->updateBook($book);
                      header('Location: /books');

                       print_r($book);
           
                   }
                   $this->loadView();
               }
}


<?php

class HomeController extends BaseController {

    protected function index () {
        $this->viewParams['books'] = Book::getAll();

        $this->viewParams['genres'] = Genre::getAll();
        
        $this->viewParams['authors'] = Author::getAll();

        $this->loadView();
    }

}
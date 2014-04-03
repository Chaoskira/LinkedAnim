<?php
class AuthorsController extends AppController {

    var $name = 'Authors';

    function index() {
        $this->set('authors', $this->Post->find('all'));
    }
}
?>
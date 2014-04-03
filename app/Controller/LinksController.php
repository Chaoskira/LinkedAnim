<?php
class LinksController extends AppController {

    var $name = 'Links';

    function index() {
        $this->set('links', $this->Post->find('all'));
    }
}
?>
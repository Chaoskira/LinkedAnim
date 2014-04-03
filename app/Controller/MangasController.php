<?php
class MangasController extends AppController {

    var $name = 'Mangas';

    function index() {
        $this->set('mangas', $this->Post->find('all'));
    }
}
?>
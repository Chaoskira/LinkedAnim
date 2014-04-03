<?php
class TypesController extends AppController {

    var $name = 'Types';

    function index() {
        $this->set('types', $this->Post->find('all'));
    }
}
?>
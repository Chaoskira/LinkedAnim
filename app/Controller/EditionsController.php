<?php
class EditionsController extends AppController {

    var $name = 'Editions';

    function index() {
        $this->set('editions', $this->Post->find('all'));
    }
}
?>
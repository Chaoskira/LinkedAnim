<?php
class KindsController extends AppController {

    var $name = 'Kinds';

    function index() {
        $this->set('kinds', $this->Post->find('all'));
    }
}
?>
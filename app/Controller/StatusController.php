<?php
class StatusController extends AppController {

    var $name = 'Status';

    function index() {
        $this->set('status', $this->Post->find('all'));
    }
}
?>
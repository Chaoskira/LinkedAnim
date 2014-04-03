<?php
class RatingsController extends AppController {

    var $name = 'Ratings';

    function index() {
        $this->set('ratings', $this->Post->find('all'));
    }
}
?>
<?php

Class Tyrion extends Lannister{

    private $_name = "Tyrion";

    public function __construct() {
        parent::__construct();
        echo 'My name is ' . $this->_name . PHP_EOL;
    }

    public function getSize() {
        return "Short";
    }
}
?>
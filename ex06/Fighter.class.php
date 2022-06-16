<?php
    
    abstract class Fighter {

        public $name;

        public function __construct($someone) {
                $this->name = $someone;
        }

        abstract public function fight($target);
    }
?>
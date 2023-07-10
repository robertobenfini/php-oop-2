<?php

    class Accessories extends Products{
        public $materials;
        public $size;

        function __construct($image, $name, $type, $price, $materials, $size){
            parent::__construct($image, $name, $type, $price);
            $this -> materials = $materials;
            $this -> size = $size;
        }
    }

?>
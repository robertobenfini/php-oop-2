<?php

    class Products {
        public $image;
        public $name;
        public $price;
        public $type;

        function __construct($image, $name, $type, $price){
            $this -> image = $image;
            $this -> name = $name;
            $this -> price = $price;
            $this -> type = $type;
        }
    }

?>
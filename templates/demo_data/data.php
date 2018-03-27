<?php
   class PHPDemos{
        //  Demo vars
        public $title;

        public function __construct(){
            $this->title = "PHP Demos";
        }

        public function setTitle($title){
            $this->title = $title;
        }

   }

   $demos = new PHPDemos;
?>
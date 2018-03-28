<?php
   class PHPDemos{
        //  Demo vars
        public $title;
        public $menus;
        public $tabs;

        public function __construct(){
            $this->title = "PHP Demos";
            $this->menus = ['Home', 'Contact us', 'About Us'];
            $this->tabs = ['Form Demo', 'List Render demo', 'Modal Demo'];
        }

        public function setTitle($title){
            $this->title = $title;
        }

   }

   $demos = new PHPDemos;
?>
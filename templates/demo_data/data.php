<?php
   class PHPDemos{
        //  Demo vars
        public $title;
        public $menus;
        public $tabs;
        public $formFields;

        public function __construct(){
            $this->title = "PHP Demos";
            $this->menus = ['Home', 'Contact us', 'About Us'];
            $this->tabs = ['Form Demo', 'List Render demo', 'Modal Demo'];
            $this->formFields = array('Name' => 'name', 'Age' => 'age', 'Marks' => 'marks', 'Roll no' => 'rnum');
        }

        public function setTitle($title){
            $this->title = $title;
        }

   }

   $demos = new PHPDemos;
?>
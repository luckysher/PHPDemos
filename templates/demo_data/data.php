<?php
   class PHPDemos{
        //  Demo vars
        public $title;
        public $menus;
        public $tabs;
        public $formFields;
        //form data and error fileds

        public $name_error = "";
        public $age;
        public $age_error = "";
        public $marks;
        public $marks_error="";
        public $rnum;
        public $rnum_error = "";

        public function __construct(){
            $this->title = "PHP Demos";
            $this->menus = ['Home', 'Contact us', 'About Us'];
            $this->tabs = ['Form Demo', 'List Render demo', 'Modal Demo'];
            //$this->formFields = array('Name' => 'name', 'Age' => 'age', 'Marks' => 'marks', 'Roll no' => 'rnum');
            $this->formFields = [
                        array('label' => 'Name', 'fname' => 'name', 'placeholder' => 'Enter your name here..' ),
                        array('label' => 'Age', 'fname' => 'age', 'placeholder' => 'Enter your age here..' ),
                        array('label' => 'Marks', 'fname' => 'marks', 'placeholder' => 'Enter your marks here..' ),
                        array('label' => 'Roll no.', 'fname' => 'rnum', 'placeholder' => 'Enter your roll no. here..' )];
           }

        public function setTitle($title){
            $this->title = $title;
        }

   }

   $demos = new PHPDemos;
?>
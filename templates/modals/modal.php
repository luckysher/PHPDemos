<?php

    // modal class for generating modal
    class Modal{

        public $title;
        public $description;
        public $buttons;

        // modal constructor with modal title param
        public function __construct($title){
            $this->title = $title;
        }

        // method for setting modal body text
        public function setBodyText($txt){
            $this->description = $txt;
        }

        // method for setting buttons names
        public function setButtons($btns){
            $this->buttons = $btns;
        }

        // method for showing modal
        public function show(){

        }
    }
?>
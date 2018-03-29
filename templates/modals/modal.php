<?php

    // modal class for generating modal
    class Modal{

        public $title;
        public $description;
        public $buttons;

        public function __construct($title){
            $this->title = $title;
        }

        public function setBodyText($txt){
            $this->description = $txt;
        }

        public function setButtons($btns){
            $this->buttons = $btns;
        }


    }
?>
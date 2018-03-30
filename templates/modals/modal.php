<?php

    // modal class for generating modal
    class Modal{

        public $title;
        public $description;
        public $buttons;

        // modal constructor with modal title param
        public function __construct($title){
            $this->title = $title;
            $this->buttons = ['ok'];
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
            echo '<div class="modal">'.
                 '   <div class="modal-background"></div>'.
                 '       <div class="modal-card">'.
                 '          <header class="modal-card-head">'.
                 '            <p class="modal-card-title">'.$this->title.'</p>'.
                 '            <button class="delete" aria-label="close"></button>'.
                 '          </header>'.
                 '          <section class="modal-card-body">'.
                              $this->description.
                 '           </section>'.
                 '           <footer class="modal-card-foot">';
                              foreach($this->buttons as $button){
                                 echo '<button class="button is-success">'.$button.'</button>';
                             }
            echo '           </footer>'.
                 '   </div>'.
                 '</div>';
        }
    }
    echo '<h2>Calling model....</h2>';
?>
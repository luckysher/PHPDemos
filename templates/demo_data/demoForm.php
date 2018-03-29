<?php

    class DemoForm {
        // form extra fields
        public $formName;
        // form id
        public $fid;

         // constructor
         public __constructor(){
            $this-> formName = "Demo Form";
            $this-> fid = "dform";
         }

        // add start form tag in demo form
        public startForm(){
            echo '<form id="$this->fid">';
        }

        // add various fields in form
        public addFormFields(){
            foreach($demos->formFields as $label => $fname){
                  echo '<div class="field">'.
                       '     <label class="label">$label</label>'.
                       '     <div class="control">'.
                       '         <input class="input" type="text" placeholder="Text input" name="$fname">'.
                       '     </div>'.
                       '</div>';
            }
        }

        // add end form tag
        public endForm(){
            echo '</form">';
        }

    }
?>
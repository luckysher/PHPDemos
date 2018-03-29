<?php

    class DemoForm {
        // form extra fields
        public $formName;
        // form id
        public $fid;
        public $methodType;

         // constructor
         public __constructor(){
            $this-> formName = "Demo Form";
            $this-> fid = "dform";
            $this-> methodType = "post";
         }

        // add start form tag in demo form
        public startForm(){
            echo '<form id="$this->fid" method="$this->methodType">';
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


        // add submit button in form
        public addSubmitButton(){
                  echo '<div class="field">'.
                       '     <div class="control">'.
                       '         <button type="submit" value="Add Details"></button>'.
                       '     </div>'.
                       '</div>';
        }

        // add end form tag
        public endForm(){
            echo '</form">';
        }

    }
?>
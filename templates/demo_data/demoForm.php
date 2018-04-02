<?php

    class DemoForm {
        // form extra fields
        public $formName;
        // form id
        public $fid;
        public $methodType;
        public $formFields;



         // constructor
         public function __construct($dClass){
            $this-> formName = "Demo Form";
            $this-> fid = "dform";
            $this-> methodType = "post";
            $this-> $marks_error = "checking..";
            $this-> formFields = $dClass->formFields;
         }

        // add start form tag in demo form
        public function startForm(){
            echo '<form id="'.$this->fid.'" action="index.php" method="'.$this->methodType.'">';
        }

        // add various fields in form
        public function addFormFields(){
            foreach($this->formFields as $fDetails){
                  echo '<div class="field">'.
                       '     <label class="label">'.$fDetails["label"].'</label>'.
                       '     <div class="control">'.
                       '         <input class="input" type="text" placeholder="'.$fDetails["placeholder"].'" name="'.$fDetails["fname"].'" val="'.$fDetails["val"].'">';
                       if (!empty($fDetails["errors"])){
                            echo '         <h2 class="has-text-danger"><span>*</span><span>'.$fDetails["errors"].'</span></h2>'.
                       }
                       '     </div>'.
                       '</div>';
          }
        }

        // add submit button in form
        public function addSubmitButton(){
                  echo '<div class="field">'.
                       '     <div class="control">'.
                       '         <button class="button is-link" name="addDetails">Add Details</button>'.
                       '     </div>'.
                       '</div>';
        }

        // add end form tag
        public function endForm(){
            echo '</form">';
        }

    }

    $demoForm = new DemoForm($demos);
?>
<?php

    class DemoForm {
        // form extra fields
        public $formName;
        // form id
        public $fid;
        public $methodType;
        public $formFields;

        //form data and error fileds
        public $name = "";
        public $name_error = "";
        public $age;
        public $age_error = "";
        public $marks;
        public $marks_error = "checking";
        public $rnum;
        public $rnum_error = "";

         // constructor
         public function __construct($dClass){
            $this-> formName = "Demo Form";
            $this-> fid = "dform";
            $this-> methodType = "post";
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
                       '         <input class="input" type="text" placeholder="'.$fDetails["placeholder"].'" name="'.$fDetails["fname"].'">'.
                       '         <h2 class="has-text-danger"><span>*</span><span>'.$this->($fDetails["fname"]).'</span></h2>'.
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
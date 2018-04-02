<?php
// Various form action functions

// check the error for th form data here
function checkFormErrors($demos){

    if(empty($_POST["age"])){
        $demos->formFields[1]["val"] = $_POST["age"];
        $demos->formFields[1]["errors"] = "Age should be non empty/valid integer";
    }
}

// method for showing modal
function showModal(){
        $modal = new Modal("Form Data Modal");
        $description = "Your Post the:".
                       "   form fields : Name  :  ".$_POST["name"].
                       "   form fields : Age  :  ".$_POST["age"].
                       "   form fields : Marks  :  ".$_POST["marks"].
                       "   form fields : Roll No  :  ".$_POST["rnum"];

        $modal->setBodyText($description);
        $modal->show();
}

// if any data posted the
// check the errors and
// show the modal
 if ($_POST){
    checkFormErrors($demos);
    showModal();
 }

?>
<?php

function checkFormErrors($demos){
    if(empty($_POST["age"])){
        $demos->formFields[1]["val"] = $_POST["age"];
        $demos->formFields[1]["errors"] = "Age should be non empty/valid integer";
    }
}

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

 if ($_POST){
    checkFormErrors($demos);
    showModal();
 }

?>
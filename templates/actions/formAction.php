<?php

function checkFormErrors($demos){
    if(empty($_POST["age"])){
        $demos->formFields[1]["val"] = $_POST["age"];
        $demos->formFields[1]["errors"] = "Age should be non empty/valid integer";
    }
}

 if ($_POST){
        $modal = new Modal("Form Data Demo with Modal");
        $description = "modal description:".
                       "   form fields : Name  :  ".$_POST["name"].
                       "   form fields : Age  :  ".$_POST["age"].
                       "   form fields : Marks  :  ".$_POST["marks"].
                       "   form fields : Roll No  :  ".$_POST["rnum"];

        $modal->setBodyText($description);
        $modal->show();
 }
?>
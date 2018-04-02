<?php
// Various form action functions

// check the error for th form data here
function checkFormErrors($demos){
    $errors = false;
    //name check
    if(empty($_POST["name"])){
        $errors = True;
        $demos->formFields[0]["name"] = $_POST["name"];
        $demos->formFields[0]["errors"] = "Name should be non empty/valid  string";
    }
    //age check
     if(empty($_POST["age"])){
        $errors = True;
        $demos->formFields[1]["val"] = $_POST["age"];
        $demos->formFields[1]["errors"] = "Age should be non empty/valid integer";
    }
    //marks check
    if(empty($_POST["marks"])){
        $errors = True;
        $demos->formFields[2]["val"] = $_POST["marks"];
        $demos->formFields[2]["errors"] = "Marks is required";
    }
    // roll num check
    if(empty($_POST["rnum"])){
        $errors = True;
        $demos->formFields[3]["val"] = $_POST["rnum"];
        $demos->formFields[3]["errors"] = "Roll number is required";
    }
    return $errors;
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

        // show the actual modal
        $modal->show();
}

// if any data posted the
// check the errors and
// show the modal
 if ($_POST){
    if(!checkFormErrors($demos)){
        showModal();
    }
 }

?>
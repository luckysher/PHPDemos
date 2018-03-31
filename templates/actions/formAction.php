<?php
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
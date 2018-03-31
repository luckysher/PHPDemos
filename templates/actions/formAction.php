<?php
 if ($_POST){
        $modal = new Modal("Form Data Demo with Modal");
        $description = "modal description:".
        foreach($_POST as $fname => $value){
                       "   form field : ".$fname."  :  ".$value;.
        }
                        "".
                        "";
        $modal->setBodyText($description);
        $modal->show();
 }
?>
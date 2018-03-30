<?php

 if (isset($_POST['submit'])){
        $modal = new Modal("Form Data Demo with Modal");
        $description = "modal description: form field: name: value is : ".$_POST['name'];
        $modal->setBodyText($description);
        $modal->show();
 }
?>
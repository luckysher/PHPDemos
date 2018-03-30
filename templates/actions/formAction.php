
<?php
include '../modals/modal.php';

 if (isset($_POST['addDetails'])){
        $modal = new Modal("Form Data Demo with Modal");
        $description = "modal description: form field: name: value is : ".$_POST['name'];
        $modal->setBodyText($description);
        $modal->show();
 }
?>
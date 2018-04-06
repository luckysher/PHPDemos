<?php
  $active = '';
  //$form = false;
  //$modal = false;
  //$list = false;

  if($_GET):
    if(isset($_GET["show"])):
        $active = $_GET["show"];
     //=== "#form"):
        //$form = true;
    //    $active =
    //else if($_GET("show") === "#modal"):
    //    $modal = true;
    //else if($_GET("show") === "#list"):
    //    $list = true;
    endif;
  endif;

?>
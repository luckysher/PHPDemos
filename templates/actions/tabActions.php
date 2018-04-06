<?php
  $form = false;
  $modal = false;
  $list = false;

  if($_GET):
    if($_GET("show") === "#form"):
        $form = true;
    else if($_GET("show") === "#modal"):
        $modal = true;

    endif;
  endif;


?>
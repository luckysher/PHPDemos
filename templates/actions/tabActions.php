<?php
  $form = false;
  $modal = false;
  $list = false;

  if($_GET):
    if($_GET("show") === "#form"):
        $form = true;

    endif;
  endif;


?>
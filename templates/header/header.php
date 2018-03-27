<?php

echo '<nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" alt="PHP Demos" width="112" height="28">
            </a>
            <div class="navbar-burger burger">
              <span></span>
              <span></span>
              <span></span>
            </div>
        </div>
        <div class="navbar-menu">
        <div class="navbar-start">';

foreach($demos->menus as $menu){
   echo '<a class="navbar-item" href="/">'.
             $menu
         .'</a>';
}

echo '        </div>
             </div>
           <div class="navbar-end">
         </div>
       </div>
      </nav>';
?>





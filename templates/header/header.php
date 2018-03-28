<?php

echo '<nav class="navbar is-primary">
        <div class="container">
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
        <div class="navbar-start">
        </div>
        <div class="navbar-end">';
        foreach($demos->menus as $menu){
            echo '<a class="navbar-items" href="/">'.
                 $menu
                .'</a>';
                }

echo '        </div>
            </div>
         </div>
       </div>
      </nav>';
?>





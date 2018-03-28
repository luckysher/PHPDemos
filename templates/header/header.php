<?php
echo '<nav class="navbar is-primary">
     '    <div class="container">'.
     '        <div class="navbar-brand" style="margin-left:10px;">'.
     '           <a class="navbar-item" href="/">'.
     '            <img src="https://bulma.io/images/bulma-logo-white.png" alt="PHP Demos " width="112" height="28">'.
     '           </a>'.
     '           <div class="navbar-burger burger">'.
     '              <span></span>'.
     '              <span></span>'.
     '              <span></span>'.
     '           </div>'.
     '        </div>'.
     '        <div class="navbar-menu">'.
     '           <div class="navbar-start">'.
     '          </div>'.
     '           <div class="navbar-end">';
                 foreach($demos->menus as $menu){
                    echo '<a class="navbar-item" style="margin-right:15px;" href="/">'.
                      $menu.
                    '</a>';
                    }
echo '          </div>'.
     '      </div>'.
     '  </div>'.
     '</nav>';
?>




<?php

echo '<!-- Demo form class -->';
    include 'templates/demo_data/demoForm.php';
echo '<!-- Demo form class -->';

echo '<div class="page">'.
     '    <div class="banner hero-body is-primary">'.
     '       <div class="hero-body container">'.
     '          <div class="columns is-vcentered">'.
     '             <div class="column">'.
     '                 <h3 class="title">PHP Demos</h3>'.
     '                 <h3 class="subtitle">Using bulma css framework</h3>'.
     '              </div>'.
     '           </div>'.
     '        </div>'.
     '    </div>'.
     '    <div class="columns" id="formdemo">'.
     '        <div class="column">';

echo '<!-- Demo form start here -->\n';
     $demoForm->startForm();
     $demoForm->addFormFields();
     $demoForm->addSubmitButton();
     $demoForm->endForm();
echo '<!-- Demo form end here -->\n';


echo '        </div>'.
     '     </div>'.
     '</div>';
?>

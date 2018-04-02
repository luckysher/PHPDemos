<?php
echo '<!-- Demo modal class -->';
    include 'templates/modals/modal.php';
echo '<!-- Demo modal class -->';

echo '<!-- Demo formAction -->';
    include 'templates/actions/formAction.php';
echo '<!-- Demo form action -->';

echo '<!-- Demo form class -->';
    include 'templates/demo_data/demoForm.php';
echo '<!-- Demo form class -->';


echo '<div class="page">'.
     '    <div class="banner hero is-link">'.
     '       <div class="hero-body container">'.
     '          <div class="columns is-vcentered">'.
     '             <div class="column">'.
     '                 <h3 class="title">PHP Demos</h3>'.
     '                 <h3 class="subtitle">Using bulma css framework</h3>'.
     '              </div>'.
     '           </div>'.
     '        </div>'.
     '      </div>'.
     '      <div class="container" id="demos" style="margin-top:50px;">'.
     '        <div class="columns" id="formdemo">'.
     '           <div class="column">';
                    echo '<!-- Demo form start here -->';
                         $demoForm->startForm();
                         $demoForm->addFormFields();
                         $demoForm->addSubmitButton();
                         $demoForm->endForm();
                    echo '<!-- Demo form end here -->';

echo '           </div>'.
     '        </div>'.
     '    </div>'.
     '</div>';
?>

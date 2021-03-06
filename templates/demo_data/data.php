<?php
// Data class for PHP demo
// set the various data here

   class PHPDemos{
        //  Demo vars
        public $title;
        public $menus;
        public $tabs;
        public $formFields;

        // constructor
        public function __construct(){
            $this->title = "PHP Demos";
            $this->menus = ['Home', 'Contact us', 'About Us'];
            $this->tabs = [ array('form-demo' => 'Form Demo'),
                            array('list-demo' => 'List Render demo'),
                            array('modal-demo' => 'Modal Demo')];

            // set the other fields with label etc here.
            $this->formFields = [
                        array('label' => 'Name', 'fname' => 'name', 'placeholder' => 'Enter your name here..', 'val' => '', 'errors' => ''),
                        array('label' => 'Age', 'fname' => 'age', 'placeholder' => 'Enter your age here..', 'val' => '', 'errors' => ''),
                        array('label' => 'Marks', 'fname' => 'marks', 'placeholder' => 'Enter your marks here..', 'val' => '', 'errors' => ''),
                        array('label' => 'Roll no.', 'fname' => 'rnum', 'placeholder' => 'Enter your roll no. here..', 'val' => '', 'errors' => '')];
           }

        // set the title for the page
        public function setTitle($title){
            $this->title = $title;
        }
   }

   class Tabs{
       public $tabs;

       public function __construct($tabNamesArr){
            if (!empty($tabNamesArr)){
                $this->tabs = $tabNamesArr;
         }
       }

       public function addTabName($tabName){
            $this->tabs.append($tabName);
       }

       public function renderTabs($active){
       echo '<div class="tabs is-toggle is-toggle-rounded is-centered">'.
            '  <ul>';
       foreach($this->tabs as $tab):
            foreach($tab as $path => $tabName):
                if (!empty($active) && $active === $path):
                    echo '<li class="is-active">';
                else:
                    echo '<li>';
                endif;
                echo  '  <a href="index.php?show='.$path.'">'.
                      '     <span>' .$tabName. '</span>'.
                      '  </a>'.
                      '</li">';
            endforeach;
       endforeach;
       echo '   </ul>'.
            '</div>';
       }
   }
   $demos = new PHPDemos;
   $Tabs = new Tabs($demos->tabs);
?>
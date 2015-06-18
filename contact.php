<?php

require_once 'include/functions.php';

print_page('Contact', function() {

?>

   <div class='nav-container mini'>
      <?php print_nav(true); ?>
   </div>

   <div class=contactinfo>
      <div class=title>
         Philip Peterson, Software Developer
      </div>
      <div class=phone>
         Phone: <a href="tel:4079378649">407.937.8649</a>
      </div>
      <div class=email>
         <a href="mailto:ppeterson@ufl.edu">ppeterson@ufl.edu</a>
      </div>
   </div>

<?php

});

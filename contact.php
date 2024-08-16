<?php

require_once 'include/functions.php';

print_page('Contact', function() {

?>

   <div class='nav-container mini'>
      <?php print_nav(true); ?>
   </div>

   <div class=contactinfo>
      <div class=title>
         Philip Peterson - Software Architect
      </div>
      <div class=phone>
         Phone: <a href="tel:+14155836433">+1 415-583-6433</a>
      </div>
      <div class=email>
         <a href="mailto:peterson@sent.com">peterson@sent.com</a>
      </div>
   </div>

<?php

});

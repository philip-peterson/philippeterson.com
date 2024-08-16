<?php

require_once 'include/functions.php';

print_page('', function() {

?>

<div class='headshot'>
   <a href="mailto:peterson@sent.com">
      <img
         src="images/headshot.png"
         alt="A picture of Philip Peterson set atop the beautiful green cliffs of Ireland"
         class='headshot'
         title="Click on my face to contact me."
      >
   </a>
</div>

<div class='nav-container'>
   <?php print_nav(false); ?>
</div>

<?php

});

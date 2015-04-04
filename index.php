<?php

require_once 'include/functions.php';

print_page('', function() {

?>

<div class='headshot'>
   <a href="mailto:philip.c.peterson@gmail.com">
      <img
         src="images/headshot.png"
         alt="A picture of Philip Peterson in a location which can be quite accurately located via Google reverse image search"
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

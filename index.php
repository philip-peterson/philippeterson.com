<?php

require_once 'include/functions.php';

print_page('', function() {

?>

<div class='headshot'>
   <a href="mailto:peterson@sent.com" class="profile-photo">
      <img
         src="images/headshot.jpg"
         alt="A professional headshot of Philip Peterson"
         class='headshot'
         title="You can click on my face to contact me."
      >
   </a>
   <div class='nav-container'>
      <div class='title'>Philip Peterson</div>
      <?php print_nav(false); ?>
   </div>
</div>


<?php

});

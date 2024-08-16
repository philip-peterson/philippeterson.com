<?php

function print_page($title, $body_func) {

?><!doctype html>
<html>
<head>
   <title><?php if(!empty($title)) { echo "$title &ndash; ";} ?>Philip Peterson | Software Architect</title>
   <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
   <link rel='stylesheet' type='text/css' href='css/style.css'>
   <script type='text/javascript' src='js/jquery.min.js'></script>
   <script type='text/javascript' src='js/growy.js'></script>
</head>
<body>

<?php
   $body_func();
   include_once __DIR__ . "/analyticstracking.php";
?>

</body>
</html>

<?php
}


function print_nav($home = false) {
?>
      <div class='nav'>
         <?php
            if ($home) {
         ?>
               <h1>
                  <a href="/">
                     Home
                  </a>
                  <div class='growy-underline'></div>
               </h1>
         <?php
            }
         ?>
         <h1>
            <a href="/resume">
               R&eacute;sum&eacute;
            </a>
            <div class='growy-underline'></div>
         </h1>
         <h1>
            <a href="https://github.com/philip-peterson">
               GitHub
            </a>
            <div class='growy-underline'></div>
         </h1>
         <h1 style="text-align: center;">
            <a href="/contact">
               Contact Info
            </a>
            <div class='growy-underline'></div>
         </h1>
      </div>
<?php
}

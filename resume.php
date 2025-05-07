<?php

require_once 'include/functions.php';

print_page('R&eacute;sum&eacute;', function() {

?>

   <div class='nav-container mini'>
      <?php print_nav(true); ?>
   </div>

    <style>

        .resume a {
            color: blue;
        }

        .resume {
            background-color: white;
            width: 8.5in;
            height: 11in;
            border: 1px solid gray;
            margin: 2em auto;
            font-family: "Times New Roman";
            font-size: 11pt;
            padding: .5in;
            padding-top: .25in;
            box-sizing: border-box;
        }

        .printbutton {
            text-align: center;
        }

        @media print {
            .printbutton {
                display: none;
            }
            .resume {
                border: 0;
                margin: 0;
            }
            .nav-container {
                display: none;
            }
            html, body {
                margin: 0;
                padding: 0;
                width: 100%;
            }
        }
        
        .resume .section {
            margin-top: 1em;
        }
        .resume .section:first-child {
            margin-top: 0;
        }

        .resume .header {
            font-weight: bold;
        }

        .resume .section > .header {
            font-size: 1.1em;
            margin-bottom: .5em;
            border-bottom: 2px solid black;
        }

        .resume .subgroup > .header {
            text-decoration: underline;
            margin-bottom: .4em;
            margin-top: .2em;
        }
        
        .resume .subgroup > .contents {
            margin-left: 3em;
        }

        /* Other qualifications */

        .resume .oqual {
            font-weight: bold;
        }

        /* Jobs */

        .resume .position, .resume .employer {
            font-weight: bold;
        }

        .resume .period {
            float: right;
        }

        .resume .job-details {
            position: relative;
            left: 0;
            top: 0;
        }

        .resume .job-details > div {
            display: inline-block;
        }

        .resume .job-details > .url {
            position: absolute;
            left: 23em;
            font-style: italic;
        }

    </style>

    <div class='resume' style='position: relative; padding: 0;'>
	<iframe src="/resume.pdf" style='position: absolute; left: 0; top: 0; right: 0; bottom: 0 ' width="100%" height="100%" name="resume">
	    You must have iframes enabled to read this resume. Thank you.
        </iframe>
    </div> <!-- resume -->

    <div class='printbutton'>
       <a href="javascript:self.frames.resume.print();">Print this r&eacute;sum&eacute;</a>
    </div>

<?php

}, 'class="html-resume"', 'class="body-resume"');

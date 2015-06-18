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
            font-family: Calibri, Cambria, Helvetica, Arial, sans-serif;
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

    <div class='resume'>
        <div class='section'>
            <div class='name'>Philip Peterson</div>
            <div class='phone'>
               &#x28;&#x34;&#x30;&#x37;&#x29;&#x20;&#x39;&#x33;&#x37;&#x2D;&#x38;&#x36;&#x34;&#x39;
            </div>
            <div class='email'>philip.c.peterson@gmail.com</div>
        </div>
        <div class='section'>
            <div class='header'>Platforms / Languages</div>
            <div class='subgroup'>
                <div class='header'>Web / Database</div>
                <div class='contents'>
                    HTML/CSS/JavaScript (+ HTML5 APIs, jQuery, MEAN.JS), MySQL, PHP (+ WordPress), Python (Flask, some Django)
                </div>
            </div>
            <div class='subgroup'>
                <div class='header'>Other Languages</div>
                <div class='contents'>
                    Java (+ Processing), .NET (Mono &mdash; C#, Boo, JScript.NET-like language), C++, Bash scripting,
                    C, MATLAB, FORTRAN, Cg/HLSL, MIPS assembly (RISC architecture)
                </div>
            </div>
            <div class='subgroup'>
                <div class='header'>Other platforms or technologies I am familiar with</div>
                <div class='contents'>
                    Linux / UNIX, Windows, Mac OS X, Unity 3D, Unreal Engine 4, Blender 3D, IRC, Mercurial, Git
                </div>
            </div>
        </div>

        <div class='section'>
            <div class='header'>Project Involvement and Work Experience</div>

            <div class='job'>
                <div class='period'>2009 &ndash; Present</div>
                <div class='job-details'>
                    <div class='employer'>59 Volt Entertainment</div>
                    <div class='location'>(remote, side project)</div>
                    <div class='url'><a href="http://starryexpanse.com/">http://starryexpanse.com/</a></div>
                </div>
                <div class='position'>
                    Director and Software Developer
                </div>
                <ul class='summary'>
                    <li>Organized and led a team of approximately fifteen people in a video game project</li>
                    <li>Worked with Unreal Engine 4 in C++</li>
                    <li>Developed internal web tools</li>
                    <li>Designed/implemented gameplay systems and computational geometry solutions</li>
                </ul>
            </div>

            <div class='job'>
                <div class='period'>May 2013 &ndash; October 2014</div>
                <div class='job-details'>
                    <div class='employer'>Gleim Publications, Inc.</div><div
                        class='location'>, Gainesville, FL</div>
                    <div class='url'>
                        <a href="http://gleim.com/">http://gleim.com/</a>
                    </div>
                </div>
                <div class='position'>
                    Software Developer (Front-end and back-end)
                </div>
                <ul class='summary'>
                    <li>Extended and refactored internal and external web applications and utilities</li>
                    <li>Developed database code</li>
                    <li>Documented new and existing systems/software</li>
                    <li>Implemented/interfaced with components of large business logic codebase</li>
                    <li>Gained experience working with and writing shell scripts for Linux systems</li>
                    <li>Contributed to educational and business platform software for a medium-sized publication company</li>
                </ul>
            </div>

            <div class='job'>
                <div class='period'>April 2011 &ndash; July 2011</div>
                <div class='job-details'>
                    <div class='employer'>Grooveshark</div><div class='location'>, Gainesville, FL</div>
                    <div class='url'>
                        <a href="http://escapemg.com/">http://escapemg.com/</a>
                    </div>
                </div>
                <div class='position'>
                    Systems Intern
                </div>
                <ul class='summary'>
                    <li>Researched HTML5 APIs, developed code to offload audio file processing from the server side onto the client side</li>
                    <li>Designed and implemented a web application database, frontend, and RESTful backend</li>
                </ul>
            </div>
        </div> <!-- section -->

        <div class='section'>
            <div class='header'>Other Qualifications</div>
            <div class='subgroup'>
                <div class='header'>Accolades</div>
                <div class='contents'>
                    <span class='oqual'>352 Media Group / 352 Inc. Web Development Competition</span> &mdash; 1st place (2 times)
                </div>
            </div>
            <div class='subgroup'>
                <div class='header'>Education</div>
                <div class='contents'>
                    <strong>Pursuant of B.S. in Computer Science (expected August 2015)</strong>, University of Florida, Gainesville, FL
                </div>
            </div>
            <div class='subgroup'>
                <div class='header'>Smaller side projects</div>
                <div class='contents'>
                    <ul>
                        <li>
                        <a href="https://github.com/philip-peterson/Pyternion">Pyternion</a>
                        &mdash; Quaternion (3D rotation math) library for Python
                        <li>
                        <a href="https://github.com/philip-peterson/WikiChecker">WikiChecker</a>
                        &mdash; Tool for verifying navigability of a MediaWiki wiki
                        <li>
                        <a href="https://github.com/starryexpanse/MagBot">MagBot</a> &mdash; Collection of IRC bot plugins for logging and offline message storage
                        <li>
                        <a href="https://github.com/starryexpanse/irc-log-viewer">irc-log-viewer</a>
                        &mdash; Flask application for reading IRC channel logs
                    </ul>
                    <ul>
                    Please see GitHub for more: <a href="https://github.com/philip-peterson">github.com/philip-peterson</a>
                    and <a href="https://github.com/starryexpanse">github.com/starryexpanse</a>
                    </ul>
                </div>
            </div>
        </div>

    </div> <!-- resume -->

    <div class='printbutton'>
       <a href="javascript:print();">Print this r&eacute;sum&eacute;</a>
    </div>

<?php

});

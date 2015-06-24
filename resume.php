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

    <div class='resume'>
        <div class='section'>
            <div class='name'>Philip Peterson, Software Developer</div>
            <div class='phone'>
               &#x28;&#x34;&#x30;&#x37;&#x29;&#x20;&#x39;&#x33;&#x37;&#x2D;&#x38;&#x36;&#x34;&#x39;
            </div>
            <div class='email'>ppeterson@ufl.edu</div>
        </div>
        <div class='section'>
            <div class='header'>Platforms / Languages</div>
            <div class='subgroup'>
                <div class='header'>Strong</div>
                <div class='contents'>
                    HTML/CSS/JavaScript (+ HTML5 APIs, jQuery, MEAN.JS), SQL, PHP, Python (+ Flask)
                </div>
            </div>
            <div class='subgroup'>
                <div class='header'>Proficient</div>
                <div class='contents'>
                    Java (+ Processing), .NET (Mono &mdash; C# et al.), C++, Bash,
                    C, MATLAB, Cg/HLSL, MIPS
                </div>
            </div>
        </div>

        <div class='section'>
            <div class='header'>Project Involvement and Work Experience</div>

            <div class='job'>
                <div class='period'>2015 &ndash; Present</div>
                <div class='job-details'>
                    <div class='employer'>University of Florida</div>
                    <div class='location'>(Gainesville, FL)</div>
                </div>
                <div class='position'>
                    Software Developer
                </div>
                <ul class='summary'>
                    <li>Working with a professor to develop a collaboration platform for surgeons</li>
                    <li>Using Flask to design a RESTful API as a backend, plus</li>
                    <li>Using a single-page app architecture for frontend</li>
                </ul>
            </div>

            <div class='job'>
                <div class='period'>2009 &ndash; Present</div>
                <div class='job-details'>
                    <div class='employer'>59 Volt Entertainment</div>
                    <div class='location'>(remote, side project)</div>
                    <div class='url'><a href="http://starryexpanse.com/">http://starryexpanse.com/</a></div>
                </div>
                <div class='position'>
                    Software Developer and Co-Founder
                </div>
                <ul class='summary'>
                    <li>Ongoing video game re-creation project using UE4</li>
                    <li>Developed an internal-use logging IRC chatbot with message delivery capabilities and a corresponding log-viewer webapp</li>
                    <li>Designed large gameplay system with many subsystems</li>
                    <li>Designed a system to handle interactivity and restorable game state</li>
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
                    Software Developer (Frontend and backend)
                </div>
                <ul class='summary'>
                    <li>Implemented an audio streaming system, plus a companion internal content management system</li>
                    <li>Extended and refactored web code and utilities</li>
                    <li>Documented systems</li>
                    <li>Extended and refactored large business logic codebase</li>
                    <li>Developed efficient database queries</li>
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
                    <li>Used new HTML5 APIs to offload audio file processing from the server onto the client</li>
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
                <div class='header'>Side projects</div>
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

<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/drwho" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=drwho" ;
$project = new project_object("drwho", "Dr Who: White people dance", "https://github.com/aidansean/drwho", "http://aidansean.com/projects/?tag=drwho", "drwho/images/project.jpg", "drwho/images/project_bw.jpg", "I had had an idea for a very long time, which was to animate a song using the canvas and a YouTube video.  Someone sent a <tt>gif</tt> image of some Dr Who actors dancing badly, and I saw this as an opportunity to test out my idea in the simplest way possible.  So I put the <tt>gif</tt> together with the YouTube song and button to play/stop the music and animation.", "Frivolous", "CSS,HTML,JavaScript,YouTube") ;
?>
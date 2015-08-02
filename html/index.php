<?php

$title = 'White people dance' ;

$js_scripts = array() ;
$js_scripts[] = 'functions.js' ;
$js_scripts[] = 'youtube_jsapi.js' ;
$stylesheets = array() ;
$stylesheets[] = 'style.css' ;

$fb_image = 'freeze.jpg' ;
include('../_core/preamble.php') ;
?>

<div id="div_image_wrapper">
  <img id="img_dance" src="freeze.jpg" alt="White people dance"/>
  <input type="submit" id="submit_play" value="Dance!"/>
  <div class="youtube_container">
    <object width="645px" height="0px" id="youtube_player" type="application/x-shockwave-flash" data="https://www.youtube.com/v/XGXI5n5YpVs?version=3&amp;enablejsapi=1">
      <param name="movie" id="youtube_object_movie" value=""/>
      <param name="allowScriptAccess" value="always"/>
      <param name="allowFullScreen" value="true" />
    </object>
    <p class="center">Sources: <a href="http://giphy.com/gifs/matt-smith-dancing-Z9fYur6jXZphm">giphy</a> / <a href="https://www.youtube.com/watch?v=XGXI5n5YpVs">YouTube</a></p>
  </div>
</div>
    
<?php foot() ; ?>

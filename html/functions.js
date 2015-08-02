var youtube= null ;
function start(){
  document.getElementById('submit_play').addEventListener('click', toggle_play, false) ; 
  youtube = document.getElementById('youtube_player') ;
}

function onYouTubePlayerReady(id){
  youtube.playVideo() ;
}

function toggle_play(){
  var submit = document.getElementById('submit_play') ;
  if(submit.value=='Dance!'){
    submit.value = 'Stop dancing!' ;
    document.getElementById('img_dance').src = 'giphy.gif' ;
    youtube.playVideo() ;
  }
  else{
    submit.value = 'Dance!' ;
    document.getElementById('img_dance').src = 'freeze.jpg' ;
    youtube.pauseVideo() ;
  }
}

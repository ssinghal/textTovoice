<?php
 
// Convert Words (text) to Speech (MP3)
// ------------------------------------
   $words = substr($_GET['words'], 0, 100);
   $words = urlencode($_GET['words']);
   $file  = md5($words);
   $file = "audio/" . $file . ".mp3";
 
// If the MP3 file exists, do not create a new request
   if (!file_exists($file)) {
     $mp3 = file_get_contents(
        'http://translate.google.com/translate_tts?q=' . $words;
     file_put_contents($file, $mp3);
   }
?>
 
// Embed the MP3 file using the AUDIO tag of HTML5
<audio controls="controls" autoplay="autoplay">
  <source src="<? echo $file; ?>" type="audio/mp3" />
</audio>

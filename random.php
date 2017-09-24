<html>

<title>refresh for dank memes</title>

<style>
body {background-color:black}
body {cursor: url('xp-middle-finger.cur'), default;}
h1   {color:white}
h5   {color:white}
p    {color:white}
hr   {color:grey}

</style>
<center>

<body>

<?php

$imglist='';
//$img_folder is the variable that holds the path to the swf files.
// see that you dont forget about the "/" at the end
$img_folder = "images/";
mt_srand((double)microtime()*1000);
//use the directory class
$imgs = dir($img_folder);
//read all files from the directory, ad them to a list
while ($file = $imgs->read()) {
if (eregi("swf", $file))
$imglist .= "$file ";
} closedir($imgs->handle);
//put all images into an array
$imglist = explode(" ", $imglist);
$no = sizeof($imglist)-2;
//generate a random number between 0 and the number of images
$random = mt_rand(0, $no);
$image = $imglist[$random];
//display random swf
echo '<embed src="'.$img_folder.$image.'" quality="high" width="640" height="480" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" style="width:877.714285714286px; height: 616.864864864865px;"></embed>';
echo '<center><h5><a href="http://rootme.tk/images/' . $image . '">Link to SWF</a></h5></center>'

?>
<h5><A HREF="http://rootme.tk/images">Image Index</A>
<h1><A HREF="javascript:history.go(0)">Click for a new SWF!</A></h1>
</body>

<h5><A HREF="http://rootme.tk"><img src="http://rootme.tk/fire.gif"rootme.tk</A></h5>
</center>
</html>

<?php
include 'bioArray.php';

?>



<!DOCTYPE html >
<html>
<head>
<title>Antiquity</title>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" /> -->
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

  /*foreach ($images as $id => $value) {
*/



/*foreach ($images as $id => $value) {*/

if(isset($_GET['id'])){
	$id = $_GET['id'] ;

echo '<div id="wrapper">';
  echo '<div id="head"> <img src="images/corner.jpg" alt="" />';

  echo '<h1>'.$images[$id]["title"].'</h1>';
  echo '</div>';
  echo '<div id="left_column">';
    echo '<h1>About</h1>';
    echo '<img src="images/'.$images[$id]["auth"].'"class = "center">
    <ul class="links">';
      echo '<li class="green"><a href="#">Author:'.$images[$id]["author"].'</a></li>';
      echo '<li class="blue"><a href="#">Publisher:'.$images[$id]["publisher"]. '</a></li>';
      echo '<li class="brown"><a href="#">Published:'.$images[$id]["date"].'</a></li>';
      echo '<li class="grey"><a href="#">Pages: <strong> '.$images[$id]["page"].'</strong></a></li>';
    echo '</ul>';
    echo '<p>'.$images[$id]["bio"].'</p>';
    echo '<h1>Formats available</h1>';
    echo'<ul>';
      echo '<li>Kindle</li>';
      echo '<li>Audiobook</li>';
      echo '<li>Hardcover</li>';
      echo '<li>Paperback</li>';
      echo '<li>Audio CD</li>';
    echo '</ul>';
  echo '</div>';
  echo '<div id="right_column">';
    echo '<h1>Description</h1>';
    echo '<a href="#"><img src="images/' . $images[$id]["path"] . ' " alt="" /></a>';
    echo '<p>'. $images[$id]["detail"]. '<br><br>';

  echo '</p>';
  echo '</div>';



}

?>

<!-- <div id="bottom">
    <div id="left_footer"><a href="#">footer item</a> | <a href="#">another footer item</a></div>
    <div id="right_footer"><a href="#">footer item</a> | <a href="#">another footer item</a></div>
  </div> --> 

</div>
</body>
</html>

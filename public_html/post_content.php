<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
	<title>
	Techno blog
	</title>
	<meta charset=utf-8>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
     <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
	 <?php
  require "header.php";
  require "db.php";
?>        
	<style type="text/css">
	
 </style>
</head>
<?php
if(!isset($_GET["id"])) {
    $id = 1;
} else
{
    $id = $_GET["id"];
}
$result = mysql_query("SELECT * FROM post WHERE id='$id'") or die(mysql_error());
$post = mysql_fetch_array($result);
do {
    printf (' 
<div class="content3"> 
    <div class="content4"><p><img src="%s" height="250" width="250" class="leftimg" /></p></div>
    <div>
    <h1 class="title_post">%s</h1></a><div class="text_s"><p> %s </p></div></div>
</div> 
',$post["image"], $post["title"], $post["text"]);
}while ($post = mysql_fetch_array($result));
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<?php
require "footer.php";
?>
<script src="js/bootstrap.js"></script>

</body>
</html>
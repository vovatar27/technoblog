<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
	<title>
	Techno blog
	</title>
<?php
include ("header.php");
include ("db.php");
?>
<meta charset=utf-8>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway&amp;subset=cyrillic" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
     <link href="css/bootstrap.css" rel="stylesheet">


	<style type="text/css">

 </style>
<script type="text/javascript">
  $(document).ready(function() {
    var overlay = $('#overlay');
    var open_modal = $('.open_modal');
    var close = $('.modal_close, #overlay');
    var modal = $('.modal_div');
     open_modal.click( function(event){
         event.preventDefault();
         var div = $(this).attr('href');
         overlay.fadeIn(400,
             function(){
                 $(div)
                     .css('display', 'block') 
                     .animate({opacity: 1, top: '50%'}, 200);
         });
     });

     close.click( function(){
            modal
             .animate({opacity: 0, top: '45%'}, 200,
                 function(){
                     $(this).css('display', 'none');
                     overlay.fadeOut(400);
                 }
             );
     });
});
</script>
</head>


<div class="container_line">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h2>Всі записи:</h2>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>
<?php
$result = mysql_query("SELECT * FROM post ORDER BY id DESC")
or die(mysql_error());
$post = mysql_fetch_array($result);
do {
    printf (' 
<div class="content"> 
    <div class="content1"><img src="%s" width="250" height="270" class="leftimg"></div>
    <a href="post_content.php?id=%s"><h1 class="title_post">%s</h1></a><div class="text_s"><p> %s ...</p></div>
</div>
',$post["image"] , $post["id"], $post["title"], substr($post["text"],0,700) );
}while ($post = mysql_fetch_array($result));
?>


<?php
require "send.php"
?>
<script src="js/bootstrap.js"></script>
<?php
require "footer.php";
?>
</body>
</html>
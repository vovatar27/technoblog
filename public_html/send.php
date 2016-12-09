<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
    <meta charset="utf-8">
    <title>
        Techno blog
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<body>

<div id="modal1" class="modal_div">
    <span class="modal_close">X</span>

    <form method="post" enctype="multipart/form-data" action="index.php">
        <p align="center"><b>Заповніть форму</b></p>
        <p>Тема:</p>
        <input type="text" name="title" placeholder="Введіть тему" class="title"><br>
        <p>Текст:</p>
        <textarea  name="text"placeholder="Введіть текст" class="text_content" class="text"></textarea><br>
        <p>Додати фото:<p/>
        <input type="text" name="image"  placeholder="Введіть url"/>
        <br>
        <button type="submit" name="add" class="btn btn-default" >Створити</button>

</div>
<a href="#modal1" class="open_modal"><button class="create_post btn btn-gray">Створоити пост</button></a><!-- ссылкa с href="#modal1", oткрoет oкнo с  id = modal1-->
<div id="overlay"></div>
<?php
$connection = mysql_connect("localhost","root","");
$db = mysql_selectdb("Content");
mysql_query("SET NAMES 'utf8' ");
if(!$db|| !$connection) {
    exit (mysql_error);
}
if (isset($_POST['add'])) {
    $sql = mysql_query("INSERT INTO `post` (`id`, `title`, `text`, `image`) 
                VALUES (NULL, '".$_POST['title']."', '".$_POST['text']."', '".$_POST['image']."')");
    if ($sql) {
        echo "You add a new post.";
    } else {
        echo "Some error!";
    }
}

?>

</body>
</html>
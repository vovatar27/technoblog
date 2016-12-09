<?php
$connection = mysql_connect("localhost","root","");
$db = mysql_selectdb("Content");
mysql_query("SET NAMES 'utf8' ");
if(!$db|| !$connection)
{
    exit (mysql_error);
}
?>
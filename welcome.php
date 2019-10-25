<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
echo '<iframe width="100%" height="100%" src="mapa/sources/map.svg" frameborder="0" scrolling="no" align="middle"></iframe>';
}
else
{
echo "not logged in";
}
?>

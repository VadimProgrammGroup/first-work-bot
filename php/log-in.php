<?php

$login = $_POST['login'];
var_dump($login);

setcookie('login',$login,60*60*24*30);



?>
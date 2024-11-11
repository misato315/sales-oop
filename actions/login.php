<?php

include "../classes/Users.php";

$user = new User;

$user->login($_POST);
?>
<?php
session_start();
//$_SESSION["user"] = null;
unset($_SESSION["user"]);
header("location:login.php");
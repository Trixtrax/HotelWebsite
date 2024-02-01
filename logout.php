<?php
session_start();
$_SESSION = array();
 session_destroy();
 echo "the session has been destroyed";
 ?>
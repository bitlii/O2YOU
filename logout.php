<?php
//Starts the session for this page, then destroys that session so it cannot be used again.
session_start();
session_destroy();
header('Location: index.php');
?>
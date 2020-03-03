<?php
session_start();
session_destroy();
header('Location: indeh.php');
exit();
?>
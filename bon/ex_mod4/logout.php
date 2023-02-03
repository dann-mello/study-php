<?php
setcookie('usuario', '', time() - 86400);
header('location: login.php');
exit;
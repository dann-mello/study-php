<?php
setcookie('nome', '', time() - 86400);

header('location: index.php');
exit;
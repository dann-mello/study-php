<?php
$texto = file_get_contents('texto.txt');
$texto .= "\nDanielMelo";
file_put_contents('texto.txt', $texto);
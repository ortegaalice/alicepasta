<?php
setcookie("empresa", "cookies para o chrome", time() + 3600);
echo "Cookie criado";

var_dump($_COOKIE);
?>
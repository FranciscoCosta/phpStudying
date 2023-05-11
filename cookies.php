<?php

setcookie("user","Xico",time() + 3600);
setcookie("email","francisco100eg@gmail.com", time() +( 3600 * 2));
setcookie("ultima_pesquisa","tenis adidas", time() + (3600 * 24 * 7));

echo $_COOKIE['user'];
echo "<br>";
echo $_COOKIE['email'];
echo "<br>";
echo $_COOKIE['ultima_pesquisa'];
echo "<br>";

?>
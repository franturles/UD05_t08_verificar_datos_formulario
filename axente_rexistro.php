<?php
header('Content-Type: text/html; charset=UTF-8');
echo "<pre>";print_r($_REQUEST); echo "</pre>";

$nomeCompleto=htmlspecialchars(trim(strip_tags($_REQUEST['nomeCompleto'])), ENT_QUOTES, "ISO-8859-1");
if ($nomeCompleto == "")
    print "<p>O campo nome completo esta baleiro</p>";
else
    print "<p>O valor recibido do campo nome completo e: $nomeCompleto</p>";

$nomeUsr=htmlspecialchars(trim(strip_tags($_REQUEST['nomeUsr'])),ENT_QUOTES, "ISO-8859-1");
if ($nomeUsr == "")
    print "<p>O campo nome de usuario esta baleiro. É un campo obrigatorio.</p>";
else
    print "<p>O valor recibido do campo nome de usuario é: $nomeUsr</p>";

$contrasinal=htmlspecialchars(trim(strip_tags))
?>
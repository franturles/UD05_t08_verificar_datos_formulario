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

$contrasinal=htmlspecialchars(trim(strip_tags($_REQUEST['contrasinal'])),ENT_QUOTES, "ISO-8859-1");
if ($contrasinal == "")
    print "<p>O campo contrasinal esta baleiro. Ë un campo obrigatorio</p>";
else
    print "<p>O valor recibido do campo contrasinal é: $contrasinal</p>";

$idade= htmlspecialchars(trim(strip_tags($_REQUEST['idade'])),ENT_QUOTES, "ISO-8859-1");
if ($idade == "")
    print "<p>O campo nome completo esta baleiro</p>";
else 
print "<p>O valor recibido do campo idade e: $idade</p>";

$dNac = htmlspecialchars(trim(strip_tags($_REQUEST['dNAc'])), ENT_QUOTES,"ISO-8859-1");
if ($dNac == "")
    print "<p>O campo nome completo esta baleiro</p>";
else
    print "<p>O valoro recibido do campo data de nacemento e: $dNac</p>";

$email = htmlspecialchars(trim(strip_tags($_REQUEST['email'])), ENT_QUOTES, "ISO-8859-1");
if ($email == "")
    print "<p>O campo nome completo esta baleiro</p>";
else
    print "<p>O valor recibido do campo email e: $email </p>";

$url= htmlspecialchars(trim(strip_tags($_REQUEST['url'])), ENT_QUOTES, "ISO-8859-1");
if ($url == "")
    print "<p>O campo nome completo esta baleiro</p>";
else
    print "<p>O valor recibido do campo URL da paxina persoal e: $url</p>";

$ip= htmlspecialchars(trim(strip_tags($_REQUEST['ip'])), ENT_QUOTES, "ISO-8859-1");
if ($ip == "")
    print "<p>O campo nome completo esta baleiro</p>";
else
    print "<p>O valor recibido do campo IP do equipo e: $ip</p>";

$hobbies= htmlspecialchars(trim(strip_tags($_REQUEST['hobbies'])),ENT_QUOTES,"ISO-8859-1");
if ($hobbies == "")
    print "<p>O campo descripcion dos hobbies esta baleiro</p>";
else
    print "<p>O valor recibido do campo hobbies e: $hobbies</p>";

$rcbInfo= (isset($_REQUEST['rcbInfo']))
    ? htmlspecialchars(trim(strip_tags($_REQUEST['rcbInfo'])),ENT_QUOTES, "ISO-8859-1")
    : "";
if ($rcbInfo == "")
    print "<p>Non se utilizou o control recibir informacion</p>";
else
    print "<p>O valor recibido do control recibir informacion e: $rcbInfo</p>";
$sexo= (isset($_REQUEST['sexos']))
    ? htmlspecialchars(trim(strip_tags($_REQUEST['sexos'])),ENT_QUOTES, "ISO-8859-1")
    : "";
if ($sexo == "")
    print "<p>Non se utilizou o control sexo. É obligatorio</p>";
else
    print "<p>O valor recibido do control sexo e: $sexo</p>";

$linguasEs= (isset($_REQUEST['linguasEs']))
    ? $_REQUEST['linguaEs']
    : "";
if ($linguasEs == "")
    print "<p>Non se utilizou o control linguas extranxeiras</p>";
else{
    echo "Os valores recibidos do menu linguas extranxeiras son: <pre>";
    print_r($linguasEs);
    echo "</pre>";
}

$curriculo= (isset($_FILES['curriculo']))
    ? $_FILES['curriculo']
    : "";
if ($curriculo == "")
    print "<p>Non se utlizou o control curriculo</p>";
else{
    echo "<p>O nome e o tamaño do arquivo recibido no campo curriculo son: ".curriculo["name"]." e ".$curriculo["size"]." bytes</p>";
    move_uploaded_file($curriculo["tmp_name"], "subidos/".$curriculo["name"]);
}
?>


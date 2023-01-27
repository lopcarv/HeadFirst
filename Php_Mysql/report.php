<html>
<head>
    <title>Alienígenas me abduziram - relatar uma abdução</title>
</head>

<body>
<h2>Alienígenas me abduziram - relatar uma abdução</h2>
<!--Bloco de Envio de E-mail -->
<?php
$name = $_POST['firstname'] . '' . $_POST['lastname'];
$when_it_happened = $_POST ['whenithappened'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description =$_POST['aliendescription'];
$what_they_did = $_POST[$what_they_did];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$other = $_POST['other'];

// Bloco de Query
$dbc = mysql_connect('localhost', 'alien', '123456', aliendatabase) or die('Erro ao tentar conectar o Mysql Server');

$quere ="INSERT INTO aliens_abduction (first_name, last_name, when_it_happened,how_long,  " . 
"how_many, alien_description, what_they_did, fang_spotted, other, email)  ".
"VALUES ('$firstname', '$last_name', '$when_it_happened', '$how_long', '$how_many', " ,  "'$alien_description', '$what_they_did', '$fang_spotted', '$other', $email')";
$result = mysqli_query($dbc, $quere) or die('Erro de queryng database.');
mysqli_close($dbc);


echo 'obrigado por enviar o formulário.<br/>';
echo 'você foi sequestrado '. $when_it_happened .'<br/>';
echo 'e foram embora '. $how_long . '<br/>';
echo 'Numero de Aliens:  ' . $how_many . '<br/>';
echo 'descreva-os: ' . $alien_description . '<br/>';
echo 'O Fang estava preso lá ?  ' . $fang_spotted . '<br/>';
echo 'seu endereço de e-mail é  ' . $email . '<br/>';
echo 'Outra coisa que quero descrever: ' . $other;
echo 'seu email é' . $email;


?>

</body>
</html>






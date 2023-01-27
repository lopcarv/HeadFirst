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

// Bloco de Envio de E-mail 

$to = 'd7m7e7@gmail.com';
$subject = 'Aliens me abduziram -  Relator de Abdução';
$msg =  "$name foi sequestrado $when_it_happened e foi embora para $how_long.\n" .
"Número de alienígenas: $how_many\n" .
"descrição alienígena: $alien_description\n" .
"O que eles fizeram: $what_they_did\n" .
"Virão o Fang: $fang_spotted\n" .
"Other comments: $other";
  
mail($to, $subject, $msg, 'from:' . $email);
  

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






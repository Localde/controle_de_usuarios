<?php
require 'config.php';

if(isset($_POST['nome']) && empty($_POST['nome']) == false){
	$nome = adddslashes($_POST['nome']);
	$email = adddslashes($_POST['email']);
	$senha = md5(adddslashes($_POST['senha']));

	$sql = "INSERT INTO usuarios SET nome = '$nome', email = 'email', senha = 'senha'";
	$pdo->query($sql);

	header("Location: index.php");
}
?>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" /><br/>
	E-mail:<br/>
	<input type="text" name="email" /><br/>
	Senha:<br/>
	<input type="text" name="password" /><br/>

	<input type="submit" value="Cadastrar" />
</form>
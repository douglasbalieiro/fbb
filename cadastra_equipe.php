<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Somos Todos SAC</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>

<form action="processa.php" method="POST">
<table align="center">
<tr>
<td>Nome</td>
<td><input type="text" name="equipe_nome"></td>
</tr>
<tr>
<td>Localização</td>
<td><input type="text" name="equipe_localizacao"></td>
</tr>
<tr>
<td>Disponível</td>
<td><input type="radio" name="equipe_disponivel" value="Sim" checked> Sim <input type="radio" name="equipe_disponivel" value="Nao"> Não<br></td>
</tr>
</table>
</br>
<input type="submit" value="Cadastrar equipe">
</form>

</body>
</html>
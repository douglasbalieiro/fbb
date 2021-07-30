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
<div align="center">

<?php
echo $equipe_nome;
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>
<br />
<br />
<form name="frm_agenda" action="processa_agenda.php" method="POST">
<?php
echo "<input type='hidden' name='agenda_equipe_id' value='".$equipe_id."'>";
echo "<input type='hidden' name='agenda_equipe_nome' value='".$equipe_nome."'>";
?>
<table style="border:0px" align="center">
<tr><td><input type="date" name="agenda_data" placeholder="Data"></td></tr>
<tr><td><input type="time" name="agenda_horario"  placeholder="Horário"></td></tr>
<tr><td><input type="text" name="agenda_vagas"  placeholder="Vagas"></td></tr>
</table>
<br />
<input type="submit" value="Incluir data">
</form>
</div>

</body>
</html>
<?php
include_once("conecta.php");

$sql = "SELECT ID_EQUIPE, NOME, LOCALIZACAO, STATUS FROM EQUIPE";
$result = $conn->query($sql);
?>

<html>
<head>
<meta charset="UTF-8">
<title>Somos Todos SAC</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div align="center">

<form name="frm_cad" action="/cadastra_equipe.php">
<input type="submit" value="Cadastrar equipe">
</form>
<p><a href="administrador.php">Visualizar por Equipes</a> | <a href="administrador_datas.php">Visualizar por Datas</a></p>

<?php
if ($result->num_rows > 0) {
    echo "<table style='cellpadding: 10'><tr><th>Equipe</th><th>Local</th><th>Disp.</th><th>Datas das visitas</th><th>Agenda</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["NOME"]."</td><td>".$row["LOCALIZACAO"]."</td><td>".$row["STATUS"]."</td><td></td><td><a href='agenda.php?equipe_id=".$row[ID_EQUIPE]."&equipe_nome=".$row["NOME"]."' target='direito'><img src='calendar.png'></a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
$conn->close();
?>
<br />
<br />
<form name="frm_cad" action="/cadastra_equipe.php">
<input type="submit" value="Cadastrar equipe">
</form>

</div>
</body>
</html>

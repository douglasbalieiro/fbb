<?php
session_start();
$equipe_id = filter_input (INPUT_GET, 'equipe_id', FILTER_SANITIZE_STRING);
$equipe_nome = filter_input (INPUT_GET, 'equipe_nome', FILTER_SANITIZE_STRING);

include_once("conecta.php");

$sql = "SELECT ID_AGENDA, ID_EQUIPE, DATA, HORARIO, VAGAS FROM AGENDA WHERE ID_EQUIPE=".$equipe_id;
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div align="center">

<?php
echo "<form action='/inclui_data.php?equipe_id=".$$equipe_id."'>";
?>
<input type="submit" value="Incluir data">
</form>
<?php
echo "<p>".$equipe_nome."</p>";
if (isset($_SESSION['msg'])) {
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>
<?php
if ($result->num_rows > 0) {
    echo "<table style='cellpadding: 10'><tr><th>Data</th><th>Horário</th><th>Vagas</th><th></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["DATA"]."</td><td>".$row["HORARIO"]."</td><td>".$row["VAGAS"]."</td><td><a href='exclui_data.php?equipe_id=".$row[ID_AGENDA]."&equipe_nome=".$row["NOME"]."' target='direito'><img src='delete.png'></a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
$conn->close();
?>

</div>
</body>
</html>
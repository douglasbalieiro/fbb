<?php
include_once("conecta.php");

$sql = "SELECT NOME, LOCALIZACAO, STATUS FROM EQUIPE WHERE STATUS='Sim'";
$result = $conn->query($sql);
?>

<html>
<head>
<meta charset="UTF-8">
<title>Somos Todos SAC</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Somos Todos SAC</h1>
<h2>Acesso Visitantes</h2>
<p>Bem-vindo Paulo. <a href="index.html">Sair</a></p>
<br />
<form name="frm_cad" action="/historico_visitas.php">
<input type="submit" value="Minhas visitas">
</form>
<br />
<div align="center">
<p><a href="visitante.php">Visualizar por Equipes</a> | <a href="visitante_datas.php">Visualizar por Datas</a></p>

<?php
if ($result->num_rows > 0) {
    echo "<table styles='cellpadding: 10'><tr><th>Equipe</th><th>Local</th><th>Disp.</th><th>Agenda</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["NOME"]."</td><td>".$row["LOCALIZACAO"]."</td><td>".$row["STATUS"]."</td><td><a href=''><img src='calendar.png'></a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</div>
<br />
<br />
<p>Desenvolvido por: Douglas de Sousa Balieiro</p>
</body>
</html>

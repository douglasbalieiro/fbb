<?php
$servername = "fdb25.awardspace.net";
$username = "2983192_appbb";
$password = "Castelo10";
$dbname = "2983192_appbb";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
// Devolve eventual erro na conexão 
if ($conn->connect_error) {
	die("Erro na conexão: " . $conn->connect_error);
}
?>
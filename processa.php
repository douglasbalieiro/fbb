<?php
session_start();
include_once("conecta.php");

$equipe_nome = filter_input (INPUT_POST, 'equipe_nome', FILTER_SANITIZE_STRING);
$equipe_localizacao = filter_input (INPUT_POST, 'equipe_localizacao', FILTER_SANITIZE_STRING);
$equipe_disponivel = filter_input (INPUT_POST, 'equipe_disponivel', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO EQUIPE (NOME, LOCALIZACAO, STATUS) VALUES ('$equipe_nome', '$equipe_localizacao', '$equipe_disponivel')";
$resultado = mysqli_query($conn, $sql);

if (mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:green;'>Equipe cadastrada com sucesso.</p>";
	header("Location: cadastra_equipe.php");
} else {
	$_SESSION['msg'] = "<p style='color:red;'>Equipe não foi cadastrada com sucesso.</p>";
	header("Location: cadastra_equipe.php");
}
?>
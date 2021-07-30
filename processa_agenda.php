<?php
session_start();
include_once("conecta.php");

$agenda_id_equipe = filter_input (INPUT_POST, 'agenda_equipe_id', FILTER_SANITIZE_STRING);
$equipe_nome = filter_input (INPUT_POST, 'agenda_equipe_nome', FILTER_SANITIZE_STRING);
$agenda_data = filter_input (INPUT_POST, 'agenda_data', FILTER_SANITIZE_STRING);
$agenda_horario = filter_input (INPUT_POST, 'agenda_horario', FILTER_SANITIZE_STRING);
$agenda_vagas = filter_input (INPUT_POST, 'agenda_vagas', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO AGENDA (ID_EQUIPE, DATA, HORARIO, VAGAS) VALUES ('$agenda_id_equipe', '$agenda_data', '$agenda_horario', '$agenda_vagas')";
$resultado = mysqli_query($conn, $sql);

if (mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:green;'>Data cadastrada com sucesso.";
	header("Location: agenda.php");
	window.parent.document.getElementById(esquerdo).contentDocument.location.reload(true);
} else {
	$_SESSION['msg'] = "<p style='color:red;'>Erro! Cadastre novamente.";
	header("Location: agenda.php");
}
?>
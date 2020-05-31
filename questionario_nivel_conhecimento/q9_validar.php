<?php

include ("../conecta.php");

include ("../seguranca.php");

//session_start();
  $numero = $_SESSION['login'];
  $id = $_SESSION["id"];
$porcentagem = $_POST["porcentagem"];

//echo $porcentagem;

$dbname='heroku_3916b5627a97d8c';
$usuario='be5e2232b15f70';
$password='e3eeddaa';
$localhost='us-cdbr-east-05.cleardb.net';
//$id_session = $_SESSION['usuarioID'];

$conexao = mysqli_connect($localhost,$usuario,$password,$dbname) or die ('Não foi possível conectar');

$sql_update = "UPDATE resultado SET resultadonove='$porcentagem' WHERE id_usuario_resp='$id'";

mysqli_query($conexao, $sql_update) or die ("Erro no comando SQL:".mysqli_error());
header("location: q10.php");
//echo "<script> window.open('q2.php?',_self); </script>";

//$num = mysqli_num_rows($rs);
/*
if ($num == 1){
	?>
    
    <script language="javascript" type="text/javascript">
	location.href="q2.php"
	</script>	
		
    <?php
}


else {

	?>
	
    <script language="javascript" type="text/javascript">
	alert ("Não foi possível realizar o registro!")
	window.history.go(-1);
	</script>
    
    <?php
	
	exit;

}
*/
mysqli_close($conexao);

?>

<?php

include ("../conecta.php");

include ("../seguranca.php");

//session_start();
$numero = $_SESSION['nome'];
$id = $_SESSION["id"];
$login = $_SESSION["login"];

$porcentagem = $_POST["porcentagem"];

$dbname='heroku_3916b5627a97d8c';
$usuario='be5e2232b15f70';
$password='e3eeddaa';
$localhost='us-cdbr-east-05.cleardb.net';
//$id_session = $_SESSION['usuarioID'];

$conexao = mysqli_connect($localhost,$usuario,$password,$dbname) or die ('Não foi possível conectar');

$sql_insert = "INSERT INTO `resultado` (`id_resultado`, `id_usuario_resp`, `resultadoum`) VALUES (null, '$id', '$porcentagem')";

mysqli_query($conexao, $sql_insert) or die ("Erro no comando SQL:".mysqli_error());
header("location: q2.php");
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

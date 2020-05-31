<?php

include ("../conecta.php");

include ("../seguranca.php");

//session_start();
  $numero = $_SESSION['login'];
  $id = $_SESSION["id"];
$porcentagem = $_POST["porcentagem"];

//echo $porcentagem;

//$id_session = $_SESSION['usuarioID'];

$conexao = mysqli_connect("localhost","myke1","","REA") or die ('Não foi possível conectar');

$sql_update = "UPDATE resultado SET resultadosete='$porcentagem' WHERE id_usuario_resp='$id'";

mysqli_query($conexao, $sql_update) or die ("Erro no comando SQL:".mysqli_error());
header("location: q8.php");
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
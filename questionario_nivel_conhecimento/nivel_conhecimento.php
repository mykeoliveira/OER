<html>
<meta charset="utf-8">
<?php

include ("../conecta.php");

include ("../seguranca.php");
  //session_start();
  $numero = $_SESSION['login'];
  $id = $_SESSION["id"];
//$id_session = $_SESSION['usuarioID'];

$consulta = "SELECT * FROM resultado WHERE id_usuario_resp = '$id'";
$conexao = mysqli_connect("localhost","myke1","","REA") or die ('Não foi possível conectar');
$busca_resul = mysqli_query ($conexao,$consulta) or die ("Erro no mysql_query: $query.".mysqli_error());

while($linha = mysqli_fetch_array($busca_resul)){
	$q1  = $linha["resultadoum"];
	$q2 = $linha["resultadodois"];
	$q3 = $linha["resultadotres"];
	$q4 = $linha["resultadoquatro"];
	$q5 = $linha["resultadocinco"];
	$q6 = $linha["resultadoseis"];
	$q7 = $linha["resultadosete"];
	$q8 = $linha["resultadooito"];
	$q9 = $linha["resultadonove"];
	$q10 = $linha["resultadodez"];
	$q11 = $linha["resultadoonze"];
	$q12 = $linha["resultadodoze"];
	
}

$total = ($q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12);

//$sql_update = "UPDATE resultado SET somatotal='$total', nivel='$nivel' WHERE id_usuario_resp='$id'";
$consulta2 = mysqli_query($conexao, "SELECT usuario.tipo FROM usuario WHERE usuario.id_usuario = '$id'");

 while($result = mysqli_fetch_array($consulta2))
 {
      $tipo = $result["tipo"];
 }

if(($total  >= 0) && ($total  <= 500))
{
$nivel = "Nível Básico";
echo "<script>
			alert('O seu nível de conhecimento foi considerado básico');
	     </script>";
		 
}
 
if(($total  > 500) && ($total  <= 800))
{
$nivel = "Nível Médio";
echo "<script>
			alert('O seu nível de conhecimento foi considerado intermediário');
	     </script>";
}
if($total  > 800)
{
$nivel = "Nível Avançado";
echo "<script>
			alert('O seu nível de conhecimento foi considerado avançado');
	     </script>";
}
$nivel2 = $nivel;

$sql_update = "UPDATE usuario inner join resultado SET resultado.somatotal='$total', resultado.nivel = '$nivel2', usuario.nivel='$nivel2', usuario.avaliado = 2 WHERE id_usuario_resp='$id' and id_usuario = '$id'";
	//print $sql_update;
if(mysqli_query($conexao, $sql_update))
{
	print "oi";
	if(mysqli_affected_rows() == 1)
	{
	?>
		<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
			alert ("Registro realizado com sucesso!")
        </SCRIPT>
	<?php 
	}	

} else {
	?>
		<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
			alert ("Não foi possível realizar o cadastro!")
        </SCRIPT>
	<?php 
    exit;
	}	
	mysqli_close();	
	
	
		if($tipo == 'SERIALISTA' && $nivel2 == 'Nível Básico')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/basico/serialista/serialista_basico_1.php"
			</script>	
		
    		<?php
			
		}
		elseif($tipo == 'SERIALISTA' && $nivel2 == 'Nível Médio')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/medio/serialista/serialista_medio_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'SERIALISTA' && $nivel2 == 'Nível Avançado')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/avancado/serialista/serialista_avancado_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'HOLISTA' && $nivel2 == 'Nível Básico')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/basico/holista/holista_basico_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'HOLISTA' && $nivel2 == 'Nível Médio')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/medio/holista/holista_medio_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'HOLISTA' && $nivel2 == 'Nível Avançado')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/avancado/holista/holista_avancado_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'CONVERGENTE' && $nivel2 == 'Nível Básico')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/basico/convergente/convergente_basico_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'CONVERGENTE' && $nivel2 == 'Nível Médio')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/medio/convergente/convergente_medio_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'CONVERGENTE' && $nivel2 == 'Nível Avançado')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/avancado/convergente/convergente_avancado_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'DIVERGENTE' && $nivel2 == 'Nível Básico')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/basico/divergente/divergente_basico_1.php"
			</script>	
		
    		<?php
		}	
		elseif($tipo == 'DIVERGENTE' && $nivel2 == 'Nível Médio')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/medio/divergente/divergente_medio_1.php"
			</script>	
		
    		<?php
		}	
		elseif($tipo == 'DIVERGENTE' && $nivel2 == 'Nível Avançado')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/avancado/divergente/divergente_avancado_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'IMPULSIVO' && $nivel2 == 'Nível Básico')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/basico/impulsivo/impulsivo_basico_1.php"
			</script>	
		
    		<?php
		}	
		elseif($tipo == 'IMPULSIVO' && $nivel2 == 'Nível Médio')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/medio/impulsivo/impulsivo_medio_1.php"
			</script>	
		
    		<?php
		}
		elseif($tipo == 'IMPULSIVO' && $nivel2 == 'Nível Avançado')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/avancado/impulsivo/impulsivo_avancado_1.php"
			</script>	
		
    		<?php
		}	
		elseif($tipo == 'REFLEXIVO' && $nivel2 == 'Nível Básico')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/basico/reflexivo/reflexivo_basico_1.php"
			</script>	
		
    		<?php
		}	
		elseif($tipo == 'REFLEXIVO' && $nivel2 == 'Nível Médio')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/medio/reflexivo/reflexivo_medio_1.php"
			</script>	
		
    		<?php
		}	
		elseif($tipo == 'REFLEXIVO' && $nivel2 == 'Nível Avançado')
		{
			?>
    
    		<script language="javascript" type="text/javascript">
			location.href="../questionario_estilos/avancado/reflexivo/reflexivo_avancado_1.php"
			</script>	
		
    		<?php
		}								
	
?>
</html>
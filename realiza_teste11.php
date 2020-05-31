<?php
error_reporting(0);
//include "conecta.php";
//include "seguranca.php";

 session_start();
   $numero = $_SESSION['nome'];
   $id = $_SESSION["id"];
   $login = $_SESSION["login"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Cognitive Styles Quiz</title>
        
        <link rel="stylesheet" type="text/css" href="styles.css" />
               
        <!--[if IE]>
        
        <style type="text/css">
        .clear {
          zoom: 1;
          display: block;
        }
        </style>

        
        <![endif]-->
        
    </head>
    
    <body>

    	<div class="section" id="page"> <!-- Defining the #page section with the section tag -->
    
            <div class="header"> <!-- Defining the header section of the page with the appropriate tag -->

                <h1>  OPR</h1>
                <h3>Open Programming Resource</h3> 
                
                
                <div class="nav clear"> <!-- The nav link semantically marks your main site navigation -->
                   <ul>
                        <li><a href="template.html">Home</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="ajuda.php">Help</a></li>
                        <li><a href="contato.php">Contact</a></li>
                    </ul>
                </div>
            
            </div>
            
            <div class="section" id="articles"> <!-- A new section with the articles -->

				<!-- Article 1 start -->

                <div class="line"></div>  <!-- Dividing line -->
                
                <div class="article" id="article1"> 
                <h3 align="center"><b>Instructions <BR><BR> <?php echo "Hello, ". $numero . ".  ";?> Think about what happens most often. Please, for each question, check one of the alternatives and do not leave any item unanswered. </b></h3>
                
            <div align="center"></div></td>
        </tr>
        <tr> 
          <td colspan="3"><table width="50%" border="0" align="center" cellpadding="5" cellspacing="0">
              
              
             
            </table></td>



  
  
  <?php


extract($_POST);

if($_GET['acao']  == 'cadastrar') 

{ /*Cadastra os dados depois que o formulário for enviado */
  //Verifica os dados enviados
  
 
  if($um == '') {
   $erros++;
   $html_erros = $html_erros."<br>criativo";
  }
  if($dois == '') {
   $erros++;
   $html_erros = $html_erros."<br>criticar";
  }
  if($tres == '') {
   $erros++;
   $html_erros = $html_erros."<br>decisoes";
  }
  if($quatro == '') {
   $erros++;
   $html_erros = $html_erros."<br>elogiado";
  }
  
  if($cinco == '') {
   $erros++;
   $html_erros = $html_erros."<br>estruturas";
  } 
  
  
  if($seis == '') {
   $erros++;
   $html_erros = $html_erros."<br>geral";
  }
 
 if($sete == '') {
   $erros++;
   $html_erros = $html_erros."<br>partes";
  }
  
  if($oito == '') {
   $erros++;
   $html_erros = $html_erros."<br>todo";
  }
  if($nove == '') {
   $erros++;
   $html_erros = $html_erros."<br>resposta";
  }
  if($dez == '') {
   $erros++;
   $html_erros = $html_erros."<br>formular";
  }

if($onze == '') {
   $erros++;
   $html_erros = $html_erros."<br>frequentemente";
  }
  if($doze == '') {
   $erros++;
   $html_erros = $html_erros."<br>romper";
  }
  if($treze == '') {
   $erros++;
   $html_erros = $html_erros."<br>detalhes";
  }
  
  if($catorze == '') {
   $erros++;
   $html_erros = $html_erros."<br>realista";
  }
  if($quinze == '') {
   $erros++;
   $html_erros = $html_erros."<br>prefere";
  }
   if($dezesseis == '') {
   $erros++;
   $html_erros = $html_erros."<br>estabelecidas";
  }
  if($dezessete == '') {
   $erros++;
   $html_erros = $html_erros."<br>formas";
  }
  if($dezoito == '') {
   $erros++;
   $html_erros = $html_erros."<br>detalhes";
  }
  
  
if($erros == 0)
   {
   $array_tip['CONVERGENTE'] = $um + $tres + $sete;
   $array_tip['DIVERGENTE'] = $doze + $quinze + $dezoito;
   $array_tip['HOLISTA'] = $nove + $dez + $catorze;
   $array_tip['SERIALISTA'] = $seis + $oito + $dezessete;
   $array_tip['IMPULSIVO'] = $dois + $cinco + $onze;
   $array_tip['REFLEXIVO'] = $quatro + $treze + $dezesseis;
  


   $maior = max($array_tip);

   if($maior > 0)
      {
       foreach($array_tip as $indice => $valor)
          {
			  
          if($valor == $maior)
             $tipos = ucfirst($indice);
          }
      }
	
  $dbname='heroku_3916b5627a97d8c';
  $usuario='be5e2232b15f70';
  $password='e3eeddaa';
  $localhost='us-cdbr-east-05.cleardb.net';

  $conexao = mysqli_connect($localhost,$usuario,$password,$dbname) or die ('Não foi possível conectar');
  $sql_1 = "INSERT INTO `questoes`(`um`, `dois`, `tres`, `quatro`, `cinco`, `seis`, `sete`, `oito`, `nove`, `dez`, `onze`, `doze`, `treze`, `catorze`, `quinze`, `dezesseis`, `dezessete`, `dezoito`, `login`)
  VALUES('$um','$dois', '$tres', '$quatro', '$cinco','$seis','$sete','$oito','$nove','$dez','$onze','$doze','$treze','$catorze','$quinze','$dezesseis', '$dezessete', '$dezoito', $id)";
  $sql_2 = "UPDATE `usuario` set `avaliado` = 1, `tipo` = '$tipos' where login ='$login' ";
  
  mysqli_query($conexao, $sql_1);
  mysqli_query($conexao, $sql_2);
  //mysqli_query("INSERT INTO `questoes`(`um`, `dois`, `tres`, `quatro`, `cinco`, `seis`, `sete`, `oito`, `nove`, `dez`, `onze`, `doze`, `treze`, `catorze`, `quinze`, `dezesseis`, `dezessete`, `dezoito`, `login`)
   //VALUES('$um','$dois', '$tres', '$quatro', '$cinco','$seis','$sete','$oito','$nove','$dez','$onze','$doze','$treze','$catorze','$quinze','$dezesseis', '$dezessete', '$dezoito', $id)")
   //or die("Erro no comando SQL:".mysqli_error());
   
  //mysqli_query("UPDATE `usuario` set `avaliado` = 1, `tipo` = '$tipos' where login ='$login' ")
  // or die("Erro no comando SQL:".mysqli_error());
   
    echo "<script> window.open('resultado.php?tipos=$tipos', '_self'); </script>";
   
     
   } //fecha $erros == 0
else
   {
   echo "<div align=center><font face=Arial size=2><b>ATENTION!</b><br><br>You left a question blank. <br> Please click <b>Back</b> to continue filling out the quiz. 
         
         <br><br><a href='javascript:history.go(-1)'><< Back</a></font></div><br><br>";
   }//fecha else
 } /*fecha acao= cadastrar*/ ?>


 <?php

$_GET['acao'] = "entrar";
if($_GET['acao']  == 'entrar') 

{ 
  
?>
  <form name="frm_user" method="post" action="<?= $_SERVER['../../../Users/Usuário/Documents/Meus arquivos recebidos/PHP_SELF']?>?acao=cadastrar">
 

     
	    
        <tr> 
                <td colspan="3"> <div align="center">
                <h3 align="center"><b>After answering all questions, click the Confirm button. </b></h3>
                    <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p>
                  </div></td>
        </tr>
       
        <tr> 
          <td colspan="3"> <div align="center"> 
              <table width="560" border="0" cellspacing="0" cellpadding="5">
                    <tr> 
                      <td width="98%" height="25"><p><font face="Times" size="3">1 - I find it difficult to create something original. </font>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="um" value="0.51">
                          Strongly Disagree 
                          <input type="radio" name="um" value="2.2541">
                          Disagree 
                           
                          <input type="radio" name="um" value="3.3121">
                          Agree 
                          <input type="radio" name="um" value="4.4211">
                          Strongly Agree</font></p>
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                    </tr>
                    <tr> 
                      <td height="25"><p align="justify"><font face="Times" size="3">2 - In many situations, I am not an attentive person, because I am in a hurry. </font></p>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="dois" value="0.5917">
                          Strongly Disagree 
                          <input type="radio" name="dois" value="2.254927">
                          Disagree 
                           
                          <input type="radio" name="dois" value="3.312937">
                          Agree 
                          <input type="radio" name="dois" value="4.421947">
                          Strongly Agree</font></p>
						
						
						
						
						
                        <p>-------------------------------------------------------------------------------------------------------------------------------<font face="Times" size="3"> 
                          </font></p></td>
                    </tr>
                    <tr> 
                      <td height="25"><p align="justify"><font face="Times" size="3">3 - Usually, I follow the guidelines given without question. </font></p>
                        
						<p> <font face="Times" size="3"> 
                          <input type="radio" name="tres" value="0.52">
                          Strongly Disagree 
                          <input type="radio" name="tres" value="2.2542">
                          Disagree 
                          
                          <input type="radio" name="tres" value="3.3122">
                          Agree 
                          <input type="radio" name="tres" value="4.4212">
                          Strongly Agree </font></p>
						
						
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p  
						  
						  ></td>
                    </tr>
                    <tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">4 - I am a very attentive and organized person. </font> </p> 
                        </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="quatro" value="0.5915">
                          Strongly Disagree 
                          <input type="radio" name="quatro" value="2.254925">
                          Disagree 
                          
                          <input type="radio" name="quatro" value="3.312935">
                          Agree 
                          <input type="radio" name="quatro" value="4.421945">
                          Strongly Agree</font></p> 
						
						
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p  
						  
						  ></td>
                    </tr>
                    <tr> 
                      <td height="25"><font face="Times" size="3">5 - In general, I don't usually think much to allocate my time. </font> 
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="cinco" value="0.598">
                          Strongly Disagree
                          <input type="radio" name="cinco" value="2.254928">
                          Disagree 
                          
                          <input type="radio" name="cinco" value="3.312938">
                          Agree 
                          <input type="radio" name="cinco" value="4.421948">
                          Strongly Agree</font></p> 
						
						
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p  
						  
						  ></td>
						
                    </tr>
                    <tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3"> 6 - When performing a task, I prefer to use a step-by-step process, working with small amounts of data at a time. </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="seis" value="0.59">
                          Strongly Disagree
                          <input type="radio" name="seis" value="2.2549">
                          Disagree
                         
                          <input type="radio" name="seis" value="3.3129">
                          Agree 
                          <input type="radio" name="seis" value="4.4219">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>

<tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">7 - In general, I accept the established rules. </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="sete" value="0.53">
                          Strongly Disagree 
                          <input type="radio" name="sete" value="2.2543">
                          Disagree 
                         
                          <input type="radio" name="sete" value="3.3123">
                          Agree 
                          <input type="radio" name="sete" value="4.4213">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>

<tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">8 - I pay more attention to the small informational elements of a study or work material. </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="oito" value="0.591">
                          Strongly Disagree 
                          <input type="radio" name="oito" value="2.25492">
                          Disagree 
                         
                          <input type="radio" name="oito" value="3.31293">
                          Agree 
                          <input type="radio" name="oito" value="4.42194">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>

<tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">9 - I usually emphasize the global context and not the specific aspects of the tasks I perform. </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="nove" value="0.56">
                          Strongly Disagree 
                          <input type="radio" name="nove" value="2.2546">
                          Disagree 
                         
                          <input type="radio" name="nove" value="3.3126">
                          Agree 
                          <input type="radio" name="nove" value="4.4216">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>

<tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">10 - The global context of a situation is the most relevant element for decision making.  </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="dez" value="0.57">
                          Strongly Disagree 
                          <input type="radio" name="dez" value="2.257">
                          Disagree 
                         
                          <input type="radio" name="dez" value="3.3127">
                          Agree 
                          <input type="radio" name="dez" value="4.4217">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>

<tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">11 - In many situations, I give answers without giving much thought to them.  </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="onze" value="0.599">
                          Strongly Disagree 
                          <input type="radio" name="onze" value="2.254929">
                          Disagree 
                         
                          <input type="radio" name="onze" value="3.312939">
                          Agree 
                          <input type="radio" name="onze" value="4.421949">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>

<tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">12 - I enjoy experiencing new situations. </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="doze" value="0.54">
                          Strongly Disagree 
                          <input type="radio" name="doze" value="2.2544">
                          Disagree 
                         
                          <input type="radio" name="doze" value="3.3124">
                          Agree 
                          <input type="radio" name="doze" value="4.4214">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>
           
    <tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">13 - I tend to think a lot before making decisions.      </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="treze" value="0.5917">
                          Strongly Disagree 
                          <input type="radio" name="treze" value="2.254927">
                          Disagree 
                         
                          <input type="radio" name="treze" value="3.312937">
                          Agree 
                          <input type="radio" name="treze" value="4.421947">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>
                    
                    <tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">14 - When reading a text, I pay more attention to the general idea than to the informative details of it.</font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="catorze" value="0.58">
                          Strongly Disagree 
                          <input type="radio" name="catorze" value="2.2548">
                          Disagree 
                         
                          <input type="radio" name="catorze" value="3.3128">
                          Agree 
                          <input type="radio" name="catorze" value="4.4218">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>
                    
                     <tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3"> 15 - I am able to formulate original and creative responses, often.  </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="quinze" value="0.55">
                          Strongly Disagree 
                          <input type="radio" name="quinze" value="2.2545">
                          Disagree 
                         
                          <input type="radio" name="quinze" value="3.3125">
                          Agree 
                          <input type="radio" name="quinze" value="4.4215">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>
                    
                    <tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">16 - I usually think well before giving an answer.    </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="dezesseis" value="0.5918">
                          Strongly Disagree 
                          <input type="radio" name="dezesseis" value="2.254928">
                          Disagree 
                         
                          <input type="radio" name="dezesseis" value="3.312938">
                          Agree 
                          <input type="radio" name="dezesseis" value="4.421948">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>

<tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">17 - Faced with written material, I emphasize each topic separately and only afterwards do I seek relationships between the parties.</font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="dezessete" value="0.5995">
                          Strongly Disagree 
                          <input type="radio" name="dezessete" value="2.254926">
                          Disagree 
                         
                          <input type="radio" name="dezessete" value="3.312936">
                          Agree 
                          <input type="radio" name="dezessete" value="4.421946">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p></td>
                   
                    </tr>

<tr> 
                      <td height="25"><div align="justify"><font face="Times" size="3">18 - I enjoy daring and trying to create something different.
     </font> </p> </div>
                        <p> <font face="Times" size="3"> 
                          <input type="radio" name="dezoito" value="0.55">
                          Strongly Disagree 
                          <input type="radio" name="dezoito" value="2.2545">
                          Disagree 
                         
                          <input type="radio" name="dezoito" value="3.3125">
                          Agree 
                          <input type="radio" name="dezoito" value="4.4215">
                          Strongly Agree</font></p>  
						
						
						
                        <p><font size="2" face="Arial">---------------------------------------------------------------------------------------------------------------------------------</font></p  
						  
						  ></td>
                    </tr>













	   
                    <td height="25" colspan="2"> <div align="center"> 
                        <input type="submit" name="cadastrar" value="Confirm">
                        <input type="reset" value="Clear" name="B2">
                      </div></td>
                  </table>
  </form>           
   
   

 
       
          
        
        
    </body>
</html>
<?php } /*fecha acao=entrar */?>

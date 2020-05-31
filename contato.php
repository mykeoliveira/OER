<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Contact</title>
        
        <link rel="stylesheet" type="text/css" href="styles.css" />
        
    </head>
    
    <body>
    	<div class="section" id="page"> <!-- Defining the #page section with the section tag -->
    
            <div class="header"> <!-- Defining the header section of the page with the appropriate tag -->

                <h1>OPR</h1>
                <h3>Open Programming Resource</h3> 
                
                <div class="nav clear"> <!-- The nav link semantically marks your main site navigation -->
                    <ul>
                        <li> <a href="template.html">Home</a></li>
                        <li> <a href="Login.php">Log in</a></li>
                        <li><a href="ajuda.php">Help</a></li>
                        <li><a href="contato.php">Contact</a></li>
                    </ul>
                </div>
            
            </div>
            
            <div class="section" id="articles"> 
            <div class="line"></div>  <!-- Dividing line --> 
            <div class="article" id="article1">
                <h2>Contact us</h2>
                    
                    <div class="line"></div> 
                    To contact us, just fill in the blanks and we will give you an answer as soon as possible. Thank you!<br /><br />
    <?php
	if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "mykemoliveira@gmail.com"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "mykemoliveira@gmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Contato formmail"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-Mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
?>
	
	<form action="<? $PHP_SELF; ?>" method="POST"> 
	<p> 
		Name:<br /> 
		<input type="text" size="30" name="nome"> 
	</p>   
	<p> 
		E-mail:<br /> 
		<input type="text" size="30" name="email">		
	</p>   
	<p> 
		Phone:<br /> 
		<input type="text" size="35" name="telefone"> 
	</p>   
	<p> 
		Message:<br /> 
		<textarea name="mensagem" cols="40" rows="5"></textarea> 
	</p>   
	<p>
          <input type="submit" name="BTEnvia" value="Send"> 
	  <input type="reset" name="BTApaga" value="Delete">
        </p>   
            

        
        
        
    </body>
</html>

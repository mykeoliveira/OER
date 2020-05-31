<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <script Language = "JavaScript">

            function checa_formulario(cadastro){

                if (cadastro.nome.value == ""){
                    alert("Por Favor digite seu nome");
                    cadastro.nome.focus();
                    return (false);
                }
                if (cadastro.login.value == ""){
                    alert("Por Favor preencha o campo login");
                        cadastro.login.focus();
                        return (false);
                }
                if (cadastro.senha.value == ""){
                    alert("Por Favor digite sua senha");
                        cadastro.senha.focus();
                        return (false);
                }
                if (cadastro.senha.value != cadastro.senha2.value){
                    alert("Confirmação da senha incorreta");
                        cadastro.senha.focus();
                            return (false);
                }
            }
        </script>
    <title>Cadastro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Free CSS3 &amp; XHTML One Page Template | Tutorialzine Freebie</title>
        
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
            
            <div class="section" id="articles"> <!-- A new section with the articles -->

				<!-- Article 1 start -->

                <div class="line"></div>  <!-- Dividing line -->
                
                <div class="article" id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
                    <BR><BR><h2 align="center"><b>Registration Form</b></h2><BR><BR>

                        <form id="cadastro" method="Post" action="conectaCadastro.php" name="cadastro" onsubmit = "return checa_formulario(this)"> 
                        
                        <h3 align="center">Fill out the registration form to be able to access the resource.</h3>
                        <p>&nbsp;</p>
                        
                        <center>
                        <table height="300" cellpadding="1" cellspacing="2">
		                <tr>
		                <td>
			                Name:
		                </td>
	                    <td>
			                <input name="nome" id="nome" size="20" type="text">
	                    </td>
		                </tr>
			
		                <tr>
		                <td>
			                Username:
		                </td>
		                <td>
			                <input name = "login" size="20" type="text" id="login" >
		                </td>
		                </tr>
		
		                <tr  class="ver01">
		                <td>Pasword:</td>
		                <td><input name = "senha" size="20" type="password"  id"senha1" />
                        </td>
                        </tr>
        
                        <tr>
		                <td>
			                Confirm Password:
		                </td>
		                <td>
			                <input name = "senha2" size="20" type="password"  />
		                </td>
		                </tr>
	
                        </table>
  
  <br><br><br>
  <center><INPUT TYPE="submit" value="Register" id="cadastro">&nbsp;&nbsp;&nbsp;
	<INPUT TYPE="reset" value="Clear" id="limpar"></center>
	</center><BR>
 		<a href="Login.php">Return</a>
	</center><BR>

</form>
                
    </body>
</html>


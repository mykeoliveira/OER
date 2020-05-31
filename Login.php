<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Home</title>
        
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
            
            <div class="section" id="articles"> <!-- A new section with the articles -->

				<!-- Article 1 start -->

                <div class="line"></div>  <!-- Dividing line -->
                
                <div class="article" id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
                    
                <form action="auth.php" name="autenticacao" method="post" >
  
                        <table style="width:100%; height:100%; border:0px;">
                            <BR><BR><BR>  
                            <h3 align="center"><b>Restricted Access! <br> Please log in to access or sign up </b></h3>
                                <tr>
                                <td> <center> <table width="173" border="3"  cellpadding="3" align="center">
                                <tr>

                            <h3 align="center"><b>Personal Data</b></h3><br>
                                <td width="48">Username:</td>
                                <td width="105"><input type="text" name="login" size="15" maxlength="20" /></td>
                                </tr> 
                                <tr>
                                <td>Password:</td>
                                <td><input type="password" name="senha" size="15" maxlength="8" /></td>
                                </tr>
  
                                <tr>
  
                                <center> 
                                <td colspan="2"><div align="center">
                                <input type="submit" name="entra" value="Start" />
                                </div></td>
                                </tr>
  
                                </table> </center></td>
  
                                </tr>
  
                        </table>
  
                    </form>
                    <br><br><br>
                    <center>Don't you have a registration? <a href="Cadastro.php"><strong>Sign up</strong>. 
                    </center> 
                 
    </body>
</html>

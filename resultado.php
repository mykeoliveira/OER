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
    
    <title>Cognitive Style</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
      
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
                

                <?php
$tipos = str_replace("_", " *********************** ", $_GET['tipos']);    




//echo  "O seu nível de conhecimento é $tipos.";
//echo "<a href=$tipos.html>; $tipos </a>"; 
?> <br><br> <?php
if($tipos=="HOLISTA")
{
	
	echo "<h3>The cognitive style classified for you is the <b>Holist</b>.</h3><br><br>Holistic users are more prominent in the global context, since the beginning of an activity, they prefer to examine a vast amount of information looking for patterns and relationships between them. Holistic persons can solve complex problems with ease and are almost always good synthesizers. ";
}
if($tipos=="SERIALISTA")
{
	
	echo "<h3>The cognitive style classified for you is the <b>Serialist</b>.</h3><br><br>Serialist users place more emphasis on separate topics and in logical sequences, looking for patterns and relationships in the process, to confirm or not their assumptions. Their assumptions are simpler and have a logical-linear approach (from one assumption to the next step) step by step). They are competent to solve problems and often good analysts. ";
}
if($tipos=="DIVERGENTE")
{
	
	echo "<h3>The cognitive style classified for you is the <b>Divergent</b>.</h3><br><br>Divergent users are more creative, with imaginative, original and clear responses. They have a preference for informal problems, which request the spread of several equally conceivable responses, in which they are highlighted in the quantity, diversity and uniqueness of the responses. They are more willing to solve less structured problems. Socially, they are more impulsive and threatening. ";
}
if($tipos=="REFLEXIVO")
{
	
	echo "<h3>The cognitive style classified for you is the <b>Reflective</b>.</h3><br><br>Reflective users think before they do anything, like a course, for example. They have the most organized thoughts, sequenced and make a reflexive assessment before responding to an answer. ";
}
if($tipos=="CONVERGENTE")
{
	
	echo "<h3>The cognitive style classified for you is the <b>Convergent</b>.</h3><br><br>The convergent style integrates theory and practice. Convergent users use both abstraction and common sense in the practical application of ideas and theories, always look for the best solution to a practical problem and like to solve practical problems. They are better with technical tasks and problem solving than with social and interpersonal events. Preferred materials: Schemes and articles.";

}
if($tipos=="IMPULSIVO")
{
	
	echo "<h3>The cognitive style classified for you is the <b>Impulsive</b>.</h3><br><br>Impulsive users do not organize previous responses, usually accept the first hypothesis and offer quick solutions to problems. Preferred materials: diagrams and videos. ";
}
?>
<br><br> To continue, you need to test your expertise level. Click <a href="questionario_nivel_conhecimento/q1.php"> here</a>.

      
        
    </body>
</html>

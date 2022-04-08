<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="stylesheet.accounts.css">
<title>Fristads Styrkeklubb &gt; Startsida</title>
<meta charset="utf-8" content="width=device-width, initial-scale=1.8">
<meta name="viewport">



    </head>

    
        <header>

              
             <img class ="logo" src="download.png" alt="logo"> 
             <img class ="logo2" src="Gym.logo.png" alt="logo"> 

             
             <nav>
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle">
                 <div class="nav_links">       
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Medlemsskap.html">Medlemsskap</a></li>
                    <li><a href="OmOss.html">Om oss</a></li>
                    <li><a href="Instruktioner.html">Instruktioner</a></li>
                    <li><a href="kontaktaOss.html">Kontakta oss</a></li>
                    <li><a href="Nyheter.html">Nyheter</a></li>
                 </div>
             </nav>
             
             
             <a class="nav_links_button"  href="Loggain.php"><button>Logga in</button></a>
             <a class="nav_links_button"  href="CreateAccount.php"><button>Skapa konto</button></a>
           
            
    
            

         
        </header>

        <section class="MainInfo">
           <h2>Sign in</h2>

           <form action="login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">sign in</button>
          </form>

<?php
          if (isset($_GET["error"])){
    if($_GET["error"] == "emptyInput"){
    echo "<p>Fill In All Fields </p>";
    }
    else if($_GET["error"] == "wrongloin"){
        echo "<p>Wrong Login</p>";
    }
    else if($_GET["error"] == "stmtfiled"){
        echo "<p>Something Went Wrong </p>";
    }
    else if($_GET["error"] == "none"){
        echo "<p> You Are Logedin</p>";
    }
}
?>
    

     
        </section>

   
<footer>

    
       
      
        
       
        <div class="footer-bit ">
            <h3>Fristads Styrkeklubb</h3>
            <ul class="fa-ul">
            <li><i class="fa-li fa fa-phone-square"></i><a href="tel:8024685086">Orgnr 802468-5086</a></li>
            <li><i class="fa-li fa fa-envelope-o"></i><a href="mailto:webmaster@fristadsgymmet.se">webmaster@fristadsgymmet.se</a></li>
            </ul>
        </div>
  

</footer>

    </html>
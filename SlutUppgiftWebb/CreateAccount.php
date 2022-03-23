<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="stylesheet.accounts.css">
<title>Fristads Styrkeklubb &gt; Startsida</title>
<meta charset="utf-8" content="width=device-width, initial-scale=1.8">
<meta name="viewport">


    </head>

    <body>
        
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
             
             
             <a class="nav_links" href="Loggain.html"><button>Logga in</button></a>
             <a class="nav_links" href="CreateAccount.html"><button>Skapa konto</button></a>
           
            
    
            

         
        </header>

     <section class="MainInfo">

        <h2>Sign up</h2>
     <div class="signup-form-form"> 
       <form action="signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="email" placeholder="Email..">
        <input type="text" name="uid" placeholder="username...">
        <input type="password" name="pwd" placeholder="password...">
        <input type="password" name="pwdrepeat" placeholder="repeat password..."> 
        <button type="submit" name="submit">sign up</button>
      </form>
     </div>

     <?php 

if (isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
    echo "<p>Fill in all Fields </p>";
    }
    else if($_GET["error"] == "invaliduid"){
        echo "<p>Choose a proper username </p>";

    }
    else if($_GET["error"] == "invalidemail"){
        echo "<p>Choose a proper email </p>";

    }
    else if($_GET["error"] == "passwordsdontmatch"){
        echo "<p>passwods dont match </p>";

    }
    else if($_GET["error"] == "stmtfiled"){
        echo "<p>something went wrong </p>";

    }
    else if($_GET["error"] == "none"){
        echo "<p> You have signed up</p>";

    }

    
}

?>
     </section>
 
    </body>

  

    
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
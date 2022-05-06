
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fristads Styrkeklubb &gt; Startsida</title>

	<link rel="stylesheet" href="chat.css" />

	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

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
	   <li><a href="chat.php">Chat</a></li>
	</div>
</nav>


<a class="nav_links_button"  href="Loggain.php"><button>Logga in</button></a>
<a class="nav_links_button"  href="CreateAccount.php"><button>Skapa konto</button></a>






</header>

  <section class="MainInfo">
    
	<div id="wrapper">
		

	
		
		<div class="chat_wrapper">
			
			<div id="abc"></div>
			<div id="chat"></div>

			<form method="POST" id="messageFrm">
				<textarea name="message" cols="30" rows="7" class="textarea" placeholder="Please Type a message to send"></textarea>
			</form>

		</div>


	</div>
</section>


	<script>

		LoadChat();


		setInterval(function(){
		
				LoadChat();
		
		}, 1000);


		function LoadChat()
		{
			$.post('handlers/messages.php?action=getMessages', function(response){
				
				var scrollpos = $('#chat').scrollTop();
				var scrollpos = parseInt(scrollpos) + 520;
				var scrollHeight = $('#chat').prop('scrollHeight');

				$('#chat').html(response);

				if( scrollpos < scrollHeight ){
					
				}else{
					$('#chat').scrollTop( $('#chat').prop('scrollHeight') );
				}

			});
		}
		
		$('.textarea').keyup(function(e){
			if( e.which == 13 ){
				$('form').submit();
			}
		});


		$('form').submit(function(){

			var message = $('.textarea').val();

			$.post('handlers/messages.php?action=sendMessage&message='+message, function(response){

				if( response==1 ){
					LoadChat();
					document.getElementById('messageFrm').reset();
				}

			});

			return false;

		});


	</script>


</body>
</html>

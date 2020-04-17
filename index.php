<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="info642.css"  type="text/css" />
    </head>
    <body>
    
        <div id="connexion">
            <!-- zone de connexion -->
    		<div id= "formul">
	            <form  method="POST">

	            	<fieldset>
		                <legend>Connexion</legend>
		                
		                <p id = userword><label><b>Nom d'utilisateur</b></label><br/>
		                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required></p>

		                <p id = userword ><label><b>Mot de passe</b></label><br/>
		                <input type="password" placeholder="Entrer le mot de passe" name="password" required></p>

		                <input type="submit" id='submit' value='LOGIN' >
		            </fieldset>
	                
	            </form>
	            <a target="_blank" href="passOublié.php">Mot de passe oublié ?</a>
	            <div id = "logo">
    			 	<img src="images\logoPOPO.jpg" alt="" />
    			</div>

	        </div>


        </div>
    </body>
</html>

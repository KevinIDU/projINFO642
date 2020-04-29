<html>
    <head>
	
       <meta charset="utf-8">
        <link rel="stylesheet" href="page_2.css"  type="text/css" />
    </head>
    <body>
	
		<div id="entete">
			<h2 id="titre">Bienvenue sur la plateforme de commande de matériel</h2>
		
			<div id="cadreConnec">
			Nom d'utilisateur
			<p><a href="index.php">Se déconnecter</p></a>
			</div>
			
		
		</div>

		<div id="main">
			<div id="menu">
			<input type="submit" id='submit'onclick=window.location.href='page_2.php' value='FAIRE UNE DEMANDE' >
			<input type="submit" id='submit' value='MES DEMANDES' >
			<input type="submit" id='submit' value='CONTACTER UN ENSEIGNANT' >
			<input type="submit" id='submit' value='CONTACTER UN TECHNICIEN' >
			<input type="submit" id='submit' value='ENQUETE DE SATISFACTION' >
			
			</div>
			<div id="notifTchat">
			Notifications tchat
			</div>
			
			<div id="Carrousel">
			Carrousel d'images ?
			</div>
			

		<div id="contenu">
		<div id="form">
			<form action = 'ajout_demande.php' method='post'>
				<fieldset>
					<legend>Ajout Demande</legend>
					<p><label>Description du projet</label> : <textarea type='text' name='description'></textarea></p>
					<p><label>Ligne budgétaire</label> : <input type='number' name='budget' /></p>
					<p><label>Produits concernés</label> : <input type='text' name='produits' /></p>
					<p><label>Quantité</label> : <input type='number' name='quantité' /></p>
					<p><label>Fournisseur</label> : <input type='text' name='fournisseur' /></p>
					<p><label>Prix unitaire</label> : <input type='text' name='prix' /></p>
					<p><label>Lien vers site marchand</label> : <input type='url' name='lien' /></p>
					<p><label>Image du produit</label> : <input type='file' name='image' /></p>
					<p><label>Date de demande</label> : <input type='date' name='date' /></p>
					<p><label>Mail pour suivi de l'avancement</label> : <input type='mail' name='mail' /></p>
					<br>
					<input type='submit' id='submit2' value='Ajouter'>
				</fieldset>
			</form>
		
		</div>
		</div>

		<div id="footer">
		Site réalisé par Adrien Simard, Roshan Nepaul, Kévin Fanton et Yoann Raguenes
		<p> Etudiants en 3ème année de la filière IDU de Polytech Annecy-Chambéry</p>
			
		</div>
	</body>
</html>	
<?php
	include("connexion_base.php");	
	if(isset($_POST['description']) && isset($_POST['budget']) && isset($_POST['produits']) && isset($_POST['quantite']) && isset($_POST['fournisseur'])&& isset($_POST['prix']) && isset($_POST['lien']) && isset($_POST['date']) && isset($_POST['mail']) && isset($_POST['numero'])){
		$description = $_POST['description'];
		$budget = $_POST['budget'];
		$produits = $_POST['produits'];
		$quantite = $_POST['quantite'];
		$fournisseur = $_POST['fournisseur'];
		$prix = $_POST['prix'];
		$lien = $_POST['lien'];
		$date = $_POST['date'];
		$mail = $_POST['mail'];
		$numero = $_POST['numero'];

		$sql = "INSERT INTO demande_materiel(description, ligne_budgetaire, produit_concerne, quantite, fournisseur, prix_unitaire, lien_vers_site, image, jour, mail,numero) VALUES ('$description','$budget','$produits','$quantite','$fournisseur','$prix','$lien',NULL,'$date','$mail',$numero)";
		$sth = $base->prepare($sql);
	    $sth->execute();


	    echo '<body onLoad="alert(\'Votre ajout a bien été pris en compte!\')">';
		echo '<meta http-equiv="refresh" content="0;URL=accEtudiant.php">';
	}
?>
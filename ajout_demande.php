<?php
	include("connexion_base.php");
	if(isset($_POST['description']) && isset($_POST['budget']) && isset($_POST['produits']) && isset($_POST['quantité']) && isset($_POST['fournisseur']) && isset($_POST['prix']) && isset($_POST['lien']) && isset($_POST['date']) && isset($_POST['mail'])){
		$description = $_POST['description'];
		$budget = $_POST['budget'];
		$produits = $_POST['produits'];
		$quantité = $_POST['quantité'];
		$fournisseur = $_POST['fournisseur'];
		$prix = $_POST['prix'];
		$lien = $_POST['lien'];
		$date = $_POST['date'];
		$mail = $_POST['mail'];

		$sql = "INSERT INTO demande_matériel(id_demande, description, ligne_budgétaire, produit_concerné, quantité, fournisseur, prix_unitaire, lien_vers_site, image, jour, mail) VALUES (NULL,'$description','$budget','$produits','$quantité','$fournisseur','$prix','$lien',NULL,'$date','$mail')";

		echo $sql;
		$sth = $base->prepare($sql);
	    $sth->execute();

	    #echo '<body onLoad="alert(\'Votre ajout a bien été pris en compte!\')">';
		#echo '<meta http-equiv="refresh" content="0;URL=page_1.php">';
	}
?>
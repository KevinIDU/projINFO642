<?php
	include("connexion_base.php");
	$demande = $_POST['demande'];	
	$sql = "SELECT * FROM demande_materiel WHERE description = '".$demande."'";
	$sth = $base->prepare($sql);
	$sth->execute();
	$result = $sth->fetchAll();
	$id = $result[0][0];
	$description = $result[0][1];
	$budget = $result[0][2];
	$produit = $result[0][3];
	$quantite = $result[0][4];
	$fournisseur = $result[0][5];
	$prix = $result[0][6];
	$lien = $result[0][7];
	$image = $result[0][8];
	$jour = $result[0][9];
	$mail = $result[0][10];
	$numero = $result[0][11];
?>
<body>
	<h2 id="titre">Consultation de la demande</h2>
	<div  id="consultation">
		<fieldset>
					<legend>Demande</legend>
					<?php
					echo "Id de la demande:",$id;
					echo "<br>";
					echo "Description de la demande: ",$description;
					echo "<br>";
					echo "Numéro étudiant du demandeur :",$numero;
					echo "<br>";
					echo "Budget de la demande: ",$budget;
					echo "<br>";
					echo "Produit demandé: ",$produit;
					echo "<br>";
					echo "Quantité demandée: ",$quantite;
					echo "<br>";
					echo "Fournisseur du produit:",$fournisseur;
					echo "<br>";
					echo "Prix unitaire du produit:",$prix;
					echo "<br>";
					echo "Lien marchand vers le site du produit:",$lien;
					echo "<br>";
					echo "Image du produit:",$image;
					echo "<br>";
					echo "Date de la demande:",$jour;
					echo "<br>";
					echo "Mail du demandeur :",$mail;
					echo "<br>";
					echo "<form action = 'validation_demande.php' method='post'>";
					echo "<input type='submit' id='bouton_valider' value='Valider'>";
					echo "</form>";
					?>
		</fieldset>
	</div>
</body>
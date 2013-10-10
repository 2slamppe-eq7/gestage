<?php

class M_ListeMaitredeStage extends Modele {
 
function getAllListeMaitredeStage() {
        $pdo = $this->connecter();
        // Requête textuelle
        $query = "SELECT * FROM PERSONNE WHERE IDROLE=5;";
        // Exécuter la requête
        $resultSet = $pdo->query($query);
        // FETCH_CLASS permet de retourner des enregistrements sous forme d'objets de la classe spécifiée
        // ici : $this->nomClasseMetier contient "Enregistrement"
        // La classe Enregistrement est une classe générique vide qui sera automatiquement affublée d'autant
        // d'attributs publics qu'il y a de colonnes dans le jeu d'enregistrements
        $retour = $resultSet->fetchAll(PDO::FETCH_CLASS, $this->nomClasseMetier);
        $this->deconnecter();
        return $retour;
    }
	
}

?>


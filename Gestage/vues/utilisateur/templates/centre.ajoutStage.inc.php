<script language="JavaScript" type="text/javascript" src="../includes/fonctionsJavascript.inc.js"> </script>
<script language="JavaScript" type="text/javascript" src="../includes/jquery.js"> </script>
<script language="JavaScript" type="text/javascript" src="../includes/ajax.inc.js"> </script>
<form action='.?controleur=utilisateur&action=ajoutStageEtapeEntreprise' method='POST'>
    
<legend>Choisir la classe à afficher</legend>
       
        
        <label for="etudes">Etudes :</label>
        
        <select  type="select" name="etudes" id="etudes"><!-- OnChange apelle la fonction de remplissage des formullaire classe et option -->
            <option value="" Selected></option>
        <?php 
                   $tab1=array();//variable de stockage des id filliére
                   $cpt1=0;
            // création du contenue du select :
            foreach ($this->lesFormations as $formations) { 
                   $tab1[$cpt1]=$formations->NUMFILIERE;     
                   echo'<option value="'.$tab1[$cpt1].'">'.$formations->LIBELLEFILIERE.'</option>';   
                   $cpt1=$cpt1+1;
                   
            }
            
        ?>
        </select>
	
        
        
            <div id="FormulaireClasse">
            <!-- div qui contiendra le select de classe en lien à la fonction affichageClasse -->    
            </div>
        
        
          
        
            <input id="boutonAfficher" type='button' value="Afficher cette classe" ></input>
            
              <div id="FormulaireEtudiantClasse">
            <!-- div qui contiendra le tableau des eleve -->    
            </div>




</fieldset>

</form>

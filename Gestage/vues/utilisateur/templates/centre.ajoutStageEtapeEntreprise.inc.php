<form>
     <h1>Choisir l'entreprise prenant le stagiaire</h1>
<fieldset>
    
        
        <select id ="choixEntrepriseStage">
      <?php 
            foreach ($this->lesEntreprise as $LesEntreprise) { // boucle d'affichage de toute les entreprise
                   echo"<option value='".$LesEntreprise->IDORGANISATION ."'>".$LesEntreprise->NOM_ORGANISATION."</value>" ;
            }
        ?>    
        
        </select>
  </fieldset>  
  <fieldset>  
        <select id="choixMaitreStage">
        <?php 
            foreach ($this->lesMaitredeStage as $lesMaitredeStage) { // boucle d'affichage des Maitres de stage
                   echo"<option value='".$lesMaitredeStage->NOM ."'>".$lesMaitredeStage->PRENOM."</value>" ;
            }
        ?>       
        </select>
</fieldset>
 <fieldset>      
        <select id="choixDateDebut">
            
        </select>
</fieldset> 
<fieldset>      
        <select id="choixDateFin">
            
        </select>
</fieldset>
<fieldset>        
        <select id="choixDateVisite">
            
        </select>
</fieldset>




     
     
   
</form>
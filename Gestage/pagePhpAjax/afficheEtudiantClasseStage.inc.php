
        <?php
        //connection à la base de donnée 
        $db=mysql_connect('localhost','root','joliverie');
        mysql_select_db('GESTAGE',$db);
        //instantiation des variable
        $classe='';
        $option='';
        //récupération des variable envoyer par jquery
        if(isset($_GET['value1'])){
        $classe=$_GET['value1'];
            }
            
             $requet="SELECT * FROM PERSONNE WHERE ETUDES='".$classe."';"; // requete pour récupérer le contenue  du tableaux
             $requetExe=mysql_query($requet);      
            // création du contenue du select :
             echo"<label>choix élève</label>";
             echo'<select id="choixEleve">';
            While ($data=mysql_fetch_assoc($requetExe))  { //boucle de ligne du tableau
                      
                   echo'<option value="'.$data['IDPERSONNE'].'">'.$data['NOM'].' '.$data['PRENOM'].'</option>';   
                   
                   
            
        }
        echo"</select>";
        echo"<input type='submit', value='Passer à la 2ème étape'></input>"
        
        ?>
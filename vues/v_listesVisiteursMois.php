<form action="index.php?uc=etatFrais&action=validerVM" 
    method="post" role="form">
    <fieldset>
        <div class="col-md-4">   
            <div class="form-group">
                <label for="lstVisiteur" accesskey="n"> Choisir les visiteurs : </label>
                <select id="lstVisiteur" name="lstVisiteur" class="form-control">
                    <?php
                    foreach ($visiteurs as $unVisiteur) {
                        $id = $unVisiteur['id'];
                        $nom = $unVisiteur['nom'];
                        $prenom = $unVisiteur['prenom'];
                    if ($id == $visiteurASelectionner){
                        ?>
                        <option selected value="<?php echo $id ?>">
                          <?php echo $nom . ' ' . $prenom ?> </option>
                    }else{
                        ?>
                        <option selected value="<?php echo $id ?>">
                            <?php echo $nom . ' ' . $prenom ?> </option>
                        <?php
                        }
                    }
                    ?>
                </select>
            </div>   
            <input id="ok" type="submit" value="Valider" class ="btn btn-success"
                   role="button">
        </div>
        
        <div class="col-md-4">
             <div class="form-group">
                <label for="lstMois" accesskey="n">Mois : </label>
                <select id="lstMois" name="lstMois" class="form-control">
                    <?php
                    foreach ($lesMois as $unMois) {
                        $mois = $unMois['mois'];
                        $numAnnee = $unMois['numAnnee'];
                        $numMois = $unMois['numMois'];
                        if ($mois == $moisASelectionner) {
                            ?>
                            <option selected value="<?php echo $mois ?>">
                                <?php echo $numMois . '/' . $numAnnee ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $mois ?>">
                                <?php echo $numMois . '/' . $numAnnee ?> </option>
                            <?php
                        }
                    }
                    ?>
                </select> 
            </div>    
        </div>
    </fieldset>       
</form>


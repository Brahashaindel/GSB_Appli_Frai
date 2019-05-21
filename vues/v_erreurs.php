<?php

?>
<div class="alert alert-danger" role="alert">
    <?php
    foreach ($_REQUEST['erreurs'] as $erreur) {
        echo '<p>' . htmlspecialchars($erreur) . '</p>';//echo sert à afficher en html
    }
    ?>
</div>
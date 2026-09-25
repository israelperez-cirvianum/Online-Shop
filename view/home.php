<?php
    include('./templates/header.php');
    include('./templates/navbar.php');
    include('./templates/navbar_debug.php');

    
?>

<p>USUARI: <?= $_SESSION['actual_user']['name'] ?></p>
<p>Llista d'usuaris: <?php var_dump($_SESSION['users']) ?></p>

<?php
    include('./templates/footer.php');
?>
<?php
include 'views/includes/header.php';
if (isset($_GET['page'])) {
    $page=$_GET['page'];
}
else {
    $page="accueil";
}
switch ($page) {
    case 'accueil':
        include 'views/accueil.php';
        break;
    case 'projet':
        include 'views/projet.php';
        break;
    case 'apropos':
        include 'views/apropos.php';
        break;
}
include 'views/includes/footer.php';
?>
<?php
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Utilisateur</a>
            </li>
            <!-- Remplacer par une query qui va chercher toutes les categories en base de données -->
            <!-- Les categories ne doivent pas etre visible par l'administateur -->
            <?php
            if (!isset($_SESSION['utilisateur'])) {
                echo ' <li class="nav-item">';
                echo  '<a class="nav-link" href="../connexion/login.php">connexion</a>';
                echo '</li>';
            } ?>
            <?php
            if (isset($_SESSION['utilisateur'])) {
                echo ' <li class="nav-item">';
                echo  '<a class="nav-link" href="../connexion/login.php">deconnexion</a>';
                echo '</li>';
            } ?>
        </ul>
    </div>
</nav>



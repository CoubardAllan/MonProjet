<?php
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <!-- Remplacer par une query qui va chercher toutes les categories en base de données -->
            <!-- Les categories ne doivent pas etre visible par l'administateur -->
            <li class="nav-item">
                <a class="nav-link" href="../categorie/index.php">Categories</a>
            </li><li class="nav-item">
                <a class="nav-link" href="redacteur.php">Articles</a>
            </li>
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
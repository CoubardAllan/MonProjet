
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php
            use App\requete\categoriesRepository;
            $categorie = new categoriesRepository();
            ?>
            <?php foreach ($categorie->findAll() as $categories) : ?>
            <form method="get" action="">
            <li class="nav-item">
                <a class="nav-link" href="categorie/index.php?id=<?php echo $categories->id ?>"><?php echo $categories->nom ?><span class="sr-only">(current)</span></a>
            </li>
            </form>
            <?php endforeach; ?>
            <?php
            if (!isset($_SESSION['utilisateur'])) {
                echo ' <li class="nav-item">';
                echo  '<a class="nav-link" href="../template/connexion/login.php">connexion</a>';
                echo '</li>';
            } ?>
            <?php
            if (isset($_SESSION['utilisateur'])) {
                echo ' <li class="nav-item">';
                echo  '<a class="nav-link" href="../template/connexion/login.php">deconnexion</a>';
                echo '</li>';
            } ?>
        </ul>
    </div>
</nav>


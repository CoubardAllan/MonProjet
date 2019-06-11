
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php
            use App\requete\requete;
            $article = new requete();
            $article->select('nom')->from('articles');
            ?>
            <!-- Remplacer par une query qui va chercher toutes les categories en base de données -->
            <!-- Les categories ne doivent pas etre visible par l'administateur -->
            <?php foreach ($article->select('nom')->from('categories')->execute() as $articles) : ?>
            <li class="nav-item active">
                <a class="nav-link" href="categorie/index.php"><?php echo $articles->nom ?><span class="sr-only">(current)</span></a>
            </li>
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


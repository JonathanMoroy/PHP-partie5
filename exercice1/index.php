<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie5/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie5/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie5/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie5/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie5/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie5/exercice7/">Exercice 7</a></li>
                <li><a href="http://partie5/exercice8/">Exercice 8</a></li>
                <li><a href="http://partie5/exercice9/">Exercice 9</a></li>
                <li><a href="http://partie5/exercice10/">Exercice 10</a></li>
            </ul>
        </nav>
        <p>Créer un tableau mois et l'initialiser avec les valeurs suivantes :
        <ul>
            <li>janvier</li>
            <li>février</li>
            <li>mars</li>
            <li>avril</li>
            <li>mai</li>
            <li>juin</li>
            <li>juillet</li>
            <li>aout</li>
            <li>septembre</li>
            <li>octobre</li>
            <li>novembre</li>
            <li>décembre</li>
        </ul>
        </p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
        Affichage de mon tableau months:
        <?php
        // Déclaration de mon tableau
        $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        // Affichage de mon tableau
        print_r($months);
        ?>
        </p>
    </body>
</html>
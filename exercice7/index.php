<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie5/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie5/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie5/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie5/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie5/exercice5/">Exercice 5</a></li>
                <li><a href="http://partie5/exercice6/">Exercice 6</a></li>
                <li><a href="http://partie5/exercice8/">Exercice 8</a></li>
                <li><a href="http://partie5/exercice9/">Exercice 9</a></li>
                <li><a href="http://partie5/exercice10/">Exercice 10</a></li>
            </ul>
        </nav>
        <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Ajout de l'index 51 et affichage du tableau associatif:
            <?php
            // Déclaration de mon tableau
            $associatif = array(2=>'Aisne', 59=>'Nord', 60=>'Oise', 62=>'Pas-de-Calais', 80=>'Somme');
            // Ajout de l'index 51 et affichage du tableau associatif
            $associatif[51] = 'Champagne'; 
            var_dump($associatif);
            ?>
        </p>
    </body>
</html>
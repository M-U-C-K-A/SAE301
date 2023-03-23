<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../media/reset.css">
    <link rel="stylesheet" href="../media/main.css">
    <link rel="stylesheet" href="../media/eco.css">

    <title>Eco responsable</title>
</head>

<body>
    <header>
        <ul>
            <li><a href="#">Look Down</a></li>
            <span>
                <li><a href="#">Accueil</a></li>
                <li><a href="page/about.html">À propos</a></li>
                <li><a href="page/agir.html">Agir</a></li>
                <li><a href="page/eco.html">Eco résponsable</a></li>
            </span>
        </ul>
    </header>
    <!--Header-->

    <main>

        <section>
            <h1>Prêt pour le <strong>defi</strong> ?</h1>
            <blockquote>Voici quelques actions concrètes que vous pouvez mettre en place pour agir et soutenir la cause :</blockquote>
        </section>

        <section>
            <form action="" method="get">
            <?php
            $question = ['question 1', 'question 2', 'question 3', 'question 4', 'question 5', 'question 6', 'question 7', 'question 8', 'question 9', 'question 10'];
            $response = array(
                array("réponse 1.1", "réponse 1.2", "réponse 1.3", "réponse 1.4"),
                array("réponse 2.1", "réponse 2.2", "réponse 2.3", "réponse 2.4"),
                array("réponse 3.1", "réponse 3.2", "réponse 3.3", "réponse 3.4"),
                array("réponse 4.1", "réponse 4.2", "réponse 4.3", "réponse 4.4"),
                array("réponse 5.1", "réponse 5.2", "réponse 5.3", "réponse 5.4"),
                array("réponse 6.1", "réponse 6.2", "réponse 6.3", "réponse 6.4"),
                array("réponse 7.1", "réponse 7.2", "réponse 7.3", "réponse 7.4"),
                array("réponse 8.1", "réponse 8.2", "réponse 8.3", "réponse 8.4"),
                array("réponse 9.1", "réponse 9.2", "réponse 9.3", "réponse 9.4"),
                array("réponse 10.1", "réponse 10.2", "réponse 10.3", "réponse 10.4"),
            );


            for ($i = 1; $i < 11; $i++) {
                echo '<article><p><strong>' . $i . '-</strong> ' . $question[$i - 1] . '<ul>';
                for ($j = 0; $j < count($response[$i - 1]); $j++) {
                    echo ' <li>   <input type="radio" id="question-'.$i.'"
                    name="question-'.$i.'" value="'.$i.$j.'" required>';
                    echo '
                    <label for="question-'.$i.'">'.$response[$i-1][$j].'</label></li>';
                }
                echo '</ul></article>';
            }
            ?>
            <input type="submit" value="envoyer">
            </form>

    </main>

    <footer>
        <ul>
            <li>look.down@gmail.com</li>
            <li>Copyright 2023 - Tous droits réservés - Look Down</li>
            <li><i class="fa-brands fa-square-instagram"></i><i class="fa-brands fa-square-twitter"></i><i
                    class="fa-brands fa-square-facebook"></i></li>
        </ul>
    </footer>
    <!--Footer-->
</body>

</html>
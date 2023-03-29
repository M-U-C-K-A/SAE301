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

<body class="eco">
    <header>
        <ul>
            <li><a href="#">Look Down</a></li>
            <span>
                <li><a href="#">Accueil</a></li>
                <li><a href="page/about.html">À propos</a></li>
                <li><a href="page/agir.html">Agir</a></li>
                <li><a href="page/eco.html">Quizz</a></li>
            </span>
        </ul>
    </header>
    <!--Header-->

    <main>

        <section>
            <h1>Prêt pour le <strong>defi</strong> ?</h1>
            <blockquote>Voici quelques actions concrètes que vous pouvez mettre en place pour agir et soutenir la cause :</blockquote>
        </section>
        <?php
        session_start();
        ?>
        <form action="reponse.php" method="post">
            <?php
            $host = 'localhost';
            $dbname = 'sae401';
            $username = 'root';
            $password = '';

            try {
                $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            } catch (PDOException $e) {
                echo "Erreur de connexion à la base de données : " . $e->getMessage();
                exit();
            }

            $ids = array();
            // Récupération des questions et réponses
            $query = "SELECT * FROM questionnaire WHERE id BETWEEN 1 AND 40 GROUP BY id ORDER BY RAND() LIMIT 10";
            $stmt = $db->query($query);
            $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $e = 1;
            foreach ($questions as $question) {
                echo '<article><p><strong>' . $e . '-</strong> ' . $question['question'] . '<ul>';
                echo '<li><input type="radio" name="question-' . $question['id'] . '" value="a" required>';
                echo '<label>' . $question['rep_a'] . '</label></li>';
                echo '<li><input type="radio" checked name="question-' . $question['id'] . '" value="b" required>';
                echo '<label>' . $question['rep_b'] . '</label></li>';
                echo '<li><input type="radio" name="question-' . $question['id'] . '" value="c" required>';
                echo '<label>' . $question['rep_c'] . '</label></li>';
                echo '<li><input type="radio" name="question-' . $question['id'] . '" value="d" required>';
                echo '<label>' . $question['rep_d'] . '</label></li>';
                echo '</ul></article>';
                $ids[] = $question['id'];
                $e++;
            }
            print_r($ids);
            $_SESSION['id'] = $ids;
            ?>
            <script>
                console.log(<?php print_r($ids);?>)
            </script>
            <input type="submit" value="envoyer">
        </form>

    </main>

    <footer>
        <ul>
            <li>look.down@gmail.com</li>
            <li>Copyright 2023 - Tous droits réservés - Look Down</li>
            <li><i class="fa-brands fa-square-instagram"></i><i class="fa-brands fa-square-twitter"></i><i class="fa-brands fa-square-facebook"></i></li>
        </ul>
    </footer>
    <!--Footer-->
</body>

</html>
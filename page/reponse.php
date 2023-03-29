<?php
$score = 9;
session_start();
$IDS = $_SESSION['id'];


$host = 'localhost';
$dbname = 'sae401';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM questionnaire WHERE id IN (" . implode(",", $IDS) . ")";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../media/reset.css">
    <link rel="stylesheet" href="../media/main.css">
    <link rel="stylesheet" href="../media/reponse.css">

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
        <section class="card">
            <h1>Vous avez eu l'honorable score de : <?= $score; ?>/10</h1>
            <blockquote>Voici le récapitulatif de chaque questions</blockquote>
            <br>
            <?php
            for ($i = 0; $i < 10; $i++) {
                echo '<ul>';
                echo '<li><h4><strong>'.$i.'</strong>-' . $result[$i]['question'] . '</h4></li>';
                echo '<li><h5> Réponse: ' . $result[$i]['rep_a'] . '</h5></li>';
                echo '</ul>';
            }
            ?>
        </section>
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
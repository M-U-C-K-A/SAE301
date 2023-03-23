<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../media/reset.css">
    <link rel="stylesheet" href="../media/main.css">
    <link rel="stylesheet" href="../media/reponse.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Eco responsable</title>
    <style>
    </style>
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
            <blockquote>Voici quelques actions concrètes que vous pouvez mettre en place pour agir et soutenir la cause
                :</blockquote>
        </section>

        <section>
            <?php


            // Add 6 more items to the array
            for ($i = 1; $i <= 10; $i++) {
                $carouselSlides[] = array(
                    'id' => "carousel__slide$i",
                    'prev' => "#carousel__slide" . ($i - 1),
                    'next' => "#carousel__slide" . ($i + 1)
                );
            }

            // Encode the array as JSON and save to file
            $json = json_encode($carouselSlides);
            file_put_contents('data.json', $json);
            ?>
            <section class="carousel" aria-label="Gallery">
                <ol class="carousel__viewport">
                    <?php foreach ($carouselSlides as $slide): ?>
                        <li id="<?php echo $slide['id']; ?>" tabindex="0" class="carousel__slide">
                            <div class="carousel__snapper">


                                <?php
                                if ($slide['id'] == 'carousel__slide1') {
                                    echo "hey
                                    
                                    <canvas id='myChart' style='width: 10%;'></canvas>";
                                } elseif ($slide['id'] == 'carousel__slide2') {
                                    echo "salut";
                                } elseif ($slide['id'] == 'carousel__slide3') {
                                    echo "ça";
                                } elseif ($slide['id'] == 'carousel__slide4') {
                                    echo "slide 4";
                                } elseif ($slide['id'] == 'carousel__slide5') {
                                    echo "slide 5";
                                } elseif ($slide['id'] == 'carousel__slide6') {
                                    echo "slide 6 ";
                                } elseif ($slide['id'] == 'carousel__slide7') {
                                    echo "slide 7 ";
                                } elseif ($slide['id'] == 'carousel__slide8') {
                                    echo "slide 8 ";
                                } elseif ($slide['id'] == 'carousel__slide9') {
                                    echo "slide 9 ";
                                } elseif ($slide['id'] == 'carousel__slide10') {
                                    echo "slide 10 ";
                                }

                                ?>


                            </div>
                            <a href="<?php echo $slide['prev']; ?>" class="carousel__prev">Go to previous slide</a>
 <script>
		// génération des données aléatoires
		var randomData = [];
		for (var i = 0; i < 4; i++) {
			randomData.push(Math.floor(Math.random() * 90000) + 10000);
		}

		// création du chart
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'doughnut',
		    data: {
		        labels: ['A', 'B', 'C', 'D'],
		        datasets: [{
		            data: randomData,
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.6)',
		                'rgba(54, 162, 235, 0.6)',
		                'rgba(255, 206, 86, 0.6)',
		                'rgba(75, 192, 192, 0.6)'
		            ]
		        }]
		    },
		    options: {}
		});
	</script>
                            <a href="<?php echo $slide['next']; ?>" class="carousel__next">Go to next slide</a>
                        </li>
                    <?php endforeach;
                    ?>
                </ol>

                <aside class="carousel__navigation">
                    <ol class="carousel__navigation-list">
                        <?php for ($i = 1; $i <= count($carouselSlides); $i++): ?>
                            <li class="carousel__navigation-item">
                                <a href="#<?php echo $carouselSlides[$i - 1]['id']; ?>" class="carousel__navigation-button">
                                    Go to slide <?php echo $i; ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ol>


            </section>

        </section>
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
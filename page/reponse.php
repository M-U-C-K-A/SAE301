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
        @keyframes tonext {
            75% {
                left: 0;
            }

            95% {
                left: 100%;
            }

            98% {
                left: 100%;
            }

            99% {
                left: 0;
            }
        }

        @keyframes tostart {
            75% {
                left: 0;
            }

            95% {
                left: -300%;
            }

            98% {
                left: -300%;
            }

            99% {
                left: 0;
            }
        }

        @keyframes snap {
            96% {
                scroll-snap-align: center;
            }

            97% {
                scroll-snap-align: none;
            }

            99% {
                scroll-snap-align: none;
            }

            100% {
                scroll-snap-align: center;
            }
        }

        body {
            max-width: 37.5rem;
            margin: 0 auto;
            padding: 0 1.25rem;
            font-family: 'Lato', sans-serif;
        }

        * {
            box-sizing: border-box;
            scrollbar-color: transparent transparent;
            /* thumb and track color */
            scrollbar-width: 0px;
        }

        *::-webkit-scrollbar {
            width: 0;
        }

        *::-webkit-scrollbar-track {
            background: transparent;
        }

        *::-webkit-scrollbar-thumb {
            background: transparent;
            border: none;
        }

        * {
            -ms-overflow-style: none;
        }

        ol,
        li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .carousel {
            position: relative;
            padding-top: 75%;
            filter: drop-shadow(0 0 10px #0003);
            perspective: 100px;
        }

        .carousel__viewport {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            overflow-x: scroll;
            counter-reset: item;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
        }

        .carousel__slide {
            position: relative;
            flex: 0 0 100%;
            width: 100%;
            background-color: #f99;
            counter-increment: item;
        }

        .carousel__slide:nth-child(even) {
            background-color: #99f;
        }

        .carousel__slide:before {

            color: #fff;
            font-size: 1.5em;
        }

        .carousel__snapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            scroll-snap-align: center;
        }

        @media (hover: hover) {
            .carousel__snapper {
                animation-name: tonext, snap;
                animation-timing-function: ease;
                animation-duration: 4s;
                animation-iteration-count: infinite;
            }

            .carousel__slide:last-child .carousel__snapper {
                animation-name: tostart, snap;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel__snapper {
                animation-name: none;
            }
        }

        .carousel:hover .carousel__snapper,
        .carousel:focus-within .carousel__snapper {
            animation-name: none;
        }

        .carousel__navigation {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            text-align: center;
        }

        .carousel__navigation-list,
        .carousel__navigation-item {
            display: inline-block;
        }

        .carousel__navigation-button {
            display: inline-block;
            width: 1.5rem;
            height: 1.5rem;
            background-color: #333;
            background-clip: content-box;
            border: 0.25rem solid transparent;
            border-radius: 50%;
            font-size: 0;
            transition: transform 0.1s;
        }

        .carousel::before,
        .carousel::after,
        .carousel__prev,
        .carousel__next {
            position: absolute;
            top: 0;
            margin-top: 37.5%;
            width: 4rem;
            height: 4rem;
            transform: translateY(-50%);
            border-radius: 50%;
            font-size: 0;
            outline: 0;
        }

        .carousel::before,
        .carousel__prev {
            left: -1rem;
        }

        .carousel::after,
        .carousel__next {
            right: -1rem;
        }

        .carousel::before,
        .carousel::after {
            content: '';
            z-index: 1;
            background-color: #333;
            background-size: 1.5rem 1.5rem;
            background-repeat: no-repeat;
            background-position: center center;
            color: #fff;
            font-size: 2.5rem;
            line-height: 4rem;
            text-align: center;
            pointer-events: none;
        }

        .carousel::before {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,50 80,100 80,0' fill='%23fff'/%3E%3C/svg%3E");
        }

        .carousel::after {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='100,50 20,100 20,0' fill='%23fff'/%3E%3C/svg%3E");
        }

        #myChart {
            width: 10%;
        }
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
                                    
                                    <canvas id='myChart' style='width: 10%;'></canvas>

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
    
                                    ";
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
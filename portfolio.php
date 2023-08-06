<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> CINEF | Portfolio </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include './layout_css.php'?>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">


    <style>
        main{
            width: 100%;
            /* background-image: linear-gradient( rgba(249,249,249,0.5), rgb(32,201,151,0.5) ), url(./assets/img/img_folio/img_salle_1.jpeg); */
            /* background-image: linear-gradient( rgb(32,201,151,0.8), rgba(249,249,249,0.8) ), url(./assets/img/img_folio/img_salle_2.jpeg); */
            /* background-image: linear-gradient( rgb(32,201,151,1), rgba(249,249,249,0.4) ), url(./assets/img/img_folio/img_salle_3.jpeg); */
            /* background-image: linear-gradient( rgba(249,249,249,0.5), rgb(32,201,151,0.5) ), url(./assets/img/img_folio/background.jpeg); */
            /* background-image: linear-gradient( rgb(72 83 71 / 50%), rgb(0 104 56 / 62%) ), url(./assets/img/img_folio/background.jpeg); */
            background-image: linear-gradient( rgb(255 255 255), rgb(255 255 255 / 62%) );
            background-size: cover ;
            background-position: center;
        }

        .container-fluid{
            padding-bottom: 15px;
            box-shadow: #000;
        }

        .container{
            height: 50%;
        }
       
        .row{
            padding-top: 30% 40%;
            align-items: center;
        }


        .title_folio{
            color: green;
            /* color: cadetblue; */
            font-size: 3em ;
        }

        .col .content_folio_description {
            line-height: 25px;
            font-size: 15px;
            color: black;
            text-align: justify;
            width: 80%;
        } 

        .button_explo {
            width: 384px;
            font-size: 20px;
            background: #dee2e6;
            border: 0;
            border-radius: 20px;
            outline: none;
            margin-top: 30px;
            padding: 12px 0;
            color: green;
            font-weight: bolder;
            transition: all .3s;
        }

        .button_explo:hover{
            background-color: rgba(0,102,51,0.7);
            color: white;
            transition: all .3s;
        }

        .col .cadre{
            padding-top: -40px;
        }

        .cards{
            width: 200px;
            height: 230px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            margin: 10px 15px;
            box-sizing: border-box;
            cursor: pointer;
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
            background-color: #000 ;
        }

        /* Start the insertion of image */
        
        /* Animation */

        .card1{
            background-image: url(./assets/img/img_folio/animation/1.png);
        }
        .card2{
            background-image: url(./assets/img/img_folio/animation/3.png);
        }
        .card3{
            background-image: url(./assets/img/img_folio/animation/10.png);
        }
        .card4{
            background-image: url(./assets/img/img_folio/animation/14.png);
        }

        .card5{
            background-image: url(./assets/img/img_folio/animation/15.png);
        }
        .card6{
            background-image: url(./assets/img/img_folio/animation/17.png);
        }
        .card7{
            background-image: url(./assets/img/img_folio/animation/20.png);
        }
        .card8{
            background-image: url(./assets/img/img_folio/animation/22.png);
        }

        /* Formation */

        .card9{
            background-image: url(./assets/img/img_folio/formation/5.png);
        }
        .card10{
            background-image: url(./assets/img/img_folio/formation/6.png);
        }
        .card11{
            background-image: url(./assets/img/img_folio/formation/7.png);
        }
        .card12{
            background-image: url(./assets/img/img_folio/formation/8.png);
        }

        .card13{
            background-image: url(./assets/img/img_folio/formation/13.png);
        }
        .card14{
            background-image: url(./assets/img/img_folio/formation/18.png);
        }
        .card15{
            background-image: url(./assets/img/img_folio/formation/19.png);
        }
        .card16{
            background-image: url(./assets/img/img_folio/formation/21.png);
        }

        /* Visites touristiques */

        .card17{
            background-image: url(./assets/img/img_folio/historique/2.jpeg);
        }
        .card18{
            background-image: url(./assets/img/img_folio/historique/4.jpeg);
        }
        .card19{
            background-image: url(./assets/img/img_folio/historique/9.jpeg);
        }
        .card20{
            background-image: url(./assets/img/img_folio/historique/11.jpeg);
        }
        .card21{
            background-image: url(./assets/img/img_folio/historique/12.jpeg);
        }
        .card22{
            background-image: url(./assets/img/img_folio/historique/13.jpeg);
        }
        .card23{
            background-image: url(./assets/img/img_folio/historique/14.jpeg);
        }
        .card24{
            background-image: url(./assets/img/img_folio/others/12.png);
        }

        /* Fin de linsertion des pictures */

        .cards:hover{
            transform: translateY(-10px);
            z-index: 1;
            background-color: #999;
        }

        .title_card{
            color: #fff;
            text-shadow: 0 0 5px #999;
        }

        .cards p {
            text-shadow: 0 0 15px #000;
            font-size: 8px;
        }

        .splide__arrow--prev{
            left: -1em;
        }

        .splide__arrow--next{
            right: 3em;
        }

    </style>

</head>


<body>
    
    <!-- START HEADER -->
        <?php include './header.php'?>
    <!-- End Header -->

    <!--  <main id="main"> -->

    <main class="">

        <div class="container-fluid pt-4">
            <div class="text-center"> 
                <h3 style="color:green"> CINEF SAS </h3>
                <br>
                <h4> Le memorial d'un parcours inspirant </h4>
            </div>
        </div>

        <div class="container">

            <!-- Animation au sein de CINEF -->
            <div class="row">

                <div class="col cadre splide" id="image-slider">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <div class="cards card1 "></div>
                                <div class="cards card2 "></div>
                                <div class="cards card3 "></div>
                                <div class="cards card4 "></div>
                            </div>
                            <div class="splide__slide">
                                <div class="cards card5 "></div>
                                <div class="cards card6 "></div>
                                <div class="cards card7 "></div>
                                <div class="cards card8 "></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h1 class="title_folio"> Animations </h1>
                    <p class="content_folio_description">
                        Des parcours individuels qui ont été enrichis grâce à notre approche pédagogique moderne et personnalisée, mettant en lumière le potentiel unique de chaque participant.
                        Rejoignez-nous dans cette exploration stimulante et découvrez comment notre entreprise de formation professionnelle a façonné des carrières brillantes et ouvert des horizons illimités pour ceux qui ont choisi de marcher avec nous. 
                    </p>
                    <a target="blank" href="https://wa.me/22994051156">
                        <!-- Button trigger modal -->
                        <button type="button" data-toggle="modal" data-target="#modalAnimation" class="button_explo"> 
                                Contactez - nous <i class="mx-2 fa-brands fa-whatsapp fs-3"></i>   
                        </button>
                    </a>

                    <!-- Modal -->

                    <div class="modal fade" id="modalAnimation" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Ambiance des formations -->

            <div class="row">

                <div class="col">
                    <h1 class="title_folio"> Ambiance de nos formations </h1>
                    <p class="content_folio_description">
                        Nous sommes fiers de partager ces moments marquants et nous vous invitons à faire partie de notre succès en créant ensemble un avenir prometteur.
                    </p>
                    <a href="#">
                        <button class="button_explo"> Explore </button>
                    </a>
                </div>

                <div class="col cadre splide" id="image-slider1">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <div class="cards card9 "></div>
                                <div class="cards card10 "></div>
                                <div class="cards card11 "></div>
                                <div class="cards card12 "></div>
                            </div>
                            <div class="splide__slide">
                                <div class="cards card13 "></div>
                                <div class="cards card14 "></div>
                                <div class="cards card15 "></div>
                                <div class="cards card16 "></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Visites touristiques -->

            <div class="row">
                
                <div class="col cadre splide" id="image-slider2">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <div class="cards card17 "></div>
                                <div class="cards card18 "></div>
                                <div class="cards card19 "></div>
                                <div class="cards card20 "></div>
                            </div>
                            <div class="splide__slide">
                                <div class="cards card21 "></div>
                                <div class="cards card22 "></div>
                                <div class="cards card23 "></div>
                                <!-- <div class="cards card24 "></div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h1 class="title_folio"> Visites touristiques </h1>
                    <p class="content_folio_description">
                        Apres l'effort, c'est le reconfort !! Dis-on.
                        Ainsi donc, rejoignez-nous dans cette escapade virtuelle et laissez-vous transporter dans des lieux envoûtants, où la magie de chaque site touristique s'entrelace avec la convivialité de nos équipes. 
                        Préparez-vous à être émerveillés et à ressentir une nouvelle perspective sur le monde grâce à nos moments de réconfort vécus lors de nos périples captivants.
                    </p>
                    <a href="#">
                        <button class="button_explo"> Explore </button>
                    </a>
                </div>

            </div>


        </div>


    </main><!-- End #main -->

    <footer class="footer">

        <div>
            <center>Designed by CINEF SAS Copyright © 2023. All rights reserved.<center>
        </div>

    </footer>

    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    
    <?php include 'layout_js.php'?>
    
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>


    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide('#image-slider').mount();
            new Splide('#image-slider1').mount();
            new Splide('#image-slider2').mount();

        } );

        $('#modalAnimation').on('shown.bs.modal', function (event) {
            // $('#myInput').trigger('focus')
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        });
    </script>

</body>

</html>
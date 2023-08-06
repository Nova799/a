<?php
//  require ('./config/conn.php') ;
 require (realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/config/conn.php');
 require (realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"> -->

    <title> CINEF - FORMATION PROFESSIONNELLE ET CONTINUE </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include ('layout_css.php') ?>


    <style>
        .dropdown-menu {
            display: none;
        }

        .navbar li:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu a {
            color: white;
            /* Ajoutez la couleur de texte souhaitée ici */
        }

        .btn-sub {
            background: white;
            color: #1a5c40;
            font-weight: bold;
            text-transform: uppercase;
        }

        .btn-sub:hover {
            color: white;
            background: black;
        }

        marquee {
            white-space: nowrap;
            overflow: hidden;
            animation: marquee 50s linear infinite;
        }

        @keyframes marquee {
        0% { transform: translateX(0%); }
        /* 100% { transform: translateX(-100%); } */
        }

    </style>



</head>


<body>

    <!-- START HEADER -->
        <?php include_once('./header.php') ?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Bienvenue à CINEF</h2>
                    <p>La formation professionnelle et continue est le socle du développement des compétences. Nous donnons vie à vos envies.</p>
                    <h1 class="text-white">Nous vous accompagnons dans le développement de vos compétences !</h1>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/hero.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        <div class="position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->
    <!--services section start -->
    <div id="services" class="what_we_do_section layout_padding top-0 py-5">
        <div class="my-4">&emsp;</div>
        <div class="container">
            <h1 class="what_taital text-center"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 9h14M5 15h14"></path>
                </svg>NOS SERVICES<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 9h14M5 15h14"></path>
                </svg></h1>
            <p class="what_text text-center py-2">Vous êtes unique ! Décidez-vous maintenant et entrez dans le cercle des leaders. </p>
            <div class="what_we_do_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main ">
                            <div class="icon_1 text-center">
                                <h5> <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M16 4c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2m4.78 3.58C19.93 7.21 19 7 18 7c-.67 0-1.31.1-1.92.28c.58.55.92 1.32.92 2.15V10h5v-.57c0-.81-.5-1.53-1.22-1.85M6 6c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2m1.92 1.28C7.31 7.1 6.67 7 6 7c-1 0-1.93.21-2.78.58C2.5 7.9 2 8.62 2 9.43V10h5v-.57c0-.83.34-1.6.92-2.15M10 4c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2m6 6H8v-.57c0-.81.5-1.53 1.22-1.85C10.07 7.21 11 7 12 7c1 0 1.93.21 2.78.58C15.5 7.9 16 8.62 16 9.43V10m-1 6c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2m6 6h-8v-.57c0-.81.5-1.53 1.22-1.85C15.07 19.21 16 19 17 19c1 0 1.93.21 2.78.58c.72.32 1.22 1.04 1.22 1.85V22M5 16c0-1.1.9-2 2-2s2 .9 2 2s-.9 2-2 2s-2-.9-2-2m6 6H3v-.57c0-.81.5-1.53 1.22-1.85C5.07 19.21 6 19 7 19c1 0 1.93.21 2.78.58c.72.32 1.22 1.04 1.22 1.85V22m1.75-9v-2h-1.5v2H9l3 3l3-3h-2.25Z"></path>
                                    </svg></h5>
                            </div>

                            <h3 class="accounting_text text-center">Pôle GRH +</h3>
                            <p class="lorem_text text-center">Gestion des richesses humaines des entités</p>
                            <div class="moremore_bt_1 text-center pt-3"><a type="button" class="btn btn-outline-success mb-2" href="https://cinef-bj.com/recrutement" target="_blank">En savoir +</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main active">
                            <div class="icon_1 text-center">
                                <h5><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="m13 21l2-1l2 1v-7h-4m4-5V7l-2 1l-2-1v2l-2 1l2 1v2l2-1l2 1v-2l2-1m1-7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7v-2H4V5h16v10h-1v2h1a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-9 5H5V6h6m-2 5H5V9h4m2 5H5v-2h6Z"></path>
                                    </svg></h5>
                            </div>
                            <h3 class="accounting_text text-center">Pôle Formation+ </h3>
                            <p class="lorem_text text-center">Présentiel - Blended learning - E-learning</p>
                            <div class="moremore_bt_1 text-center pt-3"><a type="button" class="btn btn-outline-success mb-2" href="https://www.cinef-bj.com/formations" target="_blank">En savoir +</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main">
                            <div class="icon_1 text-center">
                                <h5><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                        <path fill="currentColor" fill-rule="evenodd" d="M48 0H0v48h48V0ZM8 7v33h3V25a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v15h2V21a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v19h2V13a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v27h2v2H7a1 1 0 0 1-1-1V7h2Z" clip-rule="evenodd"></path>
                                    </svg></h5>
                            </div>
                            <h3 class="accounting_text text-center">Pôle Conseil +</h3>
                            <p class="lorem_text text-center">Etude - Assistance - Accompagnement des entités</p>
                            <div class="moremore_bt_1 text-center pt-3"><a type="button" class="btn btn-outline-success" href="https://cinef-bj.com/conseil">En savoir + </a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box_main">
                            <div class="icon_1 text-center">
                                <h5><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                        <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                            <path d="M21 6H9C7.34315 6 6 7.34315 6 9V31C6 32.6569 7.34315 34 9 34H39C40.6569 34 42 32.6569 42 31V21"></path>
                                            <path d="M24 34V42"></path>
                                            <path d="M32 6L28 10L32 14"></path>
                                            <path d="M38 6L42 10L38 14"></path>
                                            <path d="M14 42L34 42"></path>
                                        </g>
                                    </svg></h5>
                            </div>
                            <h3 class="accounting_text text-center">Pôle IT +</h3>
                            <p class="lorem_text text-center">Transformation digitale, solutions et intégration web</p>
                            <div class="moremore_bt_1 text-center pt-3"><a type="button" class="btn btn-outline-success" href="https://cinef-bj.com/it">En savoir + </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--services section end -->
    <!-- Newsletter Start -->

    <div class="container-xxl bg-success my-6 wow fadeInUp mb-0 py-5"  data-wow-delay="0.1s" style="padding-bottom: 4rem !important; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp; max-width: 100% !important">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 id="newsletter" class="text-white">S'abonnez à notre newsletter ?</h3>
                    <small class="text-white">Restez connecté à nos actualités et programmes de formation</small>
                    <div class="position-relative w-100 mt-3">
                        <form action="" class="pb-4" id="form-newsletter" method="post">
                            <div class="d-flex py-3">
                                <input name="nom" id="nom" class="form-control border-0 rounded w-100 ps-4 pe-5 me-2" type="text" placeholder="Entrez votre nom" style="height: 35px;" required wfd-id="id0">
                                <input name="prenom" id="prenom" class="form-control border-0 rounded w-100 ps-4 pe-5" type="text" placeholder="Entrez votre prenom" style="height: 35px;" required="" wfd-id="id0">
                            </div>
                            <div class="d-flex py-3">
                                <input name="user_email" id="user_email" class="form-control border-0 rounded w-100 ps-4 pe-5 me-2" type="email" placeholder="Entrez votre Email" style="height: 35px;" required="" wfd-id="id0">
                                <input name="phone" id="phone" class="form-control border-0 rounded w-100 ps-4 pe-5" type="phone" placeholder="Entrez votre Whatsapp" style="height: 35px;" required="" wfd-id="id0">
                            </div>
                            <div id="result"></div>
                            <center> <button type="button" id="btn" name="submit" class="btn rounded" style=" background: #92e3a9; color: #0e2e50;font-weight: bold;text-transform: uppercase;">Enregistrer</button></center>
                        </form>

                
                        <p class="text-center text-red mt-2"> </p>

                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="max-height: 250px;" src="assets/img/newsletter.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Features Start -->
    <div class="container-xxl py-5 mb-0 mt-0" id='plgnc'>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="d-inline-block border rounded-3 text-success px-4 mb-3 ">Nos atouts !</div>
                    <h2 class="mb-4">Pourquoi les gens nous choisissent-ils ?</h2>
                    <p class="mb-2 bee-block bee-block-3 bee-paragraph" text-align:="" justify="">Le cabinet CINEF a été fondé en 2013 afin d'offrir une alternative supérieure à ce qui se trouve sur le marché en termes de développement des talents et des compétences en entreprise ; conseil, assistance et accompagnement des entreprises ; détection et recrutement et gestion des talents.</p>
                    <p>Notre particularité se situe dans la structure de nos offres en général et en particulier de nos offres de formation qui intègrent toute l'ingénerie de la formation et l'andragogie.</p>


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success rounded-4 py-3 px-5 mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Mot du Président de CINEF SAS
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">MOT DU PRESIDENT DE CINEF SAS</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">





                                    <title>
                                    </title>
                                    <meta content="summary_large_image" name="twitter:card">
                                    <meta content="website" property="og:type">
                                    <meta content="" property="og:description">
                                    <meta content="https://dvlnxvr4gl.preview-postedstuff.com/V2-0VKQ-UHfH-zb0Q-911C/" property="og:url">
                                    <meta content="https://pro-bee-beepro-thumbnails.s3.amazonaws.com/messages/826062/810032/1708921/7792337_large.jpg" property="og:image">
                                    <meta content="" property="og:title">
                                    <meta content="" name="description">

                                    <meta content="width=device-width" name="viewport">
                                    <link href="./assets/css/style_css.css" rel="stylesheet" type="text/css">
                                    <style>
                                        .bee-row,
                                        .bee-row-content {
                                            position: relative
                                        }

                                        .bee-row-1,
                                        .bee-row-1 .bee-row-content,
                                        .bee-row-2,
                                        .bee-row-3 {
                                            background-repeat: no-repeat
                                        }

                                        body {
                                            background-color: #fff;
                                            color: #000;
                                            font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif
                                        }



                                        p {
                                            text-align: justify;
                                        }

                                        a {
                                            color: #fff
                                        }

                                        * {
                                            box-sizing: border-box
                                        }

                                        body,
                                        h1,
                                        p {
                                            margin: 0
                                        }

                                        .bee-row-content {
                                            max-width: 1200px;
                                            margin: 0 auto;
                                            display: flex
                                        }

                                        .bee-row-content .bee-col-w5 {
                                            flex-basis: 42%
                                        }

                                        .bee-row-content .bee-col-w7 {
                                            flex-basis: 58%
                                        }

                                        .bee-row-content .bee-col-w12 {
                                            flex-basis: 100%
                                        }

                                        .bee-icon .bee-icon-label-right a {
                                            text-decoration: none
                                        }

                                        .bee-divider,
                                        .bee-image {
                                            overflow: auto
                                        }

                                        .bee-image .bee-center {
                                            margin: 0 auto
                                        }

                                        .bee-divider .right {
                                            float: right
                                        }

                                        .bee-row-1 .bee-col-2 .bee-block-1 {
                                            width: 100%
                                        }

                                        .bee-icon,
                                        .bee-icon .bee-icon-image,
                                        .bee-icon .bee-icon-label-right {
                                            display: inline-block
                                        }

                                        .bee-icon {
                                            vertical-align: middle
                                        }

                                        .bee-icon .bee-icon-image {
                                            vertical-align: middle;
                                            margin-right: -4px
                                        }

                                        .bee-image img {
                                            display: block;
                                            width: 100%
                                        }

                                        .bee-social .icon img {
                                            max-height: 32px
                                        }

                                        .bee-paragraph {
                                            overflow-wrap: anywhere
                                        }

                                        @media (max-width:768px) {
                                            .bee-row-content:not(.no_stack) {
                                                display: block
                                            }
                                        }

                                        .bee-row-1 {
                                            background-image: url('https://d1oco4z2z1fhwp.cloudfront.net/templates/default/6871/bg-garden2__1_.png');
                                            background-size: cover
                                        }

                                        .bee-row-1 .bee-row-content {
                                            background-size: auto;
                                            color: #000
                                        }

                                        .bee-row-1 .bee-col-1 {
                                            padding: 60px 30px 30px
                                        }

                                        .bee-row-1 .bee-col-1 .bee-block-1 {
                                            padding-top: 30px;
                                            width: 100%;
                                            text-align: center
                                        }

                                        .bee-row-1 .bee-col-1 .bee-block-2,
                                        .bee-row-1 .bee-col-1 .bee-block-5 {
                                            padding: 10px
                                        }

                                        .bee-row-1 .bee-col-1 .bee-block-3 {
                                            padding-top: 30px
                                        }

                                        .bee-row-1 .bee-col-1 .bee-block-4 {
                                            width: 100%;
                                            text-align: center
                                        }

                                        .bee-row-1 .bee-col-1 .bee-block-6 {
                                            text-align: right
                                        }

                                        .bee-row-1 .bee-col-2 {
                                            padding: 60px 30px
                                        }

                                        .bee-row-3 .bee-col-1,
                                        .bee-row-3 .bee-col-1 .bee-block-1 {
                                            padding-bottom: 5px;
                                            padding-top: 5px
                                        }

                                        .bee-row-2 .bee-row-content,
                                        .bee-row-3 .bee-row-content {
                                            background-repeat: no-repeat;
                                            color: #000
                                        }

                                        .bee-row-3 .bee-col-1 .bee-block-1 {
                                            color: #9d9d9d;
                                            font-family: inherit;
                                            font-size: 15px;
                                            text-align: center
                                        }

                                        .bee-row-3 .bee-col-1 .bee-block-1 .bee-icon-image {
                                            padding: 5px 6px 5px 5px
                                        }

                                        .bee-row-3 .bee-col-1 .bee-block-1 .bee-icon {
                                            margin-left: 0;
                                            margin-right: 0
                                        }

                                        .bee-row-1 .bee-col-1 .bee-block-3 {
                                            color: #fff;
                                            direction: ltr;
                                            font-size: 18px;
                                            font-weight: 400;
                                            letter-spacing: 0;
                                            line-height: 150%;
                                            text-align: justify
                                        }

                                        .bee-row-1 .bee-col-1 .bee-block-3 a {
                                            color: #1a5c40
                                        }

                                        .bee-row-1 .bee-col-1 .bee-block-3 p:not(:last-child) {
                                            margin-bottom: 16px
                                        }
                                    </style>
                                    <script async="" defer="" src="./assets/js/api.js">
                                    </script>
                                    <script>
                                        function onSubmit(token) {
                                            for (const form of document.getElementsByClassName("recaptcha-form")) {
                                                if (form.checkValidity()) {
                                                    form.submit();
                                                } else {
                                                    grecaptcha.reset();
                                                    form.reportValidity();
                                                }
                                            }
                                        }
                                    </script>



                                    <div class="bee-page-container">
                                        <div class="bee-row bee-row-1">
                                            <div class="bee-row-content">
                                                <div class="bee-col bee-col-1 bee-col-w7">
                                                    <div class="bee-block bee-block-1 bee-heading">
                                                        <h1 style="color:#ffffff;direction:ltr;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;font-size:60px;font-weight:700;letter-spacing:normal;line-height:120%;text-align:left;margin-top:0;margin-bottom:0;">
                                                            <strong>
                                                                Mot du Président de&nbsp; CINEF SAS
                                                            </strong>
                                                        </h1>
                                                    </div>
                                                    <div class="bee-block bee-block-2 bee-divider">
                                                        <div class="left" style="border-top:2px solid #FFFFFF;width:100%;">
                                                        </div>
                                                    </div>
                                                    <div class="bee-block bee-block-3 bee-paragraph">
                                                        <p>
                                                            Notre mission est, compte tenu du rythme soutenu et de l’ampleur des changements qui touchent vos entreprises et organisations, de continuellement maintenir, mettre à jour,
                                                            <br>
                                                            améliorer et approfondir vos connaissances et celles de vos collaborateurs afin d’être au fait des dernières tendances et évolutions dans votre secteur d’activité.
                                                            <br>
                                                            Notre rôle est de vous soutenir en vous offrant une variété d’activités de formation, d’outils qui vous aideront à rester un leader dans votre domaine. Notre programme vous donne accès à des activités de formation variées et de grande qualité qui sont dispensées par des formateurs inspirants, qualifiés et chevronnés.
                                                            <br>
                                                            Cette année, nous avons travaillé à enrichir notre offre de façonsignificative et pertinente dans la quasi-totalité de vos domaines d'exercice.
                                                            <br>
                                                            Pour cette nouvelle année, nous avons le plaisir de vousannoncer que notre solution de formation à distance est opérationnelle à travers notre plateforme E-Learning. A cet
                                                            <br>
                                                            effet, nous offrirons à la suite de chaque session de formation, un suivi accompagnement à travers ladite plateforme afin de vous accompagner dans la mise en œuvre des acquis des formations. Inscrivez-vous dès à présent et bénéficiez de la panoplie d’outils que nous proposons afin de maximiser votre influence,et accroître la performance de votre organisation. Merci de votre confiance renouvelée qui nous conforte dans notre détermination à élaborer des formations sur mesure et répondre ainsi à vos besoins particuliers.
                                                        </p>
                                                        <p>
                                                            <br>
                                                            Bonne et heureuse <span id="currentYear"> </span>
                                                            <br>
                                                            Bien cordialement,
                                                        </p>
                                                    </div>
                                                    <div class="bee-block bee-block-4 bee-heading">
                                                        <h1 style="color:#ffffff;font-size:38px;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:120%;text-align:right;direction:ltr;font-weight:700;letter-spacing:normal;margin-top:0;margin-bottom:0;">
                                                            <span class="tinyMce-placeholder">
                                                                Wilfrid DEDJI​
                                                            </span>
                                                        </h1>
                                                    </div>
                                                    <div class="bee-block bee-block-5 bee-divider">
                                                        <div class="right" style="border-top:2px solid #FFFFFF;width:50%;">
                                                        </div>
                                                    </div>
                                                    <div class="bee-block bee-block-6 bee-social">
                                                        <div class="content">
                                                            <span class="icon" style="padding:0 2.5px 0 2.5px;">
                                                                <a href="https://www.linkedin.com/today/author/wilfrid-dedji-11459029" target="_blank">
                                                                    <img alt="Linkedin" src="./assets/img/linkedin.png" title="linkedin" tar=""></a>
                                                            </span>
                                                            <span class="icon" style="padding:0 2.5px 0 2.5px;">
                                                                <a href="https://fr-fr.facebook.com/public/Wilfrid-Dedji" target="_blank">
                                                                    <img alt="Facebook" src="./assets/img/facebook.png" title="Facebook"></a>
                                                            </span>
                                                            <span class="icon" style="padding:0 2.5px 0 2.5px;">
                                                                <a href="https://le-fondement-juridique-49.webself.net/blog/2019/02/09/seminaire-de-formation--cartographie-des-risques-juridiques-et-financiers-des-entreprises-regies-par-le-droit-ohada--a-lome-togo-du-25-fevrier-au-1-er-mars-2019" target="_blank">
                                                                    <img alt="Twitter" src="./assets/img/twitter.png" title="Twitter"></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bee-col bee-col-2 bee-col-w5">
                                                    <div class="bee-block bee-block-1 bee-image">
                                                        <img alt="gardening" class="bee-center bee-fixedwidth bee-fullwidthOnMobile" src="./assets/img/president.jpg" style="max-width:440px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bee-row bee-row-2">
                                            <div class="bee-row-content">
                                                <div class="bee-col bee-col-1 bee-col-w12">
                                                    <div class="bee-block bee-block-1 bee-spacer">
                                                        <div class="spacer" style="height:80px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bee-row bee-row-3">
                                            <div class="bee-row-content">
                                                <div class="bee-col bee-col-1 bee-col-w12">
                                                    <div class="bee-block bee-block-1 bee-icons" id="beepro-locked-footer">
                                                        <div class="bee-icon">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 p-2 py-1 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-cubes text-white"></i>
                                </div>
                                <h6 class="mb-0">SOUPLESSE ET AGILITÉ</h6>
                            </div>
                            <span>Nous prenons en compte vos besoins et restons à l'écoute de vos préocupations</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 p-2 py-1 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-percent text-white"></i>
                                </div>
                                <h6 class="mb-0">PERFOMANCE</h6>
                            </div>
                            <span>Selon vos objectifs professionnels, nous proposons l'expertise et le programme adapté </span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 p-2 py-1 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <h6 class="mb-0">NOTRE REGISTRE</h6>
                            </div>
                            <span>CINEF ne cesse de croitre l'effectif des stagiaires estimé à plus de 200 par an</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 p-2 py-1 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-smile-beam text-white"></i>
                                </div>
                                <h6 class="mb-0">UNE LARGE AUDIENCE</h6>
                            </div>
                            <span>
                                <p>CINEF,le meilleur moyen de découvrir des acteurs du même domaine d'activités</p>
                            </span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 p-2 py-1 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-user-tie text-white"></i>
                                </div>
                                <h6 class="mb-0">QUALITÉ DE LA PRESTATION</h6>
                            </div>
                            <span>Une évaluation de la formation en cours et a posteriori pour mesurer votre retour sur investissement. </span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 p-2 py-1 btn-square bg-success rounded-circle me-3">
                                    <i class="fa fa-headset text-white"></i>
                                </div>
                                <h6 class="mb-0">24/7 SUPPORT CLIENT</h6>
                            </div>
                            <span>
                                <p class="text-justify">Le client est au coeur de notre politique qualité. Nous lui accordons toute notre attention avant, pendant et après la formation</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!-- Features End -->

    <!-- CLIENT  Start RATTING -->

    <div class="mx-auto mb-2 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
        </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
        </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
        </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
        </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
            <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
        </svg>
    </div>

    <h4 class="text-center mb-4 "> Ils nous font confiance... </h4>
    <!-- Client start -->

    
    <div class="container-xxl bg-white border boder-1 border-white my-2 py-2 mt-0 mb-0 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container">
            <div class="row">
                    <marquee behavior="scroll" direction="left" scrollamount="5">
                        <div class="d-flex">
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image30.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image31.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image48.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image33.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image34.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image35.jpg" alt="" width="100px" height="100px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image36.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image39.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image41.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image44.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image46.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image49.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image50.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image51.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image55.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image56.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image58.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image59.png" alt="" width="150px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image60.png" alt="" width="100px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image61.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image63.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image65.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image66.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image68.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image69.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image70.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image71.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image2.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image3.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image4.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image5.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image6.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image7.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image8.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image9.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image10.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image11.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image12.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image13.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image14.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image15.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image16.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image17.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image18.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image19.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image20.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image21.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image22.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image23.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image25.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image27.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image28.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image29.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image30.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image31.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image48.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image33.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image34.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image35.jpg" alt="" width="100px" height="100px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image36.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image39.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image41.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image44.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image46.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image49.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image50.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image51.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image55.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image56.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image58.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image59.png" alt="" width="150px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image60.png" alt="" width="100px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image61.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image63.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image65.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image66.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image68.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image69.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image70.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image71.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image2.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image3.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image4.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image5.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image6.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image7.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image8.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image9.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image10.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image11.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image12.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image13.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image14.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image15.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image16.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image17.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image18.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image19.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image20.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image21.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image22.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image23.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image25.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image27.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image28.jpg" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image29.png" alt="" width="80px" height="80px"></a></div>
                            <div class="px-3" ><a href="#"><img class="" src="./assets/img/partenaire/Image30.png" alt="" width="80px" height="80px"></a></div> 
                        </div>
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <!-- Close client -->


    <!-- Testimonial start -->



    <div class="container-xxl py-4 mt-0">
        <div class="container">

            <!-- Rating bar for completion -->
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="d-inline-block border rounded-pill text-success px-4 mb-3"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                        <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                        <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                        <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                        <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                        <path fill="#ffce31" d="M62 25.2H39.1L32 3l-7.1 22.2H2l18.5 13.7l-7 22.1L32 47.3L50.5 61l-7.1-22.2L62 25.2z"></path>
                    </svg></div>
                <h4 class="mb-5">Ce que disent nos clients !</h4>
            </div>

            <!-- Carousel wrapper -->
            <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
                <!-- Controls -->
                <div class="d-flex justify-content-center mb-4">
                    <button class="carousel-control-prev position-relative" type="button"
                    data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next position-relative" type="button"
                    data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="carousel-inner py-2">

                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div style="max-width:fit-content;" class="col " style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>CINEF, l'assistance des participants est formidable.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mr MUTOLO </h6>
                                                <small>Resp des opérations, GIZ-RDC</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col " style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>Une méthodologie qui prend en compte le niveau du participant et un suivi après formation enrichissant.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mme KAGNI Doris</h6>
                                                <small>Assistante de Direction, ARMP-NIGER</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col " style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>CINEF m'a fait découvrir d'autres contrées superbes</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mlle MORISSON</h6>
                                                <small>Assistante de Direction, NCARE-Abidjan</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div style="max-width:fit-content;" class="col cloned" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>CINEF, l'assistance des participants est formidable.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mr MUTOLO </h6>
                                                <small>Resp des opérations, GIZ-RDC</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col cloned" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>Une méthodologie qui prend en compte le niveau du participant et un suivi après formation enrichissant.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mme KAGNI Doris</h6>
                                                <small>Assistante de Direction, ARMP-NIGER</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col cloned active" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>CINEF m'a fait découvrir d'autres contrées superbes</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mlle MORISSON</h6>
                                                <small>Assistante de Direction, NCARE-Abidjan</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- <marquee scrolldelay="10" behavior="scroll" direction="left" scrollamount="5"> -->
                            <!-- <div class="row d-flex justify-content-center" style="transition: all 1s ease 0s; width: 3720px; transform: translate3d(-744px, 0px, 0px);">
                            
                                <div style="max-width:fit-content;" class="col cloned" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>CINEF, l'assistance des participants est formidable.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mr MUTOLO </h6>
                                                <small>Resp des opérations, GIZ-RDC</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col cloned" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>Une méthodologie qui prend en compte le niveau du participant et un suivi après formation enrichissant.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mme KAGNI Doris</h6>
                                                <small>Assistante de Direction, ARMP-NIGER</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col cloned active" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>CINEF m'a fait découvrir d'autres contrées superbes</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mlle MORISSON</h6>
                                                <small>Assistante de Direction, NCARE-Abidjan</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col active center" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>Ce fut un plaisir de vivre ce programme de formation avec CINEF</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mme AKPOVO</h6>
                                                <small>DAF, PROJET II-BENIN</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col active" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>CINEF, l'assistance des participants est formidable.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mr MUTOLO </h6>
                                                <small>Resp des opérations, GIZ-RDC</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>Une méthodologie qui prend en compte le niveau du participant et un suivi après formation enrichissant.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mme KAGNI Doris</h6>
                                                <small>Assistante de Direction, ARMP-NIGER</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>CINEF m'a fait découvrir d'autres contrées superbes</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mlle MORISSON</h6>
                                                <small>Assistante de Direction, NCARE-Abidjan</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col cloned" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>Ce fut un plaisir de vivre ce programme de formation avec CINEF</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mme AKPOVO</h6>
                                                <small>DAF, PROJET II-BENIN</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col cloned" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>CINEF, l'assistance des participants est formidable.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mr MUTOLO </h6>
                                                <small>Resp des opérations, GIZ-RDC</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="max-width:fit-content;" class="col cloned" style="width: 372px;">
                                    <div class=" rounded p-4">
                                        <i class="fa fa-quote-left text-success mb-3"></i>
                                        <p>Une méthodologie qui prend en compte le niveau du participant et un suivi après formation enrichissant.</p>
                                        <div class="d-flex align-items-center">
                                            <img style="width: 35px;" class="img-fluid flex-shrink-0 rounded-circle" src="./assets/img/user_circle.png">
                                            <div class="ps-3">
                                                <h6 class="mb-1">Mme KAGNI Doris</h6>
                                                <small>Assistante de Direction, ARMP-NIGER</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        <!-- </marquee> -->
                </div>
            </div>

        </div>
    </div>
    <!-- Testimonial End -->




    <!--  <main id="main"> -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact background-color: #cbe4d1 !important;" ;>
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Contact</h2>
                <p>Contactez nous si vous avez des suggestions</p>
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4 class="text-white">Siège</h4>
                                <p class="text-white"> <?php echo $GLOBALS['siege_societe'] ?> </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4 class="text-white">Email:</h4>
                                <p class="text-white"> <?php echo $GLOBALS['email_send'] ?> </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4 class="text-white">Téléphone:</h4>
                                <p class="text-white"> <?php echo $GLOBALS['numero_tel'] ?> </p>
                            </div>
                        </div><!-- End Info Item -->


                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="./config/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="message" name="message" rows="7" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Votre message est envoyé avec succès! Merci</div>
                        </div>
                        <div class="text-center"><button class="rounded-3" id="button_send" type="submit">Envoyer</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <footer class="footer">


        <div>
            <center>Designed by CINEF SAS Copyright © 2023. All rights reserved.<center>
        </div>

    </footer>

    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <?php include('layout_js.php') ?>
    <script>
        (function ($) {
            $("button#btn").on({
                "click": function () {
                    if (!$("input#nom").val().trim() || !$("input#prenom").val().trim() || !$("input#user_mail").val().trim() || !$("input#phone").val().trim()) {
                    }
                    $("div#result").html("<marquee class='text-white fw-bolder'> En cours de traitement </marquee>");

                    $.ajax({
                        url: "./config/newletter.php",
                        type: "POST",
                        data: "nom=" + $("input#nom").val() + "&prenom=" + $("input#prenom").val() + "&email=" + $("input#user_email").val() + "&phone=" + $("input#phone").val(),
                        success: function (data) {
                            $("div#result").html("<marquee class='text-white fw-bolder'>" + data + "</marquee>")
                            return false;
                        },
                    })
                }
            })
        }) (jQuery) 
        
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script>  
    
        // var myCarousel = document.querySelector('#carouselMultiItemExample')
        // var carousel = new Carousel(myCarousel, {
        //     interval: 2000,
        //     wrap: false
        // })
        // Récupérer la date actuelle du système
        var currentDate = new Date();
        var currentYear = currentDate.getFullYear();

        // Mettre à jour l'élément HTML avec la plage d'années dynamique
        var yearSpan = document.getElementById('currentYear');
        yearSpan.textContent = currentYear;

    </script>

</body>

</html>
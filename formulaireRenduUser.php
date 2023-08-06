<!DOCTYPE html>
                <html lang="en">

                <head>
                <meta charset="utf-8">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">

                <title> CINEF | FORMATION PRO ET CONTINUE </title>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
                <meta content="" name="description">
                <meta content="" name="keywords">

                    <style>

                        main {
                            padding-right: 80px;
                        }
                        body{
                            background-color: #ede7f6;
                            font-family: \'Poppins\', sans-serif;
                        }

                        .form{
                            height: 1100px;
                            width: 600px;
                            margin: auto;
                        }

                        .required{
                            font-size: 13px;
                            color: red;
                        }

                        .title-div{
                            /* height: 150px; */
                            width: 600px;
                            background-color: #FDFEFE;
                            margin: 15px;
                            border-radius: 8px;
                            border-top: 8px solid #92c0a1;
                            padding: 25px;
                        }

                        .title-div strong {
                            color: green;
                        }

                        .button {
                            display: none;
                        }

                        .name-div, .college-div, .gmail-div, .mobile-div{
                            height: 150px;
                            width: 650px;
                            background-color: #FDFEFE;
                            margin: 15px;
                            border-radius: 8px;
                        }

                        .gmail-div-option{
                            width: 650px;
                            background-color: #FDFEFE;
                            margin: 15px;
                            border-radius: 8px;
                        }

                        .name {
                            padding: 20px 0 25px 25px;
                            font-size: 15px;
                        }

                        .input-div {
                        
                            padding-left: 25px;
                        }

                        .input-div{
                            /* width: 300px;
                            border: 0;
                            border-left: 2px solid rgba(234,120,22,0.7) ;
                            outline: 0;
                            border-bottom: 1.5px solid #DCD7D7; */

                            width: 300px;
                            border: 0;
                            border-left: 2px solid rgba(234,120,22,0.7);
                            padding-left: 19px;
                            margin-left: 27px;
                            outline: none;
                            /* border-bottom: 1.5px solid #DCD7D7; */
                            /* border-style: none;
                        } 

                        #attentes_wait{
                            /* // margin: 0 16px 186px; */
                            padding-top: 0px;
                        }

                        #priority_others{
                            padding-top : 0px ;
                            margin-top : 99px;
                        }

                        #list_objectif {
                            height: 230px ;
                        }

                          .list_obj{
                            /* border-left: 2px solid rgba(234,120,22,0.7) ; */
                            /* box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); */
                            /* backdrop-filter: blur(42px); */
                            /* -webkit-backdrop-filter: blur(42px); */
                            list-style-type:none;
                            text-decoration: none;
                            margin-bottom: 10px;
                            accent-color: rgba(234,120,22,0.7);
                            padding-left: 0;
                          }
  
                          .list_obj li {
                            margin-bottom: 30px;
                          }

                        .last-div h2{
                            text-align: center;
                            padding-top: 30px;
                            color: #a2a4a6 ;
                            font-weight: 600 ; 
                        }

                        .term{
                            font-size: 12px;
                            padding-left: 65px;
                            padding-top: 5px;
                            position: absolute;
                        }

                        .never {
                            padding-left: 15px;
                            font-size: 12px;
                            padding-top: 10px;
                            font-weight: 400;
                        }

                        .title-form{
                            font-size: 3px;
                            text-align: center;
                            font-weight : 500;
                            color:green;
                        }

                        .address{
                            display:flex;
                            flex-direction : row;
                            justify-content: space-between;
                            align-items: center;
                            flex-wrap : wrap;
                            margin: 0px 27px ;
                            padding-bottom: 20px;
                        }

                    </style>

                </head>

                <body>


                <main id="main">

                    <div class="form">

                    <div class="title-div">
             

                        <div style="text-align:center;">
                            <div style="text-align:center;">
                                <img src="data:image/png;base64,'. $image .'" alt="Mon image">
                            </div>
                            <h1 class="title-form">
                                <p>
                                    <span>
                                        RECUEIL DES ATTENTES DES APPRENANTS | EVALUATION DE PRE-FORMATION 
                                    </span>
                                </p> 
                            </h1>
                        </div>

                        <h3 class="title"> Attentes du participant <strong> ' . $nom . '</strong> </h3>
                        <p>Intitule de la formation : <strong> NameFormation | EntiteService : '. $entite .' " | "'. $formation .'  </strong> </p>
                    
                    </div>

                    <div class="name-div">
                        <div class="name">Principales missions et activités dans l’entreprise <span class="required">*</span> </div>
                        <div class="input-div">
                            <p> '. $missions .'</p>
                        </div>
                    </div>
                    
                    <div class="college-div">
                        <div class="name">Avez-vous déjà suivi une formation sur ce thème ou un thème similaire ? <span class="required">*</span> <strong> [ '. $formation_prece .' ]</strong> </div>
                        <div class="input-div">        
                        <p> '. $formation_detail .' </p>
                        </div>
                    </div>
                    
                    <div class="gmail-div">
                        <div class="name"> Avez-vous demandé personnellement à suivre cette formation <span class="required">*</span> <strong> [ '. $demande_perso .' ]</strong> </div>
                        <div class="input-div">
                            <p> '. $difficultes .' </p>
                        </div>
                    </div>
                    

                    <div class="gmail-div-option">
                        <div class="name"> Suivez-vous cette formation dans l\'objectif de prise de poste ou sensibilisation ? <strong> [ '. $objectif .' ] </strong> </div>
                    </div>

                    <div class="mobile-div" id="attentes_wait">
                        <div class="name">Qu\'attendez-vous en priorité de cette formation ? <span class="required">*</span> </div>
                        <div class="input-div">
                            <p> '. $attentes .' </p>
                        </div>
                    </div>

                    <div class="mobile-div" id="priority_others">
                        <div class="name"> Vos autres priorites <span class="required">*</span>  </div>
                        <div class="input-div">
                            <p> '. $autres_priorites .' </p>
                        </div>
                    </div>

                    

                    <div class="mobile-div" id="list_objectif">
                        <div class="name"> Vos trois objectifs opérationnels à atteindre à l\'issue de cette formation <span class="required">*</span>  </div>
                        <div class="input-div">
                            <p>
                            <ul class="list_obj">
                              <li>'. $objectif1 .'</li>
                              <li>'. $objectif2 .'</li>
                              <li>'. $objectif3 .' </li>
                            </ul>
                          </p>
                        </div>
                    </div>

                
                    <div class="last-div">
                        <h2 style="color:green" >CINEF - SAS</h2>
                    </div>

                    <div class="address">
                        <div>
                            <span> St Rita, Cotonou, BENIN </span>
                        </div>
                        <div>
                            <span> +229 63 18 60 60 </span>
                        </div>
                        <div>
                            <span> info@cinef-bj.com </span>
                        </div>
                    </div>
                            


                    </div>
                
                </main><!-- End #main -->


                <script>
                    
                </script>


                </body>

                </html>
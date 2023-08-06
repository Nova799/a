<?php 
  require (realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/config/conn.php');
  // require ('./config/conn.php') ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> CINEF | FORMATION PRO ET CONTINUE </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php 
    include 'layout_css.php';
  ?>
  

  <style>
   
    .optionDelete {
      display: none;
      transition: all .4s;
    }

  </style>

</head>

<body>

  <?php include 'header.php' ?>

  <main id="main">

    <!-- ======= About Us Section ======= -->

    <div class="container-fluid ">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-8 col-xl-11 text-center p-5 mt-3 mb-2 " style="border:#009933 30px outset !important;">
          <div class="bg-light px-0 pt-4 pb-0 mt-3 mb-3 p-3 ">
            <h2 id="heading">RECUEIL DES ATTENTES DES PARTICIPANTS</h2>
            <p>
              Ce questionnaire est adressé aux personnes qui vont bientôt suivre une formation avec le cabinet CINEF.
              Il est important : il sera transmis aux formateurs pour que ceux-ci organisent les formations au mieux
              afin de répondre à vos attentes.
            </p>
            <form id="msform" action="./traitement.php" novalidate method="post" style="background-color:#f5f8f7 !important ;">
              <!-- progressbar -->
              <ul id="progressbar" style="background-color:#009933 !important; padding-top:10px">
                <li class="active text-white" id="account"><strong>Personnelles</strong></li>
                <li id="personal" class="text-white"><strong>Professionnelles</strong></li>
                <li id="payment" class="text-white"><strong>Complémentaires</strong></li>
                <!-- <li id="confirm" class="text-white"><strong>Finish</strong></li> -->
              </ul>

              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
              </div> <br> <!-- fieldsets -->

              <!-- First section -->

              <fieldset id="form_1">
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Informations Personnelles:</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Etape 1 - 4</h2>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="formation">Intitulé de la formation :</label>
                    <select class="form-control" name="formation" autocomplete="on" required="required">
                      <optgroup>
                        <?php
                        // Établir une connexion à la base de données
                       
                        // Récupérer les informations de base de données
                        $query = "SELECT * FROM formation";
                        $result = mysqli_query($conn, $query);

                        // Vérifier si des résultats ont été trouvés
                        if (mysqli_num_rows($result) > 0) {

                          // Afficher les données dans le tableau de bord
                          while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <option value="<?= $row['libelle'] ?>"><?= $row['libelle'] ?> </option>

                        <?php
                          }
                        }
                        // Fermer la connexion à la base de données
                        mysqli_close($conn);
                        ?>
                      </optgroup>

                    </select>
                  </div>

                 

                  <div class="form-group">
                    <label for="nom">Nom et Prénoms :</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                  </div>

                  <div class="form-group">
                    <label for="entite">Entité/Direction/Service :</label>
                    <input type="text" class="form-control" id="entite" name="entite" required>
                  </div>

                </div>
                
                <input type="button" id="suivant1" name="next" class="next action-button" value="Suivant" />
               
              </fieldset>

              <!-- Secund section -->

              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Informations Professionnelles:</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Etape 2 - 4</h2>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="missions">Quelles sont aujourd'hui vos principales missions et activités dans l’entreprise ?</label>
                    <textarea class="form-control" id="missions" name="missions" rows="4" required></textarea>
                  </div>

                  <div class="form-group">
                    <label for="formation-precedente">Avez-vous déjà suivi une formation sur ce thème ou un thème similaire ?</label>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="oui-formation" name="formation-precedente" value="oui" required>
                      <label class="form-check-label" for="oui-formation">Oui</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="non-formation" name="formation-precedente" value="non" required>
                      <label class="form-check-label" for="non-formation">Non</label>
                    </div>
                  </div>

                  <div class="form-group" id="formationOption">
                    <label for="formation-details">Si oui, laquelle et à quelle date ?</label>
                    <input type="text" class="form-control" id="formation-details" name="formation-details">
                  </div>

                  <div class="form-group">
                    <label for="demande-personnelle">Avez-vous demandé personnellement à suivre cette formation ?</label>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="oui-demande" name="demande-personnelle" value="oui" required>
                      <label class="form-check-label" for="oui-demande">Oui</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="non-demande" name="demande-personnelle" value="non" required>
                      <label class="form-check-label" for="non-demande">Non</label>
                    </div>
                  </div>

                  <div class="form-group" id="demandePersonnelleOui">
                    <label for="difficultes">Si oui, quelles difficultés rencontrez-vous pour lesquelles vous souhaitez suivre cette formation ?</label>
                    <textarea class="form-control" id="difficultes" name="difficultes" rows="4"></textarea>
                  </div>

                  <div class="form-group" id="demandePersonnelleNon">
                    <label for="conseil">Si non, qui vous a conseillé cette formation ?</label>
                    <input type="text" class="form-control" id="conseil" name="conseil">
                  </div>


                </div>
                <input type="button" id="suivant2" name="next" class="next action-button" value="Suivant" /> <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
              </fieldset>

              <!-- Third section -->

              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="fs-title">Informations Complémentaires:</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Etape 3 - 4</h2>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="objectifs">Suivez-vous cette formation dans l'objectif de prise de poste ou sensibilisation ?</label>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="oui-objectifs" name="objectifs" value="oui" required>
                      <label class="form-check-label" for="oui-objectifs">Oui</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="non-objectifs" name="objectifs" value="non" required>
                      <label class="form-check-label" for="non-objectifs">Non</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="attentes">Qu'attendez-vous en priorité de cette formation ?</label><br>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" id="echanges" name="attentes[]" value="Des echanges de pratiques">
                      <label class="form-check-label" for="echanges">Des échanges de pratiques</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" id="perfectionnement" name="attentes[]" value="Un perfectionnement">
                      <label class="form-check-label" for="perfectionnement">Un perfectionnement</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" id="nouveautes" name="attentes[]" value="Des nouveautés sur la fonction">
                      <label class="form-check-label" for="nouveautes">Des nouveautés sur la fonction</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" id="conseils" name="attentes[]" value="Des conseils individualisés">
                      <label class="form-check-label" for="conseils">Des conseils individualisés</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" id="rappels" name="attentes[]" value="Des rappels techniques">
                      <label class="form-check-label" for="rappels">Des rappels techniques</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="autres-priorites">Vos Autres priorités:</label>
                    <textarea class="form-control" id="autres-priorites" name="autres-priorites" rows="4"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="objectifs-op">Quels sont vos trois objectifs opérationnels à atteindre à l'issue de cette formation ?</label>
                    <ol>
                      <li>
                        <input type="text" class="form-control" id="objectif1" name="objectif1" required>
                      </li>
                      <li>
                        <input type="text" class="form-control" id="objectif2" name="objectif2" required>
                      </li>
                      <li>
                        <input type="text" class="form-control" id="objectif3" name="objectif3" required>
                      </li>
                    </ol>
                  </div>

                  <div class="form-group">
                    <label for="cas-concrets">Avez-vous des cas concrets (dossiers) pour lesquels vous souhaiteriez des réponses durant la formation ? Merci de nous les envoyer par mail sur <span style="color: blue;"> <?php echo $GLOBALS["email_send"] ?> </span> ou de les amener en formation.</label>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="oui-cas" name="cas-concrets" value="oui" >
                      <label class="form-check-label" for="oui-cas">Oui</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="non-cas" name="cas-concrets" value="non" >
                      <label class="form-check-label" for="non-cas">Non</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="remarques">Autres remarques:</label>
                    <textarea class="form-control" id="remarques" name="remarques" rows="4"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="telephone">Téléphone:</label>
                    <input type="tel" class="form-control" id="telephone" placeholder="+229 66756789" name="telephone" required>
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" data-validate="Valid email is required: ex@abc.xyz" class="form-control" id="email" name="email" required>
                  </div>

                  <div class="form-group">
                    <a href="http://www.cinef-bj.com" target="_blank">www.cinef-bj.com/formations</a>
                  </div>

                  <span id="error"></span>

                </div> <input type="submit" id="suivant3" name="next_finish" class="submit action-button" value="Aperçu" />
                <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
              </fieldset>

              <!-- Foour section -->

              <fieldset>
                <div class="form-card">
                  <div class="row">
                    <div class="col-7">

                      <h2 class="fs-title">Terminé:</h2>
                    </div>
                    <div class="col-5">
                      <h2 class="steps">Etape 4 - 4</h2>
                    </div>
                  </div> <br><br>
                  <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                  <div class="row justify-content-center">
                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                  </div> <br><br>
                  <div class="row justify-content-center">
                    <div class="col-7 text-center">
                      <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                    </div>
                  </div>


                </div>
              </fieldset>

            </form>

          </div>
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

  <?php include('layout_js.php') ?>

  <script src="./assets/js/projet.js"></script>

</body>

</html>



<script>

  // Validation du formulaire
  let myfield1 = document.getElementById('msform') ;
  let myRegex = /^[a-zA-Z-\s]+$/ ;

  let nameInput = document.getElementById('nom');
  let entiteInput = document.getElementById('entite');
  let missionInput = document.getElementById('missions');
  let formationDetailInput = document.getElementById('formation-details');
  let difficultesInput = document.getElementById('difficultes');
  let conseilInput = document.getElementById('conseil');
  let emailInput = document.getElementById('email');


  myfield1.addEventListener('submit', function(e){

    if (nameInput.value.trim() == "") {
      let myError = document.getElementById('error');
      myError.innerHTML = "Le champ nom est requis." ;
      myError.style.color = "red";
      e.preventDefault(); 
    } 
    else if(myRegex.test(myfield1.value) == false ){
      let myError = document.getElementById('error');
      myError.innerHTML = "Le nom comporte uniquement des lettres et des tirets." ;
      myError.style.color = "red";
      e.preventDefault(); 
    }

    else if((!document.getElementById('oui-formation')) && (!document.getElementById('non-formation')) ){
      let myError = document.getElementById('error');
      myError.innerHTML = "Vous devez faire un choix." ;
      myError.style.color = "red";
      e.preventDefault();
    }else if((document.getElementById('oui-formation')) ){
      if (formationDetailInput.value.trim() == "") {
      let myError = document.getElementById('error');
      myError.innerHTML = "Donnez nous un peu plus d'information sur vos formation anterieur" ;
      myError.style.color = "red";
      e.preventDefault(); 
    } 
    }

    else if((!document.getElementById('oui-cas')) && (!document.getElementById('non-cas')) ){
      let myError = document.getElementById('error');
      myError.innerHTML = "Vous devez faire un choix." ;
      myError.style.color = "red";
      e.preventDefault();
    }

    else if (entiteInput.value.trim() == "") {
      let myError = document.getElementById('error');
      myError.innerHTML = "Le champ entite est requis." ;
      myError.style.color = "red";
      e.preventDefault(); 
    } 

    else if (missionInput.value.trim() == "") {
      let myError = document.getElementById('error');
      myError.innerHTML = "Le champ missions est requis." ;
      myError.style.color = "red";
      e.preventDefault(); 
    } 

    else if ( (difficultesInput.value.trim() == "") && (conseilInput.value.trim() == "") ) {
      let myError = document.getElementById('error');
      myError.innerHTML = "Permettez nous de vous connaitre pour mieux vous aider en terme de difficultes et vos atouts" ;
      myError.style.color = "red";
      e.preventDefault(); 
    } 
    
    else if (emailInput.value.trim() == "") {
      let myError = document.getElementById('error');
      myError.innerHTML = "Le champ email est requis." ;
      myError.style.color = "red";
      e.preventDefault(); 
    } 
  });

  // Validation du remplissage du formulaire
  $(document).ready(function() {
    $('input:radio[name="demande-personnelle"]').change(function() {
      if ($(this).val() === 'oui') {
        document.getElementById('demandePersonnelleNon').className = 'optionDelete';
        document.getElementById('demandePersonnelleOui').classList.remove("optionDelete");
      } else {
        document.getElementById('demandePersonnelleOui').className = 'optionDelete';
        document.getElementById('demandePersonnelleNon').classList.remove("optionDelete");
      }
    });
  });
  $(document).ready(function() {
    $('input:radio[name="formation-precedente"]').change(function() {
      if ($(this).val() === 'oui') {
        document.getElementById('formationOption').classList.remove("optionDelete");
      } else {
        document.getElementById('formationOption').className = 'optionDelete';
      }
    });
  });

</script>
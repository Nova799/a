<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/admin/sender.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/pdf.php');
// var_dump($_POST);
if (isset($_POST['id']) && $_POST['id'] > 1) {
    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM nom_table WHERE id = " . $_POST["id"]));

    $formation = $row["formation"] == "" ? "Vide" : $row["formation"];
    $nom = $row["nom"] == "" ? "Vide" : $row["nom"];
    $entite = $row["entite"] == "" ? "Vide" : $row["entite"];
    $missions = $row["missions"] == "" ? "Vide" : $row["missions"];

    $formation_prece =  $row["formation_precedente"];
    $formation_prece == "non" ? $formation_detail = "Aucun" : $formation_detail = $row["formation_details"] == "" ? "Vide" : $row["formation_details"];
    
    $demande_perso = $row["demande_personnelle"];
    if ($demande_perso == 'non') {
        $difficultes = "Vide";
        $conseil = $row["conseil"] == "" ? "Vide" : $row["conseil"];
    } else {
        $difficultes = $row["difficultes"] == "" ? "Vide" : $row["difficultes"];
        $conseil = "Vide" ;
    }
    
    $objectif = $row["objectifs"] == "" ? "Vide" : $row["objectifs"];
    $attentes = $row["attentes"] == "" ? "Vide" : $row["attentes"];

    $autres_priorites = $row["autres_priorites"] == "" ? "Vide" : $row["autres_priorites"];
    $objectif1 = $row["objectif1"] == "" ? "Vide" : $row["objectif1"];
    $objectif2 = $row["objectif2"] == "" ? "Vide" : $row["objectif2"];
    $objectif3 = $row["objectif3"] == "" ? "Vide" : $row["objectif3"];
    $cas_concrets = $row["cas_concrets"] == "" ? "Vide" : $row["cas_concrets"];
    $remarques = $row["remarques"] == "" ? "Vide" : $row["remarques"];
    $telephone = $row["telephone"] == "" ? "Vide" : $row["telephone"];
    $email = $row["email"] == "" ? "Vide" : $row["email"];

    $file_name = strtolower(str_replace(' ', '_', htmlspecialchars($nom))) . "_" . date('Y_m_d') . '.pdf';

    $imagePath = './assets/images/logo_cinef.png';
    // Lire le contenu de l'image et le convertir en base64
    $image = base64_encode(file_get_contents($imagePath));


    $pdf = new Pdf();
    // $pdf->loadhtml($html_code);
    $pdf->loadhtml('
            
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
        
        body{
          background-size: cover ;
          background-position: center;
        }

        .title-form{
          color: green;
          transition: all .3s  ;
          text-decoration: underline;
        }
        
        .title-form p span {
          text-shadow: 0px -7px 11px rgba(10, 0, 0, 0.3);
        }

        table {
          border-collapse: collapse;
          width: 100%;
        }

        th,
        td {
          border: 1px solid #ddd;
          padding: 8px;
        }

       .list-objectifs{
        list-style-type: circle;
        padding-left : 20px;
      }

        th {
          background-color: #f2f2f2;
        }

        .address {
          padding-top: 10px;
          display: flex;
          align-content: center;
          justify-content: space-between;
          flex-wrap: wrap;
        }

        .address div {
          margin : 10px 0 ;
        }


      </style>

    </head>

    <body class="">

      <main id="main" class="main mx-auto">

        <section class="section">
          <div class="row">
            <center> <img src="data:image/png;base64,'. $image .'" width=\'100\' alt="Mon image"> </center>
            <div class="col-lg-12">

              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                
                <div class="datatable-container">
                  <table>
                  
                    <tbody>

                      <tr class="text-center">
                        <td style="border:none" colspan=\'2\'>
                          <h1 class="title-form fs-5 text-center fw-bold lh-base">
                            <p>
                              <span>
                                RECUEIL DES ATTENTES DES PARTICIPANTS <br> EVALUATION DE PRE-FORMATION 
                              </span>
                            </p> 
                          </h1>
                          <h1 class="pt-4 fs-3 text-center fw-bold">Intitulé de la formation selectionnee : <span style="color: #ff0000">  '. $entite .' - '. $formation .'  </span> </h1>
                          <h5 class="card-title">Vérification des Informations</h5>
                        </td>
                      </tr> 
                          
                      <tr>
                        <td colspan=\'2\' style=\'color: red;\'>
                          <h2><center>Informations Personnelles:</center></h2>
                        </td>
                      </tr> 

                      <tr>
                        <td style="width:50%;" class=\'col\'>Nom et Prénoms :</td> <td>'. $nom .' </td>
                      </tr>

                      <tr>
                        <td>Quelles sont aujourd\'hui vos principales missions et activités dans l’entreprise ?</td><td>'. $missions .' 
                      </tr>

                      <tr>
                        <td colspan=\'2\' style=\'color: red;\'><h2><center>Informations Professionnelles:</center></h2></td>
                      </tr>

                      <tr>
                        <td>Avez-vous déjà suivi une formation sur ce thème ou un thème similaire ?</td><td> '. $formation_prece .' </td>
                      </tr>

                      <tr>
                        <td>Si oui, laquelle et à quelle date ?</td><td> '. $formation_detail .' </td>
                      </tr>

                      <tr>
                      <td>Avez-vous demandé personnellement à suivre cette formation ?</td><td> '. $demande_perso .' </td>
                      </tr>

                      <tr>
                      <td>Si oui, quelles difficultés rencontrez-vous pour lesquelles vous souhaitez suivre cette formation ?</td><td> '. $difficultes .' </td>
                      </tr>

                      <tr>
                        <td>Si non, qui vous a conseillé cette formation ?</td><td> '. $conseil .' </td>
                      </tr>

                      <tr>
                        <td colspan=\'2\' style=\'color: red;\'><h2><center>Informations Complémentaires:</center></h2></td>
                      </tr>

                      <tr>
                        <td>Suivez-vous cette formation dans l\'objectif de prise de poste ou sensibilisation ?</td><td> '. $objectif .' </td>
                      </tr>

                      <tr>
                        <td>Qu\'attendez-vous en priorité de cette formation ?</td><td>'.$listAttente.'</td>
                      </tr>

                      <tr>
                        <td>Vos Autres priorités:</td><td> '. $autres_priorites .' </td>
                      </tr>

                      <tr>
                        <td>Quels sont vos trois objectifs opérationnels à atteindre à l\'issue de cette formation ?</td><td class="list-objectifs"> <li> '. $objectif1 .' "</li><br><li> '. $objectif2 .' "</li><br><li> '. $objectif3 .' "</li></td>
                      </tr>

                      <tr>
                        <td>Avez-vous des cas concrets (dossiers) pour lesquels vous souhaiteriez des réponses durant la formation ? Merci de nous les envoyer par mail ou de les amener en formation.</td><td> '. $cas_concrets .' </td>
                      </tr>
                         
                    </tbody>
                  </table>
                </div>

                          <div class="address">
                              <div>
                                  <span> '.$GLOBALS['siege_societe'] .' </span>
                              </div>
                              <div>
                                  <span> '.$GLOBALS['numero_tel'] .' </span>
                              </div>
                              <div>
                                  <span>  '.$GLOBALS['email_send'] .' </span>
                              </div>
                          </div>
                        
          
              </div>

            </div>
          </div>
        </section>

      </main>

      </body>
            
            ');

    $pdf->setPaper('A4', 'portrait');
    $pdf->render();
    $pdf->stream();

    // Crée le dossier récursivement avec les permissions 
    $path_to_save_file = './assets/docs/';
    if (!file_exists($path_to_save_file)) {
        mkdir($path_to_save_file, 0777, true);
    }

    // Chemin complet vers le fichier
    $path_to_file_pdf = $path_to_save_file . $file_name;

    // Enregistrer le pdf a travers ce chemin dans le dossier
    $file = $pdf->output();
    file_put_contents($path_to_file_pdf, $file);

    // Envoi du mail
    // send_mail($email, $nom, '', "Reponse au formulaire", "recevez une copie du formulaire remplie sous forme de pdf", $file_name);
    if ($_POST["send"] == "true") {
        send_mail($_POST["to"], "", "", $_POST["sujet"], $_POST["message"], $path_to_file_pdf);
    }
} else {
    $subject = $_POST["sujet"];
    $message = $_POST["message"];
    $to = $_POST["to"];
    echo $to . "\n";
    echo "message = " . $message . "\n";
    $attachmentFilePath = ''; // Définir une valeur par défaut pour éviter une erreur si aucun fichier n'est téléchargé
    if (isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] === UPLOAD_ERR_OK) {
        $tmpFilePath = $_FILES["fichier"]["tmp_name"];
        $uploadDir = realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/assets/docs/';
        $filename = $_FILES["fichier"]["name"];
        $attachmentFilePath = $uploadDir . $filename;
        if (move_uploaded_file($tmpFilePath, $attachmentFilePath)) {
            send_mail($to, $nom, $prenom, $subject, $message, $attachmentFilePath);
        }
    } else {
        send_mail($to, $nom, $prenom, $subject, $message);
    }
}


?>
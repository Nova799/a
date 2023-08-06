<?php

require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');

require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/admin/sender.php');
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/pdf.php');



function valid_data($data)
{
  $data = trim($data);
  $data = addslashes($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['data_from_formulaire'])) {
  // $data_from_formulaire = $_POST['data_from_formulaire'];

  // // var_dump($data_from_formulaire[0]);

  // // Enregistrement dans la base de donnee
  // //On insère les données reçues
  // $listAttente = "";
  // $attentes = $data_from_formulaire[10];
  // if (isset($attentes)) {
  //   for ($i = 0; $i < count($attentes); $i++) {
  //     $listAttente .= $attentes[$i] . ' - ';
  //   }
  // } else {
  //   $listAttente = 'Aucune donnee selectionnee';
  // }

  // // $sql = "INSERT INTO `no_table` (`formation`, `nom`, `entite`, `missions`, `formation_precedente`, `formation_details`, `demande_personnelle`, `difficultes`, `conseil`, `objectifs`, `attentes`, `autres_priorites`, `objectif1`, `objectif2`, `objectif3`, `cas_concrets`, `remarques`, `telephone`, `email`, `canChange`, `isChanged`) VALUES ('$data_from_formulaire[0]', '$data_from_formulaire[1]', '$data_from_formulaire[2]', '$data_from_formulaire[3]', '$data_from_formulaire[4]', '$data_from_formulaire[5]', '$data_from_formulaire[6]', '$data_from_formulaire[7]', '$data_from_formulaire[8]', '$data_from_formulaire[9]', '$listAttente', '$data_from_formulaire[11]', '$data_from_formulaire[12]', '$data_from_formulaire[13]', '$data_from_formulaire[14]', '$data_from_formulaire[15]', '$data_from_formulaire[16]', '$data_from_formulaire[17]', '$data_from_formulaire[18]', 0 , 0)";

  // // $sql = "INSERT INTO nom_table (`formation`, `nom`, `entite`, `missions`, `formation_precedente`, `formation_details`, `demande_personnelle`, `difficultes`, `conseil`, `objectifs`, `attentes`, `autres_priorites`, `objectif1`, `objectif2`, `objectif3`, `cas_concrets`, `remarques`, `telephone`, `email`) VALUES ('$data_from_formulaire[0]', '$data_from_formulaire[1]', '$data_from_formulaire[2]', '$data_from_formulaire[3]', '$data_from_formulaire[4]', '$data_from_formulaire[5]', '$data_from_formulaire[6]', '$data_from_formulaire[7]', '$data_from_formulaire[8]', '$data_from_formulaire[9]', '$listAttente', '$data_from_formulaire[11]', '$data_from_formulaire[12]', '$data_from_formulaire[13]', '$data_from_formulaire[14]', '$data_from_formulaire[15]', '$data_from_formulaire[16]', '$data_from_formulaire[17]', '$data_from_formulaire[18]');";
  // $sql = 'INSERT INTO nom_table (`formation`, `nom`, `entite`, `missions`, `formation_precedente`, `formation_details`, `demande_personnelle`, `difficultes`, `conseil`, `objectifs`, `attentes`, `autres_priorites`, `objectif1`, `objectif2`, `objectif3`, `cas_concrets`, `remarques`, `telephone`, `email`, `canChange`, `isChanged`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

  // $requetePrepare = $conn->prepare($sql);
  // $requetePrepare->bind_param($data_from_formulaire[0], $data_from_formulaire[1], $data_from_formulaire[2], $data_from_formulaire[3], $data_from_formulaire[4], $data_from_formulaire[5], $data_from_formulaire[6], $data_from_formulaire[7], $data_from_formulaire[8], $data_from_formulaire[9], $listAttente, $data_from_formulaire[11], $data_from_formulaire[12], $data_from_formulaire[13], $data_from_formulaire[14], $data_from_formulaire[15], $data_from_formulaire[16], $data_from_formulaire[17], $data_from_formulaire[18], '0', '0');

  // if ($requetePrepare->execute()) {
  //   echo " Insertion reussie";
  // } else {
  //   echo "Erreur lors de l'insertion : " . $requetePrepare->error;
  // }

  // $requetePrepare->close();
  // $conn->close();

  $data_from_formulaire = $_POST['data_from_formulaire'];

  //  Enregistrement dans la base de donnee
  
  $listAttente = "";
  $attentes = $data_from_formulaire[10];
  if (isset($attentes))
  {
      for ($i=0;$i<count($attentes);$i++){
          $listAttente .= $attentes[$i].' - ';
      }
  } else { $listAttente = 'Aucune donnee selectionnee' ;}

  $sql = "INSERT INTO `nom_table` (`formation`, `nom`, `entite`, `missions`, `formation_precedente`, `formation_details`, `demande_personnelle`, `difficultes`, `conseil`, `objectifs`, `attentes`, `autres_priorites`, `objectif1`, `objectif2`, `objectif3`, `cas_concrets`, `remarques`, `telephone`, `email`, `canChange`, `isChanged`) VALUES ('$data_from_formulaire[0]', '$data_from_formulaire[1]', '$data_from_formulaire[2]', '$data_from_formulaire[3]', '$data_from_formulaire[4]', '$data_from_formulaire[5]', '$data_from_formulaire[6]', '$data_from_formulaire[7]', '$data_from_formulaire[8]', '$data_from_formulaire[9]', '$listAttente', '$data_from_formulaire[11]', '$data_from_formulaire[12]', '$data_from_formulaire[13]', '$data_from_formulaire[14]', '$data_from_formulaire[15]', '$data_from_formulaire[16]', '$data_from_formulaire[17]', '$data_from_formulaire[18]', '0', '0');";

  // $sql = "INSERT INTO 'nom_table' ('formation', 'nom', 'entite', 'missions', 'formation_precedente4', 'formation_details5', 'demande_personnelle6', 'difficultes7', 'conseil8', 'objectifs9', 'attentes10', 'autres_priorites11', 'objectif1 12', 'objectif2 13', 'objectif3 14', 'cas_concrets 15', 'remarques 15', 'telephone  16', 'email 17', 'canChange 18', 'isChanged 19') VALUES ('ijur', 'ijr', 'elounl', 'ounje', 'non', ';oi', 'oui', 'ljn', 'lkjn;', 'non', 'ljk', ';oew', 'flrekjw', 'oijerw', 'ljn', 'oui', 'ljknrew', 'jrjejej', 'amirbabio40@gmail.com', '0', '0')";
  mysqli_query($conn,$sql);


  // var_dump($sql);
  // $sql = "INSERT INTO `nom_table` (`formation`, `nom`, `entite`, `missions`, `formation_precedente`, `formation_details`, `demande_personnelle`, `difficultes`, `conseil`, `objectifs`, `attentes`, `autres_priorites`, `objectif1`, `objectif2`, `objectif3`, `cas_concrets`, `remarques`, `telephone`, `email`, `canChange`, `isChanged`) VALUES ('ijur', 'ijr', 'elounl', 'ounje', 'non', ';oi', 'oui', 'ljn', 'lkjn;', 'non', 'ljk', ';oew', 'flrekjw', 'oijerw', 'ljn', 'oui', 'ljknrew', 'jrjejej', 'amirbabio40@gmail.com', '0', '0')";

  // mysqli_query($conn,$sql) ;



  // Generation de pdf 

  $formation = $data_from_formulaire[0];
  $nom = $data_from_formulaire[1];
  $entite = $data_from_formulaire[2];
  $missions = $data_from_formulaire[3];
  $formation_prece = $data_from_formulaire[4];

  if ($formation_prece == 'non') {
    $formation_detail = "Aucun";
  } else {
    $formation_detail = $data_from_formulaire[5];
  }

  $demande_perso = $data_from_formulaire[6];
  if ($demande_perso == 'non') {
    $conseil = $data_from_formulaire[8];
    $difficultes = 'Aucun';
    $valeurRepondu = '<tr><td>Si non, qui vous a conseillé cette formation ?</td><td> ' . $conseil . ' </td></tr>';
  } else {
    $difficultes = $data_from_formulaire[7];
    $conseil = 'Aucun';
    $valeurRepondu = '<tr><td>Si oui, quelles difficultés rencontrez-vous pour lesquelles vous souhaitez suivre cette formation ?</td><td> ' . $difficultes . ' </td></tr>';
  }

  $objectif = $data_from_formulaire[9];
  $attentes = $data_from_formulaire[10];
  $listAttente = '';
  // filter_input()
  if (isset($attentes)) {
    for ($i = 0; $i < count($attentes); $i++) {
      $listAttente .= $attentes[$i] . ' - ';
    }
  } else {
    $listAttente = 'Aucune donnee selectionnee';
  }

  $autres_priorites = $data_from_formulaire[11];
  $objectif1 = $data_from_formulaire[12];
  $objectif2 = $data_from_formulaire[13];
  $objectif3 = $data_from_formulaire[14];
  $cas_concrets = $data_from_formulaire[15];
  $remarques = $data_from_formulaire[16];
  $telephone = $data_from_formulaire[17];
  $email = $data_from_formulaire[18];

  $file_name = strtolower(str_replace(' ', '_', htmlspecialchars($nom))) . "_" . date('Y_m_d_s') . '.pdf';

  // ocnvert image 

  $imagePath = './assets/images/logo_cinef.png';
  // Lire le contenu de l'image et le convertir en base64
  $image = base64_encode(file_get_contents($imagePath));

  $impageBackgroundPath = './assets/img/contact_back/contact_img1.jpg';
  $imageBack = base64_encode(file_get_contents($impageBackgroundPath));

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
                      font-weight: bolder;
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


                    .address div {
                      margin : 10px 0 ;
                    }


                  </style>

                </head>

                <body class="">

                  <main id="main" class="main mx-auto">

                    <section class="section">
                      <div class="row">
                        <center> <img src="data:image/png;base64,' . $image . '" width=\'100\' alt="Mon image"> </center>
                        <div class="col-lg-12">

                          <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            
                            <div class="datatable-container">
                              <table>
                              
                                <tbody>

                                  <tr style="text-align:center">
                                    <td style="border:none;text-align:center;" colspan=\'2\'>
                                      <h1 class="text-center fw-bold ">
                                        <p>
                                          <span class="title-form fs-3">
                                            RECUEIL DES ATTENTES DES PARTICIPANTS <br> EVALUATION PRE-FORMATION 
                                          </span>
                                        </p> 
                                      </h1>
                                      <h2 class="pt-4 text-center fw-bold">Intitulé de la formation selectionnee <span style="color: #ff0000">  ' . $formation . '  </span> </h2>
                                      <h4 class="card-title">Vérification des Informations</h4>
                                    </td>
                                  </tr> 
                                      
                                  <tr>
                                    <td colspan=\'2\' style=\'color: red;\'>
                                      <h2><center>Informations Personnelles</center></h2>
                                    </td>
                                  </tr> 

                                  <tr>
                                    <td style="width:50%;" class=\'col\'>Nom et Prénoms :</td> <td>' . $nom . ' </td>
                                  </tr>

                                  <tr>
                                    <td>Entité/Direction/Service :</td><td>' . $entite . ' </td>
                                  </tr>

                                  <tr>
                                    <td>Quelles sont aujourd\'hui vos principales missions et activités dans l’entreprise ?</td><td>' . $missions . ' 
                                  </tr>

                                  <tr>
                                    <td colspan=\'2\' style=\'color: red;\'><h2><center>Informations Professionnelles</center></h2></td>
                                  </tr>

                                  <tr>
                                    <td>Avez-vous déjà suivi une formation sur ce thème ou un thème similaire ?</td><td> ' . $formation_prece . ' </td>
                                  </tr>

                                  <tr>
                                    <td>Si oui, laquelle et à quelle date ?</td><td> ' . $formation_detail . ' </td>
                                  </tr>

                                  <tr>
                                  <td>Avez-vous demandé personnellement à suivre cette formation ?</td><td> ' . $demande_perso . ' </td>
                                  </tr> ' . $valeurRepondu . '

                                  <tr>
                                    <td colspan=\'2\' style=\'color: red;\'><h2><center>Informations Complémentaires</center></h2></td>
                                  </tr>

                                  <tr>
                                    <td>Suivez-vous cette formation dans l\'objectif de prise de poste ou sensibilisation ?</td><td> ' . $objectif . ' </td>
                                  </tr>

                                  <tr>
                                    <td>Qu\'attendez-vous en priorité de cette formation ?</td><td>' . $listAttente . '</td>
                                  </tr>

                                  <tr>
                                    <td>Vos Autres priorités:</td><td> ' . $autres_priorites . ' </td>
                                  </tr>

                                  <tr>
                                    <td>Quels sont vos trois objectifs opérationnels à atteindre à l\'issue de cette formation ?</td><td class="list-objectifs"> <li> ' . $objectif1 . ' "</li><br><li> ' . $objectif2 . ' "</li><br><li> ' . $objectif3 . ' "</li></td>
                                  </tr>

                                  <tr>
                                    <td>Avez-vous des cas concrets (dossiers) pour lesquels vous souhaiteriez des réponses durant la formation ? Merci de nous les envoyer par mail ou de les amener en formation.</td><td> ' . $cas_concrets . ' </td>
                                  </tr>
                                     
                                </tbody>
                              </table>
                            </div>
          
                          </div>

                        </div>
                      </div>
                    </section>
                    
                    <div style="display:flex; padding-top:10px; align-content:center; justify-content:space-between; flex-wrap:wrap;" class="address">
                          <div style="font-weight:800; font-size: 1rem;">
                               <span style="color:green; padding-bottom:30px;">' . $GLOBALS['siege_societe'] . ' </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ' . $GLOBALS['numero_tel'] . ' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ' . $GLOBALS['email_send'] . ' 
                                <br>
                               <span style="color:black; margin-top: 50px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Designed by CINEF SAS Copyright © 2023. All rights reserved. </span>
                          </div>
                    </div>

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
  $message_mail = "Bonjour Mme/M " . $nom . "<br> Nous accusons reception du formulaire que vous avez eu a remplies. <br>Nous vous remercions d'avoir pris le temps de le remplir. Vos réponses nous sont précieuses et nous aideront à parfaire la formation au regard de vos attentes. <br>Ainsi donc, recevez en fichier joint une copie de ce formulaire. Si vous avez des questions ou des commentaires supplémentaires, n'hésitez pas à nous contacter. <br> <br>Cordialement, l'équipe <span color:green;> CINEF </span>";
  send_mail($email, $nom, '', "Reponse au formulaire d'evaluation de pre-formation", $message_mail, $path_to_file_pdf);

  $query_admin = "SELECT * FROM `user` WHERE `role` = 'admin'";
  $result = mysqli_query($conn, $query_admin);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $message_mail_admin = "Bonjour, Mme/M " . $row["nomP"] . "<br> Recevez en copie le formulaire du participant(e) " . $nom . ".";
      send_mail($row["email"], $row["nomP"], '', "Formulaire du participant(e)".$nom, $message_mail_admin, $path_to_file_pdf);
    }
  }
};

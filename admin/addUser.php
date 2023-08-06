<?php 
  session_start();
  include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');


  if (!isset($_SESSION["user"])) {
    header("Location: ../connexion.php");
  } else {
    if ($_SESSION["user"]["role"] != "admin") {
      header("Location: ../connexion.php");
    }
  } ?>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Dashboard | User </title>

  <?php include_once('layout_link_css.php') ?>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

</head>

<body class="sidebar-dark">
  <div class="container-scroller">

    <?php include('header_top.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper pt-0">
      <!-- partial:partials/_settings-panel.html -->
      <?php include('header_left.php') ?>

      <!-- partial -->
      <div class="main-panel">

        <div class="content-wrapper">
          <div class="row">
            <div class="col-4">
              
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ajout d'un utilisateur</h4>
                    <p class="card-description">
                      Renseignez les informations de l'utilisateur
                    </p>
                    <form class="forms-sample" method='POST'>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Nom & P&eacute;nom (s)</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nom & P&eacute;nom (s)" name='nomP'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Adresse mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Adresse mail" name='mail'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name='pwd'>
                      </div>
                      <!-- <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Administrate
                      <i class="input-helper"></i></label>
                    </div> -->
                      <button type="reset" class="btn btn-light">Annuler</button>
                      <button type="submit" class="btn btn-success me-2" name='submit'>Soumettre</button>
                    </form>
                  </div>
                </div>
              
              
            </div>
            <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Liste des utilisateurs</h4>
                    
                    <table class='table'>
                      <thead class='table-dark'>
                        <tr>
                          <th>N°</th>
                          <th>Nom & Prénom (s)</th>
                          <th>Adresse mail</th>
                          <th>Type d'utilisateur</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 

                        $res = mysqli_query($conn, "SELECT * FROM user ORDER BY id DESC LIMIT 5");
                        while ($row = mysqli_fetch_assoc($res)) {
                          ?>
                          <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['nomP'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?php 
                              if ($row['role'] == 'admin')
                                echo 'Administrateur';
                              else
                                echo 'Utilisateur';
                             ?></td>
                          </tr>
                          <?php
                        }
                        
                        ?>
                        </tbody>
                    </table>
                    
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">

              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed by CINEF SAS. Copyright © 2021. All rights
                reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
<div id="dialog" title="Succès">
  L'enregistrement a été fait avec succès
</div>
    <?php include('layout_link_js.php') ?>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      var dialog = $("#dialog").dialog({
      autoOpen: false,
      modal: true,
      resizable: false

    });
    </script>


</body>

</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  $nomP = $_POST['nomP'];
  $mail = $_POST['mail'];
  $pwd = $_POST['pwd'];
  include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');

  // Vérifier la connexion
  if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
  }

  // Récupérer les informations de base de données
  $query = "INSERT INTO user (nomP, email, password, role) VALUES ('$nomP', '$mail', '$pwd', 'admin')";
  mysqli_query($conn, $query);
  ?>
  
  <script>
    dialog.dialog("open")
    $("body > div.ui-dialog.ui-corner-all.ui-widget.ui-widget-content.ui-front.ui-draggable > div.ui-dialog-titlebar.ui-corner-all.ui-widget-header.ui-helper-clearfix.ui-draggable-handle > button").on({click: function () {location.href = location.href}})
  </script>
  
  <?php
}

?>
<?php 
  session_start();

  include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');


  if (!isset($_SESSION["user"])) {
    header("Location: ../connexion.php");
  } else {
    if ($_SESSION["user"]["role"] != "admin") {
      header("Location: ../connexion.php");
    }
  }
?>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashbord | Formation</title>

  <?php include('layout_link_css.php') ?>


</head>

<body class="sidebar-dark">
  <div class="container-scroller">

    <?php include('header_top.php') ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper pt-0">
      <!-- partial:partials/_settings-panel.html -->
      <?php include_once('header_left.php') ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="col-md-6 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ajout d'une formation</h4>
                    <p class="card-description">
                      Renseignez les informations de la formation
                    </p>
                    <form class="forms-sample" method='POST'>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Libellé de la formation</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Libellé de la formation" name='libelle'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Code de la formation</label>
                        <input type="code" class="form-control" id="exampleInputEmail1" placeholder="Code de la formation" name='code'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description de la formation</label>
                        <textarea name="descr" id="descr" cols="30" rows="10" placeholder='Description de la formation' class='form-control' style="height: auto !important;"></textarea>
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
    <?php include_once('layout_link_js.php') ?>

    <script src="/Impact/assets/jquery-3.2.1.min.js"></script>

</body>

</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  $libelle = $_POST['libelle'];
  $code = $_POST['code'];
  $descr = $_POST['descr'];
  include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
  // $conn = conn();

  // Vérifier la connexion
  if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
  }

  // Récupérer les informations de base de données
  $query = "INSERT INTO formation (libelle, code, descr) VALUES ('$libelle', '$code', '$descr')";
  mysqli_query($conn, $query);
}

?>
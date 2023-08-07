<?php
session_start();
include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
if (!isset($_SESSION["user"])) {
  header("Location: /CINEFWEB/connexion.php");
} else {
  if ($_SESSION["user"]["role"] != "admin") {
    header("Location: /CINEFWEB/connexion.php");
  }
}

?>


<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard | Admin</title>

  <?php include_once('layout_link_css.php') ?>

</head>

<body class="sidebar-dark">
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <?php include('header_top.php') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper pt-0">

      <?php include_once('header_left.php') ?>
      <!-- partial -->

      <div class="main-panel">

        <div class="content-wrapper">

          <!-- content-wrapper start -->
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">

                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">

                          <div class='bg-success text-light p-4 rounded'>
                            <?php
                            include('../config/conn.php');
                            // $conn = conn();
                            ?>
                            <p class="statistics-title text-light">Total des utilisateurs</p>
                            <p class="statistics-title mobile text-light d-none">Utilisateurs</p>
                            <h3 class="rate-percentage text-center text-light">
                              <?php
                              $res = mysqli_query($conn, "SELECT COUNT(id) as total FROM user");
                              while ($row = mysqli_fetch_assoc($res)) {
                                if ($row['total'] < 10) {
                                  echo '0';
                                }

                                echo $row['total'];
                              }
                              ?>
                            </h3>
                            <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p> -->
                          </div>
                          <div class='bg-success text-light p-4 rounded'>
                            <p class="statistics-title text-light">Total de souscription au newsletter</p>
                            <p class="statistics-title mobile text-light d-none">Newletters</p>
                            <h3 class="rate-percentage text-center text-light">
                              <?php
                              $res = mysqli_query($conn, "SELECT COUNT(id) as total FROM newsletters");
                              while ($row = mysqli_fetch_assoc($res)) {
                                if ($row['total'] < 10) {
                                  echo '0';
                                }

                                echo $row['total'];
                              }
                              ?>
                            </h3>
                            <!-- <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p> -->
                          </div>
                          <div class='bg-success text-light p-4 rounded'>
                            <p class="statistics-title text-light">Total de formation offertes</p>
                            <p class="statistics-title mobile text-light d-none">Formations</p>
                            <h3 class="rate-percentage text-center text-light">
                              <?php
                              $res = mysqli_query($conn, "SELECT COUNT(id) as total FROM formation");
                              while ($row = mysqli_fetch_assoc($res)) {
                                if ($row['total'] < 10) {
                                  echo '0';
                                }
                                echo $row['total'];
                              }
                              ?>
                            </h3>
                            <!-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> -->
                          </div>
                          <div class="d-none d-md-block bg-success text-light p-4 rounded">
                            <p class="statistics-title text-light">Total de formulaires re&ccedil;us</p>
                            <p class="statistics-title mobile text-light d-none">Formulaires</p>
                            <h3 class="rate-percentage text-center text-light">
                              <?php
                              $res = mysqli_query($conn, "SELECT COUNT(id) as total FROM nom_table");
                              while ($row = mysqli_fetch_assoc($res)) {
                                if ($row['total'] < 10) {
                                  echo '0';
                                }

                                echo $row['total'];
                              }
                              ?>
                            </h3>
                          </div>


                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <div class="content-wrapper">

                        <div class="row">
                          <div class="col-sm-12">
                            <div class="home-tab">

                              <input type="search" id="searchInput" placeholder="Recherche..."
                                class='form-control form-control-sm'>

                              <div class="tab-content tab-content-basic">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                  aria-labelledby="overview">
                                  <ul id="resultsList"></ul>
                                  <div class="row">
                                    <div class="col-lg-12">

                                      <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                          <div class="card card-rounded">
                                            <div class="card-body">
                                              <div class="d-sm-flex justify-content-between align-items-start">
                                              </div>
                                              <div class="table-responsive  mt-1">
                                                <h3 class="text-center">
                                                  Liste des formulaires de recueils des attentes reçues
                                                </h3>
                                                <table class="table select-table">
                                                  <thead>
                                                    <tr>
                                                      <th>
                                                        N°
                                                      </th>
                                                      <th>Formation</th>
                                                      <th>Nom & prénom (s)</th>
                                                      <th>Entité</th>
                                                      <th colspan="3" class="text-center">Actions</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody id='body'>
                                                    <?php

                                                    // Vérifier la connexion
                                                    if (!$conn) {
                                                      die("Erreur de connexion à la base de données: " . mysqli_connect_error());
                                                    }

                                                    // Récupérer les informations de base de données
                                                    if (!isset($_GET['page']) || $_GET['page'] == 0) {
                                                      $query = "SELECT formation, nom, entite, id, isChanged FROM nom_table ORDER BY id DESC LIMIT 10";
                                                    } else {
                                                      $query = "SELECT formation, nom, entite, id, isChanged FROM nom_table ORDER BY id DESC LIMIT " . intval($_GET['page']) * 10 . ", " . intval($_GET['page']) * 20;
                                                    }
                                                    $result = mysqli_query($conn, $query);

                                                    // Vérifier si des résultats ont été trouvés
                                                    if (mysqli_num_rows($result) > 0) {
                                                      $nbr = 0;
                                                      // Afficher les données dans le tableau de bord
                                                      while ($row = mysqli_fetch_assoc($result)) {
                                                        $nbr++;
                                                        ?>
                                                        <tr>
                                                          <td>
                                                            <div class="d-flex">
                                                              <div>
                                                                <h6>
                                                                  <?= $nbr ?>
                                                                </h6>
                                                              </div>
                                                            </div>
                                                          <td>
                                                            <div class="d-flex">
                                                              <div>
                                                                <h6>
                                                                  <?= $row["formation"] ?>
                                                                </h6>
                                                              </div>
                                                            </div>
                                                          </td>
                                                          <td>
                                                            <h6>
                                                              <?= $row["nom"] ?>
                                                            </h6>
                                                          </td>
                                                          <td>
                                                            <h6>
                                                              <?= $row["entite"] ?>
                                                            </h6>
                                                          </td>
                                                          <td class='text-center pointer'>
                                                            <a href="../appercu.php?id=<?= $row["id"] ?>"
                                                              class='text-secondary' target='_blank'>
                                                              <h2 class="mdi mdi-eye"></h2>
                                                            </a>
                                                          </td>
                                                          <td class='text-center pointer'>
                                                            <a href="#"
                                                              class='text-<?php if (/*$row['isChanged'] == 1 && $row['canChange'] == 0 ||*/ false) { ?>danger<?php } else { ?>secondary modif<?php } ?>'
                                                              title="<?= $row["id"] ?>">
                                                              <h2 class="mdi mdi-pen"></h2>
                                                            </a>
                                                          </td>
                                                          <td class='text-center pointer'>
                                                            <a href="./share.php?table=nom_table&id=<?= $row["id"] ?>"
                                                              target="_blank" class='text-secondary'>
                                                              <h2 class="mdi mdi-send"></h2>
                                                            </a>
                                                            <!-- <div class="badge badge-opacity-success">Completed</div> -->
                                                          </td>
                                                        </tr>

                                                        <?php
                                                      }
                                                    } else {
                                                      echo '<tr><td colspan="5" class="text-center"><h3>Aucune donnée disponible</h3></td></tr>';
                                                    }

                                                    // Fermer la connexion à la base de données
                                                    mysqli_close($conn);
                                                    ?>
                                                  </tbody>
                                                  <tr>
                                                    <td colspan="8">
                                                      <a class='btn btn-secondary float-start' href='?page=<?php if (isset($_GET['page'])) {
                                                        echo "" . (intval($_GET['page']) - 1) . "";
                                                      } else {
                                                        echo '0';
                                                      } ?>'>Pr&eacute;c&eacute;dent</a>
                                                      <a class='btn btn-primary text-white float-end' href='?page=<?php if (isset($_GET['page'])) {
                                                        echo "" . (intval($_GET['page']) + 1) . "";
                                                      } else {
                                                        echo '1';
                                                      } ?>'>Suivant</a>
                                                    </td>
                                                  </tr>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->

          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">

              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed by CINEF SAS. Copyright
                © 2021. All rights
                reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <div class="fictif d-none">
      <div class="col-md-4 mx-auto p-3 mt-5">
        <form method="post" class="p-5 rounded bg-light">
          <input type="hidden" name="id" id="id">
          <div class="form-check">
            <input type="radio" name="edit" value="moi" id="moi" class="form-check-input" checked><label for="moi"
              class="form-check-label text-uppercase fw-bolder">Faire la modification
              moi-même</label><br>
          </div>
          <div class="form-check">
            <input type="radio" name="edit" value="lui" id="lui" class="form-check-input"><label for="lui"
              class="form-check-label text-uppercase fw-bolder">Renvoyer le formulaire</label><br>
          </div>
          <button type="button" class="btn btn-dark text-uppercase float-start"
            onclick="(function ($) {$('div.fictif').toggleClass('d-none')})(jQuery)">Fermer</button>
          <button id="subm" class="btn btn-primary text-uppercase float-end">Soumettre</button>
          <br>
        </form>
      </div>
    </div>
    <!-- container-scroller -->

    <?php include('layout_link_js.php') ?>

    <script>
      (function ($) {
        $("button#subm").on({
          "click": function () {
            if ($("#moi").prop("checked")) {
              window.open("../modif.php?myself=true&id=" + $("input#id").val(), "_blank");
            } else {
              $.ajax({
                url: "../modif_T.php?resend=" + $("input#id").val(),
                method: "GET",
                success: function (data) {
                  alert("Le mail a été envoyé avec succès");
                  $("div.fictif").toggleClass("d-none");
                }
              })
            }
            return false;
          }
        })
        $("div.fictif").css({
          background: "rgba(2, 2, 2, 0.7)",
          position: "fixed",
          top: "0",
          right: "0",
          width: "100%",
          height: "100%",
          "z-index": "99999"
        });
        $("a.modif").on({
          "click": function (e) {
            $("div.fictif form input[type='hidden']").val(e.currentTarget.title);
            $("div.fictif").toggleClass("d-none");
            // location.href = location.href;
            return false;
          }
        })

        $('input#searchInput').on({
          'input': function () {
            $.ajax({
              url: '/CINEFWEB/admin/info.php?table=formulaires&q=' + $('#searchInput').val(),
              type: 'GET',
              success: function (data) {
                var result = JSON.parse(data);
                $('#body').html('');
                var nbr = 0;
                if (result['empty']) {
                  $('#body').html('<tr>\
                <td colspan="5" class="text-center">\
                ' + result['empty'] + '\
                </td>\
                </tr>')
                } else {
                  for (var x of result['data']) {
                    nbr += 1;
                    $('#body').append('<tr>\
                                        <td>\
                                          <div class="d-flex">\
                                            <div>\
                                              <h6>' + nbr + '</h6>\
                                            </div>\
                                          </div>\
                                        <td>\
                                          <div class="d-flex">\
                                            <div>\
                                              <h6>' + x["formation"] + '</h6>\
                                            </div>\
                                          </div>\
                                        </td>\
                                        <td>\
                                          <h6>' + x["nom"] + '</h6>\
                                        </td>\
                                        <td>\
                                          <h6>' + x["entite"] + '</h6>\
                                        </td>\
                                        <td class="text-center pointer">\
                                          <a href="../traitement.php?id=' + x["id"] + '" class="text-secondary" target="_blank"><h2 class="mdi mdi-eye"></h2></a>\
                                        </td>\
                                      </tr>')
                  }
                }
              }
            })
          }
        })
      })(jQuery)
    </script>

</body>

</html>
<?php

if (isset($_POST["sub"])) {
  $decision = $_POST["edit"];
  $id = $_POST["id"];
  if (!$conn) {
    include("../config/conn.php");
    // $conn = conn();
  }
  mysqli_query($conn, "UPDATE nom_table SET isChanged = 1, canChange = 1 WHERE id = " . $id . " AND canChange = 0 AND isChanged = 0");
  $res = mysqli_query($conn, "SELECT * FROM nom_table WHERE id = " . $id . " AND canChange = 0 AND isChanged = 0");
  $row = mysqli_fetch_assoc($res);
  if (mysqli_num_rows($res) == 1) {
    if ($decision == "moi") {
      ?>
      <script>
        window.open("../modif.php?id=<?php echo $_POST["id"] ?>")
      </script>
      <?php
    } else {
      $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
      $url = $baseUrl . "/CINEFWEB/modif.php?id=" . $row['id'];
      include("./sender.php");
      send_mail($row["email"], $row["nom"], $row["prenom"], "Correction nécessaire pour le formulaire soumis", "Nous avons bien reçu votre formulaire de pré-inscription à la formation intitulée: '" . $row['formation'] . "', et nous vous en remercions. <br>Cependant, il semble qu'il y ait quelques informations nécessitant une correction ou une mise à jour.<br><br>Veuillez s'il vous plaît revoir le formulaire et apporter les modifications nécessaires en cliquant sur le lien suivant :<br><a href='$url'>Lien de modification</a><br>Nous vous prions de nous renvoyer le formulaire corrigé dès que possible, avant la date limite de soumission.<br><br>Si vous avez des questions ou besoin d'assistance, n'hésitez pas à nous contacter.<br><br>Cordialement,<br>L'équipe technique de CINEF<br>");
    }
  }
}

if (isset($_GET["resend"])) {
  $id = $_GET["resend"];
  if (!$conn) {
    include("../config/conn.php");
    // $conn = conn();
  }
  mysqli_query($conn, "UPDATE nom_table SET isChanged = 1, canChange = 1 WHERE id = " . $id . " AND canChange = 0 AND isChanged = 0");
  $res = mysqli_query($conn, "SELECT * FROM nom_table WHERE id = " . $id . " AND canChange = 0 AND isChanged = 0");
  $row = mysqli_fetch_assoc($res);
  if (mysqli_num_rows($res) == 1) {
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
    $url = $baseUrl . "/CINEFWEB/modif.php?id=" . $row['id'];
    include("./sender.php");
    send_mail($row["email"], $row["nom"], $row["prenom"], "Correction nécessaire pour le formulaire soumis", "Nous avons bien reçu votre formulaire de pré-inscription à la formation intitulée: '" . $row['formation'] . "', et nous vous en remercions. <br>Cependant, il semble qu'il y ait quelques informations nécessitant une correction ou une mise à jour.<br><br>Veuillez s'il vous plaît revoir le formulaire et apporter les modifications nécessaires en cliquant sur le lien suivant :<br><a href='$url'>Lien de modification</a><br>Nous vous prions de nous renvoyer le formulaire corrigé dès que possible, avant la date limite de soumission.<br><br>Si vous avez des questions ou besoin d'assistance, n'hésitez pas à nous contacter.<br><br>Cordialement,<br>L'équipe technique de CINEF<br>");
  }
} else {
}

?>
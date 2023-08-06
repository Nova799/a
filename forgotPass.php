<?php
session_start();
include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/admin/sender.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->
  <link rel="stylesheet" href="assets/css/core.min.css">
  <!-- <link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL2xvY2FsaG9zdC9pbXBhY3QvY29ubmV4aW9uLmh0bWw"> -->

  <style>
    .form-outline .form-control {
      border: 0px solid black !important;
    }

    #form2Example17::placeholder {
      color: #009933;
    }
  </style>
</head>

<body>
  <section class="vh-100 " style="background-color: #009933;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="assets/img/img1.webp" alt="login form" class="img-fluid"
                  style="border-radius: 1rem 0 0 1rem;">
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 text-black">
                  <?php

                  if (isset($_GET["id"])) {
                    $res = mysqli_query($conn, "SELECT * FROM user WHERE id = " . $_GET["id"] . " AND recover = 1");
                    if (mysqli_num_rows($res) > 0) {
                      ?>


                      <form method="post">
                        <div class="align-items-center mb-3 pb-1">
                          <center><img src="assets/img/logo_cinef.png"></center>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Modifcation du mot de passe</h5>

                        <div class="form-outline mb-4 input">
                          <input type="password" id="form2Example17" class="form-control form-control-lg"
                            style="border: 0.5px solid black !important" name="pwd">
                          <label class="form-label" for="form2Example17">Mot de passe</label>
                        </div>
                        <div class="form-outline mb-4 input">
                          <input type="password" id="form2Example17" class="form-control form-control-lg"
                            style="border: 0.5px solid black !important" name="rpwd">
                          <label class="form-label" for="form2Example17">Confirmer le mot de passe</label>
                        </div>
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit" name='sub'>Envoyer</button>
                        </div>
                      </form>

                      <?php
                    } else {
                      header("Location: ./connexion.php");
                    }
                  } else {

                    ?>

                    <form method="post">
                      <div class="align-items-center mb-3 pb-1">
                        <center><img src="assets/img/logo_cinef.png"></center>
                      </div>

                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Réinitialisation du mot de passe</h5>
                      <small class="fw-bolder text-uppercase text-danger d-none">Les identifiants sont
                        incorrects</small><br><br>

                      <div class="form-outline mb-4 input">
                        <input type="email" id="form2Example17" class="form-control form-control-lg"
                          style="border: 0.5px solid black !important" name="mail">
                        <label class="form-label" for="form2Example17">Adresse e-mail</label>
                      </div>
                      <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block" type="submit" name='sub'>Envoyer</button>
                      </div>

                      <a class="small text-muted" href="connexion.php">Se connecter ?</a>
                    </form>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<script src="./assets/jquery-3.2.1.min.js"></script>
<script>
  (function ($) {
    $("input[type='email']").on({
      "focus": function () {
        $("label[for='form2Example17']").css({
          "background": "white"
        });
        if ($("input[type='password']").val() != "") {
          $("label[for='form2Example27']").css({
            "display": "none",
            "background": "transparent"
          });
        } else {
          $("label[for='form2Example27']").css({
            "background": "transparent"
          });
        }
      }
    })
    $("input[type='password']").on({
      "focus": function () {
        $("label[for='form2Example27']").css({
          "background": "white"
        });
        if ($("input[type='email']").val() != "") {
          $("label[for='form2Example17']").css({
            "display": "none",
            "background": "transparent"
          });
        } else {
          $("label[for='form2Example17']").css({
            "background": "transparent"
          });
        }
      }
    })
  })(jQuery)
</script>

</html>
<?php

if (isset($_POST['sub'])) {
  if (isset($_POST['mail']) && !isset($_GET["id"])) {

    mysqli_query($conn, "UPDATE user SET recover = 1 WHERE email = '" . $_POST['mail'] . "'");
    $sql = "SELECT * FROM user WHERE email = '" . $_POST['mail'] . "' AND recover=1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
      $row = mysqli_fetch_assoc($result);
      $url = $baseUrl . "/CINEFWEB/forgotPass.php?id=" . $row['id'];
      send_mail($row['email'], $row['nomP'], "", "Réinitialisation de mot de passe", "Nous avons bien reçu votre demande de réinitialisation de mot de passe. Pour procéder à cette opération, veuillez suivre les étapes ci-dessous :<br>1- Rendez-vous sur notre site web : <a href='$url' target='_blank'>Lien de réinitialisation</a>.<br>2- Saisissez le nouveau mot de passe de votre choix.<br>3- Confirmez le nouveau mot de passe.<br>4- Assurez-vous de choisir un mot de passe sécurisé, contenant au moins huit caractères, avec des lettres majuscules et minuscules, des chiffres et des caractères spéciaux.<br><br>Si vous n'êtes pas à l'origine de cette demande ou si vous rencontrez des problèmes lors du processus, n'hésitez pas à nous contacter à l'adresse <a href='mailto:info@cinef-bj.com'>info@cinef-bg.com</a>.<br><br>Cordialement,<br>L'équipe technique de CINEF SAS");

      ?>
      <script>
        location.href += "?id=<?= $row['id'] ?>"
      </script>
      <?php
    }
  } else {
    if (isset($_POST['pwd']) && isset($_POST["rpwd"])) {
      if ($_POST['pwd'] == $_POST['rpwd']) {
        mysqli_query($conn, "UPDATE user SET recover = 0, password = '" . $_POST['pwd'] . "' WHERE id = " . $_GET['id'] . " AND recover = 1");
        header("Location: ./connexion.php");
      }
    }
  }
}

?>
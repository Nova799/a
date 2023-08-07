<?php 
session_start();
include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
$sql = "SELECT * FROM user WHERE id > 1 AND role = 'admin'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
  header("Location: ../connexion.php");
} else {
  mysqli_query($conn, "INSERT INTO user (nomP, email, password, role) VALUES ('Administrateur 1', 'admin@gmail.com', 'p@s5w0rd', 'admin')");
}
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

                  <form method="post">
                    <div class="align-items-center mb-3 pb-1">
                      <center><img src="assets/img/logo_cinef.png"></center>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connectez-vous à votre compte</h5>
                    <small class="fw-bolder text-uppercase text-danger d-none">Les identifiants sont incorrects</small><br><br>

                    <div class="form-outline mb-4 input">
                      <input type="email" id="form2Example17" autocomplete="off" class="form-control form-control-lg"
                        style="border: 0.5px solid black !important" name="mail">
                      <label class="form-label" for="form2Example17">Adresse e-mail</label>
                    </div>

                    <div class="form-outline mb-4 input">
                      <input type="password" id="form2Example27" autocomplete="off" class="form-control form-control-lg"
                        style="border: 0.5px solid black !important;" name='pass'>
                      <label class="form-label" for="form2Example27">Mot de passe</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit" name='sub'>Se connecter</button>
                    </div>

                    <a class="small text-muted" href="forgotPass.php">Mot de passe oublié ?</a>
                  </form>

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

if (isset($_POST['sub']) && isset($_POST['pass']) && isset($_POST['mail'])) {
  include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
  // $conn = conn();

  $sql = "SELECT * FROM user WHERE email = '" . $_POST['mail'] . "' AND password='" . $_POST['pass'] . "'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['user'] = mysqli_fetch_assoc($result);
    header("Location: ./admin/index.php");
    ?>
    <script>
      location.href = "./admin/index.php"
    </script>
    <?php
  } else {
    ?>
    <script>
      (function ($) {
        $("small").toggleClass("d-none")
      }) (jQuery)
    </script>
    <?php
  }
}

?>
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../connexion.php");
  } else {
    if ($_SESSION["user"]["role"] != "admin") {
      header("Location: ../connexion.php");
    }
  }?>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Dashboard | User </title>

    <?php include_once('layout_link_css.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

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
                                    <h4 class="card-title">Ajouter un contact</h4>
                                    <p class="card-description">
                                        Renseignez les informations de l'utilisateur
                                    </p>
                                    <form class="forms-sample" method='POST'>
                                        <div class="d-flex">
                                            <div class="form-group">
                                                <label for="nom">Nom</label>
                                                <input required type="text" class="form-control" id="nom"
                                                    placeholder="Nom" name='nom' autocapitalize="sentences"
                                                    autocomplete="cc-family-name">
                                            </div>
                                            <div>&nbsp;</div>
                                            <div class="form-group">
                                                <label for="prenom">Pr&eacute;nom (s)</label>
                                                <input required type="text" class="form-control" id="prenom"
                                                    placeholder="Pr&eacute;nom (s)" name='prenom'>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="form-group">
                                                <label for="email">Adresse mail</label>
                                                <input required type="email" class="form-control" id="email"
                                                    placeholder="Adresse mail" name='email'>
                                            </div>
                                            <div>&nbsp;</div>
                                            <div class="form-group">
                                                <label for="phone">Contact</label>
                                                <input required type="phone" class="form-control" id="phone"
                                                    name='phone'>
                                                <input type="hidden" id="pays" name="pays">
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="form-group col-11">
                                                <label for="entreprise">Entreprise</label>
                                                <input required type="text" class="form-control" id="entreprise"
                                                    placeholder="Entreprise" name='entreprise'>
                                            </div>
                                        </div>
                                        <button type="reset" class="btn btn-light">Annuler</button>
                                        <button type="submit" id="btn" class="btn btn-success me-2"
                                            name='submit'>Soumettre</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Liste des contacts</h4>

                                    <table class='table'>
                                        <thead class='table-dark'>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nom & Prénom (s)</th>
                                                <th>Adresse mail</th>
                                                <th>Pays</th>
                                                <th>Contact</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            include("../config/conn.php");
                                            $res = mysqli_query($conn, "SELECT * FROM newsletters ORDER BY id DESC LIMIT 5");
                                            $nbr = 0;
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $nbr++;
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?= $nbr ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['nom'] . " " . $row["prenom"] ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['email'] ?>
                                                    </td>
                                                    <td>
                                                        <img src="https://flagpedia.net/data/flags/w580/<?= $row['pays'] ?>.webp" alt="" width="30px" height="30px">
                                                    </td>
                                                    <td>
                                                        <?= $row['phone'] ?>
                                                    </td>
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

                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed by CINEF
                                SAS. Copyright © 2021. All rights
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

        <?php include('layout_link_js.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
        <script>
            const input = document.querySelector("#phone");
            window.intlTelInput(input, {
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
            });
            $("#btn").on({
                "click": function () {
                    $("input[type='hidden']").val($("li.iti__country.iti__active").attr("data-country-code"));
                }
            })
        </script>


</body>

</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $pays = $_POST['pays'];
    $entreprise = $_POST['entreprise'];

    // Vérifier la connexion
    if (!$conn) {
        die("Erreur de connexion à la base de données: " . mysqli_connect_error());
    }
    // Récupérer les informations de base de données
    $query = "INSERT INTO newsletters (nom, prenom, email, phone, pays, entreprise) VALUES ('$nom', '$prenom', '$mail', '$phone', '$pays', '$entreprise')";
    mysqli_query($conn, $query);
    include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/admin/sender.php');
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
    $url = $baseUrl . "/CINEFWEB/config/activate.php?action=newsletters&email=" . $_POST['email'];
    send_mail($_POST['email'], $_POST['nom'], $_POST['prenom'], "SOUSCRIPTION AU NEWSLETTER | CINEF", "<br><br>Bienvenue parmi nous ! 🎉 Nous sommes ravis de vous avoir parmi nos abonnés.<br><br>Pour confirmer la validité de votre adresse e-mail et commencer à recevoir nos newsletters, veuillez cliquer sur le lien ci-dessous :<br><br><a href='$url'>LIEN DE CONFIRMATION</a><br><br>Nous avons hâte de vous tenir informé(e) des dernières actualités et offres spéciales.<br><br>Cordialement,<br>L'équipe CINEF");
    ?>
    <script>
        location.href = location.href;
    </script>
    <?php
}

?>
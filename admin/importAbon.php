<?php
session_start();
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
                        <div class="col-6 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Importez des utilisateurs</h4>
                                    <p class="card-description">
                                        Sélectionnez un fichier <code class="fw-bolder">.csv</code>
                                    </p>
                                    <form class="forms-sample" method='POST' enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input required type="file" class="form-control py-3" id="fichier" name='fichier'
                                                style="height:auto !important" accept=".csv">
                                        </div>
                                        <button type="reset" class="btn btn-light">Annuler</button>
                                        <button type="submit" id="btn" class="btn btn-success me-2"
                                            name='submit'>Soumettre</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-6 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Modèle de données</h4>
                                    <table class="table">
                                        <thead class="table-dark">
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Pays</th>
                                            <th>Entreprise</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>DOE</td>
                                                <td>John</td>
                                                <td>example@gmail.com</td>
                                                <td>+111 12 34 56 78</td>
                                                <td>code_pays</td>
                                                <td>Entrepise</td>
                                            </tr>
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
    if (isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] === UPLOAD_ERR_OK) {
        $file_name = $_FILES["fichier"]["name"];
        $file_tmp_name = $_FILES["fichier"]["tmp_name"];
        $file_size = $_FILES["fichier"]["size"];

        $allowed_mime_types = array('text/csv', 'application/csv', 'text/plain');
        $file_type = mime_content_type($_FILES["fichier"]["tmp_name"]);

        // Déplace le fichier téléchargé vers un emplacement permanent
        $destination = realpath($_SERVER['DOCUMENT_ROOT']) . "/CINEFWEB/assets/docs/" . $file_name;
        move_uploaded_file($file_tmp_name, $destination);

        // Lire le contenu du fichier
        $file_handle = fopen($destination, "r");
        include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
        $nbr = 0;

        // Vérifier la connexion
        if (!$conn) {
            die("Erreur de connexion à la base de données: " . mysqli_connect_error());
        }
        while (($line = fgets($file_handle)) !== false) {
            echo $nbr;
            $nbr++;
            if ($nbr > 1) {
                // Vous pouvez traiter chaque ligne ici
                $data = htmlspecialchars($line);
                $data = explode(",", $data);
                $query = "INSERT INTO newsletters (nom, prenom, email, phone, pays, entreprise) VALUES ('". $data[0]."', '". $data[1]."', '". $data[2]."', '". $data[3]."', '". $data[4]."', '". $data[5]."')";
                mysqli_query($conn, $query);
                include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/admin/sender.php');
                $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
                $url = $baseUrl . "/CINEFWEB/config/activate.php?action=newsletters&email=" . $_POST['email'];
                send_mail($_POST['email'], $_POST['nom'], $_POST['prenom'], "SOUSCRIPTION AU NEWSLETTER | CINEF", "<br><br>Bienvenue parmi nous ! 🎉 Nous sommes ravis de vous avoir parmi nos abonnés.<br><br>Pour confirmer la validité de votre adresse e-mail et commencer à recevoir nos newsletters, veuillez cliquer sur le lien ci-dessous :<br><br><a href='$url'>LIEN DE CONFIRMATION</a><br><br>Nous avons hâte de vous tenir informé(e) des dernières actualités et offres spéciales.<br><br>Cordialement,<br>L'équipe CINEF");
            }
        }
        // Récupérer les informations de base de données
        ?>
        <script>
            alert("Les utilisateurs ont été importés avec succès")
            location.href = location.href;
        </script>
        <?php
    }
}

?>
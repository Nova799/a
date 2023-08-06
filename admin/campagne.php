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
    <title>Dashboard | Admin</title>
    <link rel="stylesheet" href="css1/summernote/summernote.css">
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
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                        aria-labelledby="overview">


                                        <div class="content-wrapper">

                                            <div class="row">
                                                <div class="col-md-8 shadow rounded p-3 bg-light mx-auto">
                                                    <h3>
                                                        Message de la campagne
                                                    </h3>
                                                    <br><br>
                                                    <form class="forms-sample" method='POST'
                                                        enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputUsername1">From</label>
                                                                        <input type="email" class="form-control"
                                                                            id="exampleInputUsername1"
                                                                            placeholder="Expediteur" name='expediteur'
                                                                            value="noreply@example.com" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">To</label>
                                                                        <!-- <input type="email" class="form-control"
                                                                                id="exampleInputEmail1"
                                                                                placeholder="Destinataire" name='to'
                                                                                value="Tout le monde" readonly> -->
                                                                        <select name="to" id="" class="form-control">
                                                                            <option value="all">Tout le monde
                                                                            </option>
                                                                            <option value="confirmed">Abonnés
                                                                                confirmés</option>
                                                                            <option value="nconfirmed">Abonnés non
                                                                                confirmées</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Sujet de la
                                                                    campagne</label>
                                                                <input type="text" class="form-control"
                                                                    id="exampleInputEmail1" placeholder="Sujet"
                                                                    name='sujet' required>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Message de
                                                                    campagne</label>
                                                                <textarea cols="30" rows="10"
                                                                    placeholder='Description de la message'
                                                                    class='form-control' id='summernote'
                                                                    style="height: auto !important;"
                                                                    required></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Joindre un
                                                                    fichier</label>
                                                                <input type="file" class="form-control"
                                                                    style="height: auto;" placeholder="Sujet"
                                                                    name='fichier' accept=".png, .pdf, .jpg, .docx">
                                                            </div>
                                                            <button type="reset" class="btn btn-light">Annuler</button>
                                                            <button type="submit" class="btn btn-success me-2"
                                                                id="submit" name='submit'>Envoyer</button>
                                                    </form>

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
    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
            $("button#submit").on({
                "click": function (e) {
                    e.preventDefault();
                    var formData = new FormData();
                    formData.append('message', $('#summernote').summernote('code'));
                    formData.append('sujet', $("input[name='sujet']").val());
                    formData.append('to', $("select[name='to']").val());

                    // Ajoutez le fichier sélectionné au formData s'il en existe un
                    var fileInput = $("input[name='fichier']")[0].files[0];
                    if (fileInput) {
                        formData.append('fichier', fileInput);
                    }

                    $.ajax({
                        url: "./campagne_T.php",
                        method: "POST", // Utilisez la méthode POST pour envoyer les fichiers
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            // Traitement de la réponse du serveur en cas de succès
                            console.log(response);
                        },
                        error: function (xhr, status, error) {
                            // Traitement en cas d'erreur
                            console.error(error);
                        }
                    });
                }
            })
        });
    </script>

</body>

</html>
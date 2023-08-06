<?php 

if (!isset($_GET["action"])) {
    // header("Location: ../");
    echo "";
} else {
    if ($_GET["action"] == "newsletters" and isset($_GET["email"])) {
        include(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/config/conn.php');
        // $conn = conn();
        $res = mysqli_query($conn, "UPDATE newsletters SET confirmed = 1 WHERE email = '". $_GET['email'] . "' AND confirmed = 0");
        ?>
        
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Confirmation de mail</title>
            <link rel="stylesheet" href="../assets/css/bootstrap1.min.css">
        </head>
        <body>
            <div class="row">
                <div class="col-md-3 mx-auto rounded shadow p-5 mt-5 text-center">
                    <img src="./../assets/img/35514498_green_leaf_check_mark_box.svg" width="25%">
                    <br>
                    L'adresse mail est activé avec succès. Vous serez informez de toutes les nouveautés...
                </div>
            </div>
            <script>
                setTimeout(function () {
                    location.href = "../";
                }, 3000)
            </script>
        </body>
        </html>
        
        <?php
    }
}

?>
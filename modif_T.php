<?php

echo $_GET["id"];
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
if (isset($_GET["id"])) {
    // $conn = conn();
    
    try {
        // mysqli_query($conn, "UPDATE nom_table SET canChange = 0, missions = '" . $_GET["missions"] . "' WHERE id = " . $_GET["id"] . " AND canChange = 1 AND isChanged = 1");
        mysqli_query($conn, "UPDATE nom_table SET canChange = 0, missions = '" . $_GET["missions"] . "', formation_details = '" . $_GET["formation_details"] . "', attentes = '" . $_GET["attentes"] . "', autres_priorites = '" . $_GET["autres_priorites"] . "', objectif1 = '" . $_GET["objectif1"] . "', objectif2 = '" . $_GET["objectif2"] . "', objectif3 = '" . $_GET["objectif3"] . "' WHERE id = " . $_GET["id"] . " AND canChange = 1 AND isChanged = 1");
    } catch (Exception $e) {
        die($e->getMessage());
    }
    echo "ok";
} else if (isset($_GET["resend"])) {
    $id = $_GET["resend"];
    if (!$conn) {
        include("../config/conn.php");
        // $conn = conn();
    }
    echo $id;
    $res = mysqli_query($conn, "SELECT * FROM nom_table WHERE id = " . $id . " AND canChange = 0 AND isChanged = 0");
    mysqli_query($conn, "UPDATE nom_table SET isChanged = 1, canChange = 1 WHERE id = " . $id . " AND canChange = 0 AND isChanged = 0");
    $row = mysqli_fetch_assoc($res);
    echo $row["email"];
    if (mysqli_num_rows($res) == 1) {
        $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
        $url = $baseUrl . "/CINEFWEB/modif.php?id=" . $row['id'];
        include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/admin/sender.php');
        send_mail($row["email"], $row["nom"], $row["prenom"], "Correction nécessaire pour le formulaire soumis", "Nous avons bien reçu votre formulaire de recueil des attentes pour la formation intitulée: '<b style='text-transform: uppercase !important'>" . $row['formation'] . "</b>', et nous vous en remercions. <br>Cependant, il semblerait qu'il y ait quelques informations nécessitant une correction ou une mise à jour.<br><br>Veuillez s'il vous plaît revoir le formulaire et apporter les modifications nécessaires en cliquant sur le lien suivant :<br><a href='$url'>Lien de modification</a><br>Nous vous prions de nous renvoyer le formulaire corrigé dès que possible, avant la date limite de soumission.<br><br>Si vous avez des questions ou besoin d'assistance, n'hésitez pas à nous contacter.<br><br>Cordialement,<br>L'équipe technique de CINEF<br>");
        echo "Mail sended";
    } else {
        echo "Can't modify";
    }
}

?>
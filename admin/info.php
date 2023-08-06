<?php

include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}

$val = $_GET['q'];

if (!isset($_GET["table"])) {
    return false;
}

if ($_GET['table'] == "formulaires") {
    $sql = "SELECT * FROM nom_table WHERE formation LIKE '%$val%' OR nom LIKE '%$val%' OR entite LIKE '%$val%' OR missions LIKE '%$val%'";
} else if ($_GET['table'] == "newsletters") {
    $sql = "SELECT * FROM newsletters WHERE nom LIKE '%$val%' OR prenom LIKE '%$val%' OR email LIKE '%$val%' OR phone LIKE '%$val%'";
} else if ($_GET['table'] == "campagne") {
    $sql = "SELECT * FROM campagne WHERE dest LIKE '%$val%' OR sujet LIKE '%$val%' OR message LIKE '%$val%' OR dteTime LIKE '%$val%'";
}


$req = mysqli_query($conn, $sql);

$data = '{"data": [';

$nbr = 0;
if (mysqli_num_rows($req) > 0) {
    while ($row = mysqli_fetch_assoc($req)) {
        $nbr += 1;
        if ($_GET['table'] == "formulaires") {
            $data = (mysqli_num_rows($req) == $nbr) ? '{"id": "' . $row["id"] . '", "nom": "' . $row["nom"] . '", "entite": "' . $row["entite"] . '", "formation": "' . $row["formation"] . '"}' : '{"id": "' . $row["id"] . '", "nom": "' . $row["nom"] . '", "entite": "' . $row["entite"] . '", "formation": "' . $row["formation"] . '"},';
        } else if ($_GET['table'] == "newsletters") {
            if ($row['confirmed']) {
                $color = "success";
            } else {
                $color = "danger";
            }
            $data = (mysqli_num_rows($req) == $nbr) ? '{"id": "' . $row["id"] . '", "nom": "' . $row["nom"] . '", "prenom": "' . $row["prenom"] . '", "phone": "' . $row["phone"] . '", "email": "' . $row["email"] . '", "confirmed": "' . $color . '"}' : '{"id": "' . $row["id"] . '", "nom": "' . $row["nom"] . '", "prenom": "' . $row["prenom"] . '", "phone": "' . $row["phone"] . '", "email": "' . $row["email"] . '", "confirmed": "' . $color . '"},';
        } else if ($_GET['table'] == "campagne") {
            if ($row['dest'] == "all") {
                $dest = "Tout le monde";
            } else if ($row['dest'] == "confirmed") {
                $dest = "Abonnés confirmés";
            } else if ($row['dest'] == "nconfirmed") {
                $dest = "Abonnés non confirmés";
            }
            $data = (mysqli_num_rows($req) == $nbr) ? '{"id": "' . $row["id"] . '", "dest": "' . $dest . '", "sujet": "' . $row["sujet"] . '", "dteTime": "' . $row["dteTime"] . '"}' : '{"id": "' . $row["id"] . '", "dest": "' . $dest . '", "sujet": "' . $row["sujet"] . '", "dteTime": "' . $row["dteTime"] . '"},';
        }

    }
    $data .= ']}';
} else {
    $data = '{"empty": "AUCUNE DONNÉES DISPONIBLE"}';
}


echo $data;
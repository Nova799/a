<?php

include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
if (isset($_POST)) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $ddebut = $_POST['ddebut'];
    $hdebut = $_POST['hdebut'];
    $dfin = $_POST['dfin'];
    $hfin = $_POST['hfin'];
    $everyYear = $_POST['everyYear'];

    mysqli_query($conn, "INSERT INTO agenda (`name`, `description`, `ddebut`, `hdebut`, `dfin`, `hfin`, `type`, `everyYear`) VALUES ('$title', '$desc', '$ddebut', '$hdebut', '$dfin', '$hfin', 'event', 0)");
}
$req = mysqli_query($conn, "SELECT * FROM agenda");
$data = '{"data": [';
$nbr = 0;
if (mysqli_num_rows($req) > 0) {
    while ($row = mysqli_fetch_assoc($req)) {
        $nbr += 1;
        $data .= (mysqli_num_rows($req) == $nbr)
            ? '{"id": "' . $row["id"] . '", "name": "' . $row["name"] . '", "description": "' . $row["description"] . '", "date": ["' . $row["ddebut"] . '", "'. $row["dfin"] .'"], "type": "event"}'
            : '{"id": "' . $row["id"] . '", "name": "' . $row["name"] . '", "description": "' . $row["description"] . '", "date": ["' . $row["ddebut"] . '", "'. $row["dfin"] .'"], "type": "event"},';
    }
    $data .= ']}';
} else {
    $data = '{"empty": "AUCUNE DONNÉES DISPONIBLE"}';
}
echo $data;

?>
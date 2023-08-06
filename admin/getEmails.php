<?php

include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
$data = '{"emails": [';
$res = mysqli_query($conn, "SELECT DISTINCT email FROM nom_table WHERE email <> ''");
while ($row = mysqli_fetch_assoc($res)) {
    if (!strpos($data, $row['email']) !== false) {
        $data .= '"' . $row['email'] . '",';
    }
}
$res = mysqli_query($conn, "SELECT DISTINCT email FROM user WHERE email <> ''");
while ($row = mysqli_fetch_assoc($res)) {
    if (!strpos($data, $row['email']) !== false) {
        $data .= '"' . $row['email'] . '",';
    }
}
$res = mysqli_query($conn, "SELECT DISTINCT email FROM newsletters WHERE email <> ''");
while ($row = mysqli_fetch_assoc($res)) {
    if (!strpos($data, $row['email']) !== false) {
        $data .= '"' . $row['email'] . '",';
    }
}
$data = rtrim($data, ",");
echo $data . ']}';

?>
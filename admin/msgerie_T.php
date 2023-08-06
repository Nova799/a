<?php
var_dump($_POST);
var_dump($_FILES);
$subject = $_POST["sujet"];
$message = $_POST["message"];
$to = $_POST["to"];
echo "message = " . $message;

include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/admin/sender.php');
$conn = conn();
$attachmentFilePath = ''; // Définir une valeur par défaut pour éviter une erreur si aucun fichier n'est téléchargé

if (isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] === UPLOAD_ERR_OK) {
    $tmpFilePath = $_FILES["fichier"]["tmp_name"];
    $uploadDir = realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/assets/docs/';
    $filename = $_FILES["fichier"]["name"];
    $attachmentFilePath = $uploadDir . $filename;
    if (move_uploaded_file($tmpFilePath, $attachmentFilePath)) {
        send_mail($to, $nom, $prenom, $subject, $message, $attachmentFilePath);
    }
} else {
    send_mail($to, $nom, $prenom, $subject, $message);
}
?>
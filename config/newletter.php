<?php
require (realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/config/conn.php');
require (realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/admin/sender.php');


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['phone'])) {
    include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');
    // $conn = conn();
    if ((!(empty($_POST['nom']))
        && strlen($_POST['nom'])>0
        && preg_match("#^[A-Za-z '-]+$#", $_POST['nom'])
        && !(empty($_POST['email']))
        && preg_match( "#^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,7}$#", $_POST['email'])) 
        && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) 
        {
            mysqli_query($conn, "INSERT INTO newsletters(nom, prenom, email, phone) VALUES ('" . $_POST['nom'] . "', '" . $_POST['prenom'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "')");
            echo "Un mail de confirmation a été envoyé dans votre boîte mail";
            $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
            $url = $baseUrl . "/CINEFWEB/config/activate.php?action=newsletters&email=" . $_POST['email'];
            send_mail($_POST['email'], $_POST['nom'], $_POST['prenom'], "SOUSCRIPTION AU NEWSLETTER | CINEF", "<br><br>Bienvenue parmi nous ! 🎉 Nous sommes ravis de vous avoir parmi nos abonnés.<br><br>Pour confirmer la validité de votre adresse e-mail et commencer à recevoir nos newsletters, veuillez cliquer sur le lien ci-dessous :<br><br><a href='$url'>LIEN DE CONFIRMATION</a><br><br>Nous avons hâte de vous tenir informé(e) des dernières actualités et offres spéciales.<br><br>Cordialement,<br>L'équipe CINEF");
        }
        else {
            echo " Un champ a ete mal renseigne ";
            return ;
        }
} else {

    echo "Une erreur s'est produite";

}

?>
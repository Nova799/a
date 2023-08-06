<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="content-type" content="text/xml;charset=UTF-8" />

<head>
  <title>SOUSCRIPTION AU NEWSLETTER</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</head>

<script src="https://cdn.tailwindcss.com/"></script>
<section class="relative flex flex-wrap lg:h-screen lg:items-center pt-0 ">
  <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
    <div class="mx-auto text-center" style="max-width: 40rem !important;">
      <img src="./admin/images/logo_cinef.png" width='30%' class="mx-auto" />
      <h1 class="text-2xl font-bold sm:text-3xl text-green-700 ">Abonnement au newsletter</h1>

      <p class="mt-4 text-gray-500">
        Ce formulaire, bien renseigné, vous permettra d'êtres au courant des actualités de CINEF SAS.
      </p>
      <p class="mt-4 text-red-600">
      </p>
    </div>

    <form method="POST" class="mx-auto mt-8 mb-0 space-y-4" style="max-width: 35rem !important;">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Nom
          </label>
          <input required name="nom"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-last-name" type="text" placeholder="AMOUR DE VIGNE">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Prénom(s)
          </label>
          <input required name="prenom"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            id="grid-first-name" type="text" placeholder="Janne">

        </div>

      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            E-mail
          </label>
          <input required name="email"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            id="grid-first-name" type="email" placeholder="exemple@exemple">

        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Téléphone
          </label>
          <input required name="phone" id="phone"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            type="tel">
          <input type="hidden" name="pays" id="pays">
        </div>


      </div>
      <div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
          Entreprise
        </label>

        <div class="relative">
          <input required name="entreprise" type="text"
            class="w-full rounded-lg  p-4 pr-12 text-sm shadow-sm border border-gray-500 bg-gray-200 text-gray-700"
            placeholder="CINEF SAS, EDF, MOBILIS, ..." />


        </div>
      </div>



      <div class="flex items-center justify-between">
        <p class="text-sm text-gray-500 text-red-600 ">
          Merci de <u><a href="https://www.cinef-bj.com/formations/docs/catalogue_cinef_2023_2024.pdf" target="_blank" download>télécharger notre catalogue</a></u> 2023-2024<br>

          Tél.:+229 63 18 60 60 !<br> E-mail: info@cinef-bj.com ! <br>


        </p>

        <button type="submit" name="submit" id="btn"
          class="ml-3 inline-block rounded-lg bg-green-700 px-5 py-3 text-sm font-medium text-white">
          Soumettre
        </button>
      </div>
    </form>

  </div>

  <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
    <img alt="Welcome" src="./assets/img/newsletter.gif" class="absolute inset-0 h-full w-full object-cover" />

  </div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
  echo "dddd";
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mail = $_POST['email'];
  $phone = $_POST['phone'];
  $pays = $_POST['pays'];
  $entreprise = $_POST['entreprise'];
  include(realpath($_SERVER["DOCUMENT_ROOT"]) . '/CINEFWEB/config/conn.php');

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
    $("#btn").parent().replaceWith("<marquee style='font-weight: bolder;text-transform: uppercase;color: orangered;'>Consultez votre mail, activez votre compte et soyez au parfum de nos actualités</marquee>")
  </script>
  <?php
}
?>
<?php
$BD = new PDO('msql:host=localhost;dbname=ges_rdv','root','');

$connexion = $BD->prepare('INSERT INTO secretaire VALUES (NULL, :prenom_sec, :nom_sec, :dn_sec, :service_sec, :pseudo_sec, :mdp_sec,)');

$connexion->bindValue(":prenom", $_POST['prenom_sec'],PDO::PARAM_STR);
$connexion->bindValue(":nom_sec", $_POST['nom_sec'],PDO::PARAM_STR);
$connexion->bindValue(":dn_sec", $_POST['dn_sec'],PDO::PARAM_STR);
$connexion->bindValue(":service_sec", $_POST['service_sec'],PDO::PARAM_STR);
$connexion->bindValue(":pseudo_sec", $_POST['pseudo_sec'],PDO::PARAM_STR);
$connexion->bindValue(":mdp_sec", $_POST['mdp_sec'],PDO::PARAM_STR);

$insert = $connexion->execute();

if ($insertOK) {
    $message='Creation de compte réussi avec succés !';
}
else {
    $message='Erreur lors de la creation du compte !';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création compte secrétaire</title>
    
    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../../images/favicon/site.webmanifest">
    
    <!-- Bulma Version 0.7.5-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />

    <!-- CSS, Fontawesome & Google Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <div class="navbar-item">
          <img src="../../../images/logo.png">
          <p>Wergui Yaram | RDV</p>
        </div>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        
        <div class="navbar-end is-info">
          <a class="navbar-item">
            <strong>Deconnexion</strong>
          </a>
        </div>
      </div>
    </nav>

    <p><?php echo $message; ?></p>

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                  <p>
                      <div><img src="../../../images/logo.png"></div><br>
                      <strong>Wergui Yaram | RDV</strong> par <a href="https://github.com/daooda-galsen-dev" target="_blank">Daooda</a>.
                      <br>© 2019
                  </p>
                  <a href="https://github.com/daooda-galsen-dev/wergui-yaram-RDV" target="_blank">                   
                          <i class="fab fa-github-alt"></i>
                  </a>
            </div>
        </div>
    </footer>

    <script async type="text/javascript" src="../../../js/bulma.js"></script>
</body>

</html>
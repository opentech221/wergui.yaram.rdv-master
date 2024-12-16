<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Propos</title>
    
    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">
    
    <!-- Bulma Version 0.7.5-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />

    <!-- CSS, Fontawesome & Google Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="../../index.php">
          <img src="../images/logo.png">
          <p>Wergui Yaram | RDV</p>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        
        <div class="navbar-end is-info">
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              <strong>Se connecter</strong>
            </a>
            <div class="navbar-dropdown is-boxed">
              <a class="navbar-item" href="admin/admin.php">
                <strong>Admin</strong>
              </a>
              <a class="navbar-item" href="medecin/medecin.php">
                <strong>Médecin</strong>
              </a>
              <a class="navbar-item" href="secretaire/secretaire.php">
                <strong>Secrétaire</strong>
              </a>
            </div>
          </div>
          <a class="navbar-item" href="#">
            <strong>A propos</strong>
          </a>
          <a class="navbar-item" href="contact.php">
            <strong>Contact</strong>
          </a>
        </div>
      </div>
    </nav>

    <section class="hero is-info is-medium">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Wergui Yaram | RDV
          </h1>
          <h2 class="subtitle">
            <br>
            Il s'agit d'une solution de gestion de rendez-vous pour hôpital.<br>
            Une application qui est un mixe entre efficacité, qualité, performance et rapidité.<br>
            <br>
            Avec une utilisation simple et intuitif, un secrétaire aura la possibilité de gérer<br>
            les rendez-vous des patients selon des critéres bien précis.
          </h2>
        </div>
      </div>
    </section>

    <footer class="footer">
          <div class="container">
            <div class="content has-text-centered">

                <p>
                    <div><img src="../images/logo.png"></div><br>
                    <strong>Wergui Yaram | RDV</strong> par <a href="https://github.com/daooda-galsen-dev" target="_blank">Daooda</a>.
                    <br>© 2019
                </p>
                <a href="https://github.com/daooda-galsen-dev/wergui-yaram-RDV" target="_blank">                   
                        <i class="fab fa-github-alt"></i>
                </a>
            </div>
          </div>
    </footer>
    
    <script async type="text/javascript" src="../js/bulma.js"></script>

</body>

</html>

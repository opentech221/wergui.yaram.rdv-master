<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    
    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../images/favicon/site.webmanifest">
    
    <!-- Bulma Version 0.7.5-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />

    <!-- CSS, Fontawesome & Google Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <div class="navbar-item">
          <img src="../../images/logo.png">
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


    <section class="section startups has-text-centered">
      <div class="container is-narrow">
      <div style="font-size:16px; font-weight:bold;" class="notification is-info">
        Bonjour Admin
      </div>
        <div class="startup-grid">
          <div class="columns is-centered level">
            <div class="column level-item">
              <div class="box"><img class="logo" src="../../images/secretaire.png"><br>
                <a style="font-size:16px; font-weight:bold;" class="button is-info is-outlined is-rounded" href="secretaire/menu.php">SECRÉTAIRE</a>
              </div>
            </div>
            <div class="column level-item">
              <div class="box"><img class="logo" src="../../images/docteur.png"><br>
                <a style="font-size:16px; font-weight:bold;" class="button is-info is-outlined is-rounded" href="medecin/menu.php">MÉDECIN</a>
              </div>
            </div>
            <div class="column level-item">
              <div class="box"><img class="logo" src="../../images/patient.png"><br>
                <a style="font-size:16px; font-weight:bold;" class="button is-info is-outlined is-rounded" href="patient/menu.php">PATIENT</a>
              </div>
            </div>
            <div class="column level-item">
              <div class="box"><img class="logo" src="../../images/planning.png"><br>
                <a style="font-size:16px; font-weight:bold;" class="button is-info is-outlined is-rounded" href="planning/menu.php">PLANNING</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section startups has-text-centered">
      <div class="container is-narrow">
        <div class="startup-grid">
          <div class="columns is-centered level">
            <div class="column level-item">
              <div class="box"><img class="logo" src="../../images/rdv.png"><br>
                <a style="font-size:16px; font-weight:bold;" class="button is-info is-outlined is-rounded" href="rdv/menu.php">RENDEZ-VOUS</a>
              </div>
            </div>
            <div class="column level-item">
              <div class="box"><img class="logo" src="../../images/services.png"><br>
                <a style="font-size:16px; font-weight:bold;" class="button is-info is-outlined is-rounded" href="service/menu.php">SERVICES</a>
              </div>
            </div>
            <div class="column level-item">
              <div class="box"><img class="logo" src="../../images/specialite.png"><br>
                <a style="font-size:16px; font-weight:bold;" class="button is-info is-outlined is-rounded" href="specialite/menu.php">SPÉCIALITÉ</a>
              </div>
            </div>
            <div class="column level-item">
              <div class="box"><img class="logo" src="../../images/parametres.png"><br>
                <a style="font-size:16px; font-weight:bold;" class="button is-info is-outlined is-rounded" href="parametres/menu.php">PARAMÈTRES</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
          <div class="container">
            <div class="content has-text-centered">

                <p>
                    <div><img src="../../images/logo.png"></div><br>
                    <strong>Wergui Yaram | RDV</strong> par <a href="https://github.com/daooda-galsen-dev" target="_blank">Daooda</a>.
                    <br>© 2019
                </p>
                <a href="https://github.com/daooda-galsen-dev/wergui-yaram-RDV" target="_blank">                   
                        <i class="fab fa-github-alt"></i>
                </a>
            </div>
          </div>
    </footer>
    
    <script async type="text/javascript" src="../../js/bulma.js"></script>
</body>

</html>

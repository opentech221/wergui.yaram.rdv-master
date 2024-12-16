<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion | Secrétaire</title>
    
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
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Connectez-vous</h3>
                    <p class="subtitle has-text-grey">Veuillez vous connecter pour continuer.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="../../images/secretaire.png" height="128" width="128">
                        </figure>
                        <form>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" name="psd-sct" type="text" placeholder="Entrer votre pseudo" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" name="mdp-sct" type="password" placeholder="Entrer votre mot de passe">
                                </div>
                            </div>
                            
                            <button class="button is-block is-info is-large is-fullwidth">Se connecter</button>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="../help.php">Besoin d'aide ?</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../../js/bulma.js"></script>
</body>

</html>
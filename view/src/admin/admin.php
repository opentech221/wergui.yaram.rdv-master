<?php
session_start();
include_once('../../../model/includes.php');

if(!empty($_POST)){
	extract($_POST);
	$valid = true;	
	
	if(empty($pseudo)){
		$valid = false;
		$error_pseudo = "Veuillez renseigner votre pseudo !";
    }
	
	if(empty($mdp)){
		$valid = false;
		$error_password = "Veuillez renseigner votre mot de passe !";
	}
	
	$req = $DB->query('SELECT * FROM admins WHERE pseudo = :pseudo AND mdp = :mdp', array('pseudo' => $pseudo, 'mdp' => $mdp));
	$req = $req->fetch();
		
	if(!$req['pseudo'] && !$req['mdp']){
		$valid = false;
		$error2 = "Votre pseudo ou mot de passe ne correspondent pas";
	}
	
	if($valid){
		$_SESSION['id_admin'] = $req['id_admin'];
		$_SESSION['pseudo'] = $req['pseudo'];
		$_SESSION['mdp'] = $req['mdp'];
		
		$_SESSION['flash']['info'] = "Bonjour " . $_SESSION['pseudo'];
		header('Location: admin-pannel.php');
		exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion | Admin</title>
    
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
                    <p class="subtitle has-text-grey">Bonjour Admin<br>veuillez vous connecter pour continuer.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="../../images/admin.png" height="128" width="128">
                        </figure>
                        <form method="POST" action="">
                            <div class="field">
                                <div class="control">
                                    <input name="pseudo" class="input is-large" type="text" placeholder="Entrer votre pseudo" autofocus="">
                                </div>
                            </div>
                            <?php
							    if(isset($error_pseudo)){
								    echo '<font color="red" weight="bold">'.$error_pseudo."</font><br/>";
							    }
						    ?>

                            <div class="field">
                                <div class="control">
                                    <input name="mdp" class="input is-large" type="password" placeholder="Entrer votre mot de passe">
                                </div>
                            </div>
                            <?php
							    if(isset($error_password)){
								    echo '<font color="red" weight="bold">'.$error_password."</font><br/>";
							    }	
						    ?>
                            
                            <input name="valid" type="submit" value="Se connecter" class="button is-block is-info is-large is-fullwidth" >
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../../js/bulma.js"></script>
</body>

</html>

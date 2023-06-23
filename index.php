<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon-16x16.png">
    <link rel="stylesheet" href="../css/reboot.css">
   
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Exo:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    
    <title>CV développeuse web -  Karine Erlhaine Ollivier </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">    
    <link rel="stylesheet" href ="./css/styles.css">
</head>
<body>
    <div id="top-content"></div>
    <header id="section-header" class="section-header mb-30 clearfix">
    <nav id="navbar-main" class="navbar navbar-expand-xl navbar-dark bg-dark navbar-main">
    <a class="navbar-brand" href="#section-header">
        <h1 class="headingPrimary"> 
        <small class="text-muted"> Hey! i'm Eko 👋 </small>
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> 
    <div id="navbar" class="collapse navbar-collapse justify-content-end">
			<ul class="navbar-nav">
				<li class="nav-item active"><a href="#">Accueil</a></li>
				<li class="nav-item"><a href="#">Compétences</a></li>
				<li class="nav-item"><a href="#">Expériences</a></li>
				<li class="nav-item"><a href="#">portfolio</a></li>
                <li class="nav-item"><a href="#">Loisirs</a></li>
                <li class="nav-item"><a href="#">contact</a></li>

			</ul>
    </div>
		</nav>
    </header>

	<main>
		<div class="Bio">
            <img class="imageProfil" src="./images/peacefully reading.png" alt="sticker Eko" width="600px" height="400px">
            <article class="AboutSection">
                <h2 class="hi"> Bonjour </h2>
                <p class="name">
                Je suis Karine  </p>
                <small class="position mb-30">&amp; je travaille dans le monde du web</small>
				<a href="#" download>Télécharger mon CV</a>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 hexagon-right">
                    <div class="hexagon">
                        <div class="hexTop"></div>
                        <div class="hexBottom"></div>
                         <a href="#contact" class="custom-btn-lg">
                         <i class="fa fa-comment-dots" aria-hidden="true"></i>
                        </a>

        <div class="contact">
                <h2>Informations de contact</h2>
                <div class="contact-flex">
                <p>Nom : </p>
                <p>Karine E. Ollivier</p>
            </div>
            <div class="contact-flex">
                <p>Adresse : </p>
                <p>La Montagne <br> 
                22340 Maël-Carhaix
                </p>
            </div>
            <div class="contact-flex">
                <p>Téléphone :</p>
                <p>07 80 25 93 36</p>
            </div>
            <div class="contact-flex">
                <p>Mail : </p>
                <p><a href="mailto:karine.ollivier@oclock.school">karine.ollivier@oclock.school</a></p>
            </div>
            
           </article>
        </div>
	<section>
        
        <!--<h2>Expériences professionnelles</h2>
        <div class="exp"> ici une image d'un logo cliquable de chaque expérience-->
          <div class="competences">
                    <h2>Hard Skills</h2>
                    <h3 class="h3gauche">Professionnelles</h3>
                    <div class="comp">
                <p>HTML / CSS</p>
                <div class="conteneur-barre"><span class="barre c100"></span></div>
            </div>
            <div class="comp">
                <p>Integration web</p>
                <div class="conteneur-barre"><span class="barre c95"></span></div>
            </div>
            <div class="comp">
                <p>Developpement FrontEnd</p>
                <div class="conteneur-barre"><span class="barre c90"></span></div>
            </div>
            <div class="comp">
                <p>Developpement BackEnd</p>
                <div class="conteneur-barre"><span class="barre c100"></span></div>
            <div class="comp">
                <p>Gestion de projet numérique</p>
                <div class="conteneur-barre"><span class="barre c105"></span></div>
            </div>
        <h3 class="h3gauche">Soft Skills</h3>
        <div class="comp2">
            <p>Créativité</p>
            <p>90%</p>
            <div class="conteneur-barre2"><span class="barre c90"></span></div>
        </div>
        <div class="comp2">
            <p>Adaptation</p>
            <p>85%</p>
            <div class="conteneur-barre2"><span class="barre c85"></span></div>
            </div>
            <div class="comp2">
            <p>Sérieux</p>
            <p>95%</p>
            <div class="conteneur-barre2"><span class="barre c95"></span></div>
        </div>
        <div class="comp2">
            <p>Pédagogie</p>
            <p>95%</p>
            <div class="conteneur-barre2"><span class="barre c95"></span></div>
        </div>

    </section>
    <section>
        <h2>Centres d'intérêt</h2>
        <figure class="interet">
            <img src="./images/painting.png" alt="painting">
            <figcaption>painting</figcaption>
        </figure>
        <figure class="interet">
            <img src="./images/waving doorway.png" alt="Cuisine">
            <figcaption>Cuisine</figcaption>
        </figure>
        <figure class="interet">
            <img src="./images/clindoeil.png" alt="Littérature">
            <figcaption>Littérature</figcaption>
        </figure>
        <figure class="interet">
            <img src="./images/laptop wave.png" alt="Gaming">
            <figcaption>Jeux vidéos</figcaption>


        <div class="portfolio">
            <h2>Mon Portfolio :</h2>
        </div>
	
	<footer id="contact" class="contactEko">
        <p class="textfooter">
            have any question? <br>
            <a class="mailStyle" href="karine.ollivier@oclock.school">
                Say Hello 👋
            </a>
        </p>
        <div class="formulaire">
            <form action="my-handling-form-page" method="post">
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div>
                    <label for="mail">e-mail&nbsp;:</label>
                    <input type="email" id="mail" name="user_mail">
                </div>
                <div>
                    <label for="msg">Message :</label>
                    <textarea id="msg" name="user_message"></textarea>
                </div>
                
            </form>

            <div class= "is-content">
             
            <a class="email-link" href ="mailto:karine.ollivier@oclock.school">karine.ollivier@oclock.school</a>

            </div>

        </div>
        <footer>
    <div class="container-fluid">
        
        <div class="row justify-content-center text-center">
            <div class="col-6 social-networks">
               
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-share"></i></a></li>
                </ul>
            </div>
        </div>
        
        <div class="row justify-content-center text-center">
            <div class="col-9 links">
                <!-- Je créé une liste: https://getbootstrap.com/docs/5.0/components/list-group/ -->
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="page.php"> pour me joindre</a></li>
                    <li class="list-inline-item"><a href="page.php">Qui est Eko ?</a></li>
                    <li class="list-inline-item"><a href="page.php">Mentions légales</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </footer>
    
        
		<p> Copyright © By Eko 2023 </p>
	</footer>

	</main>
       
    
</body>
</html>
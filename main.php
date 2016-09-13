<!DOCTYPE html>
<html>
	<head>
		<title>Site test</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="./ressources/main.css">
	</head>
	<body>
	    <div class="content">
	    <header>
	        <img src='./images/logo.png'>
	        <h1> P-Discount </h1>
	        <div class='slogan'>
	            <p> "Vous n'en trouverez jamais d'aussi grosses" </p>
	        </div>
	        <?php if(!isset($_SESSION['pseudo'])):?>
	        <a href="index.php?page=connection"><div class='connection'>
	        <p> Connection </p>
	        <?php elseif (isset($_SESSION['pseudo'])):?>
	        <a href="index.php?page=logout"><div class='connection'>
	        <p> Logout </p>
	        <?php endif;?>
	        </div></a>
	        <a href="index.php?page=panier"><div class='panier'>
	            <p> Panier </p>
	        </div></a>
	    </header>
	    <nav>
            <ul class="n1">
            <li><a href="index.php?page=index"> Accueil </a></li>
            <li>Produits
                <ul class="n2">
                <li><a href="index.php?page=geantes">Planetes geantes</a></li>
                <li><a href="index.php?page=naines">Planetes naines</a></li>
                <li><a href="index.php?page=lointaines">Planetes lointaines</a></li>
                </ul>
            </li>
            <li><a href="index.php?page=support"> Contact </a></li>
            <li><a href="index.php?page=faq"> FAQ </a></li>
            </ul>
            <div id="searchbar">
                <form method="post" action="index.php?page=search">
                <input class="champ" type="text" name="search" value="Search..."/>
                <input type="submit" value="Rechercher">
                </form>
            </div>
        </nav>
	    <a href="https://www.facebook.com/pages/Shinra/413801605435759?ref=hl" target="blank"><div class='facebook'>
	    </div></a>
	     <a href="https://twitter.com/Shinra_Galaxy" target="blank"><div class='twitter'>
	    </div></a>
	    <div class="partenaires">
	    <marquee behavior="scroll" scrollamount="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()">
	        <p>Nos Partenaires:</p>
	        <p><a href="http://www.nasa.gov/"> NASA</a></p>
	        <p><a href="http://www.un.org/fr/"> ONU</a></p>
	        <p> <a href="http://www.wto.org/indexfr.htm">W.T.O</a></p>
	        <p><a href="http://www.epo.org/">E.P.O </a></p>
	    </marquee>
	    </div>
	    <div class='panier2'> <h2><center> panier </center></h2>
	    </div>
	    <a href="index.php?page=support"><div class="support">
	    </div></a>
        <?php
		echo $content;
	    ?>
	    </div>
	    <footer>
	        <p> Copyright P-Discount, all rights reserved - 2014 - Contact: support@p-discount.fr </p>
	    </footer>
    </body>
</html>
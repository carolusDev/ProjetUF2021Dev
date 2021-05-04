<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" href="img/Image1.png" />
    <title>OTRAG</title>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>

<body>
<nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong>OTRAG</strong></div>
    <ul class="links">
        <li><a href="#actualites">Gestion équipes</a></li>
        <li><a href="#classementGeneral">Gestion sessions</a></li>
        <li><a href="#meConnecter">Modifier compte</a></li>
        <li><a href="#meConnecter">Me déconnecter</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
</nav>

@yield('homePage')

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Liens</h4>
                <ul>
                    <li><a href="#">Gestion équipes</a></li>
                    <li><a href="#">Gestions sessions</a></li>
                    <li><a href="#">Modifier comptes</a></li>
                    <li><a href="#">Me déconnecter</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Informatons légales</h4>
                <ul>
                    <li><a href="#">Conditions particulières de vente</a></li>
                    <li><a href="#">Mentions légales</a></li>
                    <li><a href="#">Protection de la vie privée</a></li>
                    <li><a href="#">Information sur les cookies</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>La société</h4>
                <ul>
                    <li><a href="#">2021 JMB Voyages</a></li>
                    <li><a href="#">10 rue Alexandre III 21000 Dijon</a></li>
                    <li><a href="#">Tel : 03 80 44 91 00</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Nos réseaux</h4>
                <div class="social-links">
                    <a href="#"><img src="img/facebook_108044.png" alt="facebook icone"/></a>
                    <a href="#"><img src="img/instagram_108043.png" alt="instagram icone"/></a>
                    <a href="#"><img src="img/youtube_108041.png" alt="youtube icone"/></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>

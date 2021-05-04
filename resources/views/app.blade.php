@extends('index')

@section('homePage')    
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContentContainer">
        <h2 class="titlePresentation" >Présentation de l'entreprise</h2>
        <hr class="subTitlePresentation" ></hr>
        <p class="textPresentation">Depuis plus de 7 ans, On The Road A Game organise des voyages qui mêlent mystères, jeux, 
            aventures et surtout rencontres humaines et culturelles. 
            Le concept unique de On The Road A Game permet à ses participants de revenir aux origines 
            du voyage : la découverte des autres.
            Lorsqu’un voyageur se lance dans une session de On The Road a Game, il ne sait pas où il va. 
            Aucune préparation ou anticipation possible. Il en sait juste assez pour savoir quel type de 
            vêtements emporter dans son sac à dos…
            Il s’agit donc d’un véritable voyage-mystère, couplé à un jeu entre équipes qui vient 
            pimenter cette expérience hors du commun.</p>
    </div>
    <div class="subContentContainer">
        <img class="presentationPicture" src="img/OTR-Entete.jpg" alt="on the road a game main picture"/>
    </div>
    <div class="subContentContainer">
        <img class="presentationPicture" src="img/122217956_3437454263004745_427985025325149256_n.jpg" alt="key on wood table"/>
    </div>
    <div class="subContentContainer">
        <h2 class="titlePresentation">Présentation de l'entreprise</h2>
        <hr class="subTitlePresentation" ></hr>
        <p class="textPresentation">On participe à On The Road a Game en équipe de 2 personnes, il n’y a pas d’élimination. 
            Toutes les équipes sont assurées d’aller au bout de l’aventure et donc d’en profiter au 
            maximum.
            L’équipe gagnante est déterminée sur la base de défis à relever et d’un budget à (ne pas)
            dépenser.
            Au départ du jeu, une série de défis est proposée aux équipes. Le nombre de points
            attribués dépend de la difficulté du défi. A elles, donc, de trouver le juste équilibre entre le
            nombre et le degré de difficulté des défis qu’elles pensent pouvoir relever.
            A cela, s’ajoute une gestion budgétaire. 
            Chaque équipe démarre le jeu avec une enveloppe limitée. Et chaque Euro ramené à 
            l’arrivée permet de décrocher des points bonus.
            La somme excédentaire totale récoltée à l’issue du jeu est reversée à une association
            caritative, choisie par l’équipe gagnante.</p>
    </div>
</div>
@endsection



@section('actualites')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContainerArticle">
        <hr class="hrTextArticle" ></hr>
            <div class="textContainerArticle">
                <p class="textPresentation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aenean sed adipiscing diam donec adipiscing tristique. Odio morbi quis commodo odio. Amet nisl suscipit adipiscing bibendum est ultricies integer. Feugiat vivamus at augue eget arcu dictum. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Non consectetur a erat nam at. Dui nunc mattis enim ut tellus elementum sagittis vitae. Ullamcorper morbi tincidunt ornare massa. Neque egestas congue quisque egestas. Maecenas accumsan lacus vel facilisis volutpat est velit egestas.</p>
            </div>
            <div class="dateContainerArticle">
                <p>15 décembre 2020 à 18h07</p>
            </div>
        <hr class="hrTextArticle" ></hr>
    </div>
</div>
@endsection



@section('classementGeneral')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContainerClassement">
        <p class="positionClassement">1</p>
        <p class="teamNameClassement">Super Nom de team</p>
        <p class="pointsClassement">45 pts</p>
        <p class="moneyLeftClassement">25 €</p>
    </div>
</div>
@endsection



@section('connexion')
    <div class="ImHereForSpace"></div>
    <div class="contentContainer">
        <div class="subContainerConnexion">
            <div class="connexionPhotoContainer">
                <img class="connexionPicture" src="img/pexels-janiere-fernandez-2829336.jpg" alt="on the road a game connexion picture"/>
            </div>
            <div class="inputConnexionContainer">
                <form action="/my-handling-form-page" methode="post">
                    <div class="connexionEmailContainer">
                        <label class="labelConnexion">Email :</label>
                        <input class="connexionInput" type="email" value="Votre Email ..." required/>
                    </br>
                    </div>
                    <div class="connexionMotDePasseContainer">
                        <label class="labelConnexion">Mot de passe :</label>
                        <input class="connexionInput" type="password" required/>
                    </div>
                </form>
                <div class="connexionPhotoContainerSmartphone">
                    <img class="connexionPictureSmartphone" src="img/pexels-janiere-fernandez-2829336.jpg" alt="on the road a game connexion picture"/>
                </div>
            </div>
        </div>
    </div>
@endsection
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
                        <input class="connexionInput" type="email" required/>
                    </br>
                    </div>
                    <div class="connexionMotDePasseContainer">
                        <label class="labelConnexion">Mot de passe :</label>
                        <input class="connexionInput" type="password" required/>
                    </div>
                    <div class="boutonInscriptionContainer">
                        <input class="BoutonInscription" type="button" value="envoyer"/>
                    </div>
                </form>
                <div class="connexionPhotoContainerSmartphone">
                    <img class="connexionPictureSmartphone" src="img/pexels-janiere-fernandez-2829336.jpg" alt="on the road a game connexion picture"/>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('inscription')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContainerConnexion">
        <div class="connexionPhotoContainer">
            <img class="connexionPicture" src="img/pexels-lalu-fatoni-732632.jpg" alt="on the road a game connexion picture"/>
        </div>
        <div class="inputInscriptionContainer">
            <form action="/my-handling-form-page" methode="post">
                <div class="connexionEmailContainer">
                    <label class="labelConnexion">Prénom :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
            <div class="connexionMotDePasseContainer">
                <label class="labelConnexion">Nom :</label>
                <input class="connexionInput" type="text" required/>
            </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Civilité :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
                </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Mot de passe :</label>
                    <input class="connexionInput" type="password" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Confirmez mot de passe :</label>
                    <input class="connexionInput" type="password" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Date de naissance :</label>
                    <input class="connexionInput" type="date" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Pays :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Code postal :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Ville :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Numéro de téléphone :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Adresse email :</label>
                    <input class="connexionInput" type="email" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Confirmez email :</label>
                    <input class="connexionInput" type="email" required/>
                </div>
            </br>
        </br>
        <div class="connexionMotDePasseContainer">
            <label class="labelConnexion">être chef d'équipe :</label>
            <input class="connexionInputCheckBox" type="checkbox" required/>
        </div>
            <div class="boutonInscriptionContainer">
                <input class="BoutonInscription" type="button" value="envoyer"/>
            </div>
            </form>
            <div class="connexionPhotoContainerSmartphone">
                <img class="connexionPictureSmartphone" src="img/pexels-lalu-fatoni-732632.jpg" alt="on the road a game connexion picture"/>
            </div>
        </div>
    </div>
</div>
@endsection



@section('actualitesUser')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContainerArticle">
        <hr class="hrTextArticle" ></hr>
            <div class="textContainerArticle">
                <p class="textPresentation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aenean sed adipiscing diam donec adipiscing tristique. Odio morbi quis commodo odio. Amet nisl suscipit adipiscing bibendum est ultricies integer. Feugiat vivamus at augue eget arcu dictum. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Non consectetur a erat nam at. Dui nunc mattis enim ut tellus elementum sagittis vitae. Ullamcorper morbi tincidunt ornare massa. Neque egestas congue quisque egestas. Maecenas accumsan lacus vel facilisis volutpat est velit egestas.</p>
            </div>
        <hr class="hrTextArticle"></hr>
    </div>
</div>
@endsection



@section('gestionMembresChefUser')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContentContainer">
        <h2 class="titreGestionMembres" >Ajouter un membre :</h2>
        <div class="connexionEmailContainer">
            <label class="labelConnexion">Prénom :</label>
            <input class="connexionInput" type="text" required/>
        </div>
    </br>
    <div class="connexionMotDePasseContainer">
        <label class="labelConnexion">Nom :</label>
        <input class="connexionInput" type="text" required/>
    </div>
    </br>
        <div class="connexionMotDePasseContainer">
            <label class="labelConnexion">Date de naissance :</label>
            <input class="connexionInput" type="date" required/>
        </div>
        <div class="boutonInscriptionContainer">
            <input class="BoutonInscription" type="button" value="envoyer Invitation"/>
        </div>
    </div>
    <div class="subContentContainer">
            <div class="textContainerArticle">
                <h2 class="titreGestionMembres" >Membres actuels (X/3) :</h2>
            </div>
            <div class="membresActuels">
                <ul>
                <li class="membreListe">Beranguer Jonathan</li>
                <li class="membreListe">Lévy Hélie de Mareuil</li>
                <li class="membreListe">Charlemagne Clément</li>
                </ul>
            </div>
            <div class="boutonInscriptionContainer">
                <input class="BoutonInscription" type="button" value="Supprimer équipe"/>
            </div>
    </div>
</div>
@endsection


@section('modifierComptePerso')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContainerConnexion">
        <div class="connexionPhotoContainer">
            <img class="connexionPicture" src="img/pexels-janiere-fernandez-2405095.jpg" alt="on the road a game connexion picture"/>
        </div>
        <div class="inputInscriptionContainer">
            <form action="/my-handling-form-page" methode="post">
                <div class="connexionEmailContainer">
                    <label class="labelConnexion">Prénom :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
            <div class="connexionMotDePasseContainer">
                <label class="labelConnexion">Nom :</label>
                <input class="connexionInput" type="text" required/>
            </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Civilité :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
                </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Mot de passe :</label>
                    <input class="connexionInput" type="password" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Confirmez mot de passe :</label>
                    <input class="connexionInput" type="password" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Date de naissance :</label>
                    <input class="connexionInput" type="date" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Pays :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Code postal :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Ville :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Numéro de téléphone :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Adresse email :</label>
                    <input class="connexionInput" type="email" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Confirmez email :</label>
                    <input class="connexionInput" type="email" required/>
                </div>
            </br>
        </br>
            <div class="boutonInscriptionContainer">
                <input class="BoutonInscription" type="button" value="Valider changements"/>
            </div>
            </form>
            <div class="connexionPhotoContainerSmartphone">
                <img class="connexionPictureSmartphone" src="img/pexels-janiere-fernandez-2405095.jpg" alt="on the road a game connexion picture"/>
            </div>
        </div>
    </div>
</div>
@endsection


@section('gestionDefisChefUser')
<div class="ImHereForSpaceChefUserGestion"></div>
<div class="contentContainerDefisChefUser">
    <div class="subContainerArticle">
        <div class="subContainerGestionCHefUser">
            <p class="positionClassement">N° : 1</p>
            <p class="positionClassement">Nom défi : Le super premier défi !</p>
            <p class="positionClassement">temps restant : 4H 20min 12s</p>
            <p class="positionClassement">Points : X/3 pts</p>
        </div>
        <div class="textContainerArticle">
            <p class="textPresentation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aenean sed adipiscing diam donec adipiscing tristique. Odio morbi quis commodo odio. Amet nisl suscipit adipiscing bibendum est ultricies integer. Feugiat vivamus at augue eget arcu dictum. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta. Non consectetur a erat nam at. Dui nunc mattis enim ut tellus elementum sagittis vitae. Ullamcorper morbi tincidunt ornare massa. Neque egestas congue quisque egestas. Maecenas accumsan lacus vel facilisis volutpat est velit egestas.</p>
            <div class="defiPicturesContainer">
                <img class="defisPictures" src="img/pexels-ylanite-koppens-697662.jpg" alt="on the road a game défi picture"/>
                <img class="defisPictures" src="img/pexels-marius-venter-1659437.jpg" alt="on the road a game défi picture"/>
                <img class="defisPictures" src="img/pexels-janiere-fernandez-2829336.jpg" alt="on the road a game défi picture"/>
                <img class="defisPictures" src="img/pexels-janiere-fernandez-2405095.jpg" alt="on the road a game défi picture"/>
            </div>
        </div>
        <div class="boutonInscriptionContainer">
            <input class="BoutonInscription" type="button" value="Ajouter élément(s)"/>
        </div>
    </div>
</div>
@endsection


@section('menuDefisSessionsAdmin')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContainerArticle">
        <div class="boutonInscriptionContainer">
            <input class="boutonMenuGestionAdmin" type="button" value="Ajouter des défis"/>
        </div>
        <div class="boutonInscriptionContainer">
            <input class="boutonMenuGestionAdmin" type="button" value="Evaluer des défis"/>
        </div>
        <div class="boutonInscriptionContainer">
            <input class="boutonMenuGestionAdmin" type="button" value="Création de sessions"/>
        </div>
    </div>
</div>
@endsection


@section('gestionEquipe')
<div class="ImHereForSpaceChefUserGestion"></div>
<div class="contentContainerDefisChefUser">
    <div class="subContainerArticle">
        <div class="subContainerGestionCHefUser">
            <p class="positionClassement">N° : 1</p>
            <p class="positionClassement">Nom équipe : Le super premier défi !</p>
            <input class="boutonEquipeSuppression" type="button" value="Supprimer équipe"/>
        </div>
        <div class="subContainerGestionEquipes">
            <div class="chefEquipeNom">
                <h2 class="nomChefEquipeLi">Chef d'équipe : XXXXX</h2>
            </div>
            <div class="equipierNomLi">
                <p class="equipierLi">Equipier : XXXXX</p>
            <div class="boutonsGestionEquipe">
                <input class="boutonEquipeSuppression" type="button" value="Exclure de l'équipe"/>
                <input class="boutonEquipeSuppression" type="button" value="Associer à une nouvelle équipe"/>
            </div>
            <hr class="separationEquipiers"></hr>
            </div>
        </div>
    </div>
</div>
<div class="boutonInscriptionContainer">
    <input class="boutonMenuGestionAdmin" type="button" value="Valider toutes les équipes"/>
</div>
@endsection



@section('gestionSessionAdmin')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContentContainer">
        <h2 class="titlePresentation">Création des sessions :</h2>
        <div class="connexionEmailContainer">
            <label class="labelConnexion">Dotation :</label>
            <input class="connexionInput" type="text" required/>
        </div>
    </br>
    <div class="connexionMotDePasseContainer">
        <label class="labelConnexion">Date de début :</label>
        <input class="connexionInput" type="text" required/>
    </div>
    </br>
        <div class="connexionMotDePasseContainer">
            <label class="labelConnexion">Date de fin :</label>
            <input class="connexionInput" type="text" required/>
        </div>
        </br>
        <div class="connexionMotDePasseContainer">
            <label class="labelConnexion">Nom :</label>
            <input class="connexionInput" type="text" required/>
        </div>
    </br>
    <div class="boutonInscriptionContainer">
        <input class="boutonMenuGestionAdmin" type="button" value="Sauvegarder"/>
    </div>
    </div>
    <div class="subContentContainer">
        <h2 class="titlePresentation">Liste des sessions :</h2>
        <div class="listeSessions">
            <p class="sessionLi">Session N°X</p>
            <input class="boutonMenuGestionAdmin" type="button" value="Supprimer"/>
            <hr class="separationEquipiers"></hr>
        </div>
    </div>
</div>
@endsection



@section('creationDefisAdmin')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContentContainer">
        <h2 class="titlePresentation">Création des défis :</h2>
        <div class="connexionEmailContainer">
            <label class="labelConnexion">Nombre de points :</label>
            <input class="connexionInput" type="text" required/>
        </div>
    </br>
    <div class="connexionMotDePasseContainer">
        <label class="labelConnexion">Titre :</label>
        <input class="connexionInput" type="text" required/>
    </div>
    </br>
        <div class="connexionMotDePasseContainer">
            <label class="labelConnexion">Description :</label>
            <textarea class="connexionInputArea" required></textarea>
        </div>
    </br>
    <div class="boutonInscriptionContainer">
        <input class="boutonMenuGestionAdmin" type="button" value="Importer image"/>
    </div>
    </div>
    <div class="subContentContainer">
        <h2 class="titlePresentation">Associer défi à la session :</h2>
        <div class="connexionMotDePasseContainer">
            <label class="labelConnexion">Nom session :</label>
            <input class="connexionInput" type="text" required/>
        </div>
        <div class="boutonInscriptionContainer">
            <input class="boutonMenuGestionAdmin" type="button" value="Sauvegarder changements"/>
        </div>
    </div>
</div>
@endsection


@section('notationDefisAdmin')
<div class="ImHereForSpaceChefUserGestion"></div>
<div class="contentContainerDefisChefUser">
    <div class="subContainerArticle">
        <div class="subContainerGestionCHefUser">
            <p class="positionClassement">N° : 1</p>
            <p class="positionClassement">Nom défi : Le super premier défi !</p>
            <div class="connexionMotDePasseContainer">
                <label class="labelConnexion">Nombre de points / X :</label>
                <input class="connexionInput" type="text" required/>
            </div>
        </div>
        <div class="textContainerArticle">
            <textarea class="connexionInputAreaFullWidth" required></textarea>
        </div>
        <div class="boutonInscriptionContainer">
            <input class="BoutonInscription" type="button" value="Soumettre"/>
        </div>
    </div>
</div>
@endsection



@section('gestionCompteAdmin')
<div class="ImHereForSpace"></div>
<div class="contentContainer">
    <div class="subContainerConnexion">
        <div class="connexionPhotoContainer">
            <img class="connexionPicture" src="img/pexels-janiere-fernandez-2405095.jpg" alt="on the road a game connexion picture"/>
        </div>
        <div class="inputInscriptionContainer">
            <form action="/my-handling-form-page" methode="post">
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Numéro de téléphone :</label>
                    <input class="connexionInput" type="text" value="Rechercher avec un N°" required/>
                </div>
            </br>
                <div class="connexionEmailContainer">
                    <label class="labelConnexion">Prénom :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
            <div class="connexionMotDePasseContainer">
                <label class="labelConnexion">Nom :</label>
                <input class="connexionInput" type="text" required/>
            </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Civilité :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
                </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Date de naissance :</label>
                    <input class="connexionInput" type="date" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Pays :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Code postal :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
                <div class="connexionMotDePasseContainer">
                    <label class="labelConnexion">Ville :</label>
                    <input class="connexionInput" type="text" required/>
                </div>
            </br>
            <div class="connexionMotDePasseContainer">
                <label class="labelConnexion">Equipe :</label>
                <input class="connexionInput" type="email" required/>
            </div>
        </br>
            <div class="boutonInscriptionContainer">
                <input class="BoutonInscription" type="button" value="Valider changements"/>
            </div>
            </form>
            <div class="connexionPhotoContainerSmartphone">
                <img class="connexionPictureSmartphone" src="img/pexels-janiere-fernandez-2405095.jpg" alt="on the road a game connexion picture"/>
            </div>
        </div>
    </div>
</div>
@endsection

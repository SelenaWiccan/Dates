# Application de gestion des dates d'anniversaires
# Introduction
L'application de gestion des dates d'anniversaires est une application qui permet à l'utilisateur de s'authentifier et enregistrer ses dates d'anniversaire pour s'en rappeler ! L'application est composée de :

 1 Bases de données (crud) avec 2 tables :
- Crud : la table crud permet l'enregistrement des dates ainsi que le nom et prénom de la personne concernée
- User : la table user permet l'enregistrement de nouveaux utilisateurs dans l'application et servira donc pour l'authentification

 Langage utilisé :
- Symfony
- Twig

# Fonctionnement

Pour le fonctionnement de l'application, il est nécessaire de rentrer tout les champs du formulaire dans la page sinon le formulaire ne se validera pas, chaques dates sera affichée dans un tableau avec la possibilité de 

#    # Page Welcome

Pour le fonctionnement de la page "Welcome" à l'adresse : http://127.0.0.1:8001/welcome est composée de
- 1 bouton "Connect" : Le bouton qui doit servir à ramener vers la page de login (la page de login ne fonctionne pas) -> ramène vers la page "/security/list"
- 1 bouton "Page login en panne" : Le bouton qui doit servir à ramener quand même passer à la page suivante mais en esquivant l'authentification -> ramène vers la page "/main/list"
- 1 bouton "Create an account" : Le bouton qui doit servir à ramener vers la page de création de compte -> ramène vers la page "/main/account"

 *************************************************************************************************************************************************
#    # Page Login // ne fonctionne pas (pas vraiment de rendu vérifié)
 
-Pour le fonctionnement de la page "Welcome" à l'adresse : http://127.0.0.1:8001/login est composée de
- 1 bouton "Connect" : Le bouton qui doit servir à ramener vers la page de login (la page de login ne fonctionne pas) -> ramène vers la page "/security/list"
- 1 bouton "Page login en panne" : Le bouton qui doit servir à ramener quand même passer à la page suivante mais en esquivant l'authentification -> ramène vers la page "/main/list"
- 1 bouton "Create an account" : Le bouton qui doit servir à ramener vers la page de création de compte -> ramène vers la page "/main/account"

********************************************************************************************************************
#    # Page account
- les champs (nom , prenom, date, email, nombre de place et telephone) sont des champs requis pour le formulaire { message d'erreur " veuuillez completer ce champ" }
- le champ email demande une email valide donc avec un @
- le champs du nombre de place est requis { "veuillez entrer un nombre" }
- seul 1 bouton est visible au début du code.
- Le formulaire semble ne pas se valider et renvoie une erreur si aucune date n'est selectionnée
******************************************************************************************
#    # Page List

_CE ne FONCTIONNE pas:_
**********************************************************************
- Bloquer le champs de formulaire pour ne pas que l'utilisateur puisse mettre à jour les données : solution, faire disparaitre le bouton valider
******************************************************

DIFFICULTES :
******************************************
Les choses qui me sont difficiles sont les nouvelles notions et les faire fonctionner cela prends beaucoup de temps. Quelques points ne fonctionnent toujours pas dans le code comme listé ci-dessus. Il y a des modifications à faire..
*****************************

QUESTIONS : 
******************
 ?
 *****


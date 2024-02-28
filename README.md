# Application de gestion des dates d'anniversaires
# INTRODUCTION
L'application de gestion des dates d'anniversaires est une application qui permet à l'utilisateur de s'authentifier et enregistrer ses dates d'anniversaire pour s'en rappeler ! L'application est composée de :

 1 Bases de données (crud) avec 2 tables :
- Crud : la table crud permet l'enregistrement des dates ainsi que le nom et prénom de la personne concernée
- User : la table user permet l'enregistrement de nouveaux utilisateurs dans l'application et servira donc pour l'authentification

 Langage utilisé :
- Symfony
- Twig

# FONCTIONNEMENT

Pour le fonctionnement de l'application, il est nécessaire de rentrer tout les champs du formulaire dans la page sinon le formulaire ne se validera pas, chaques dates sera affichée dans un tableau avec la possibilité de 

#    # Page Welcome

Pour le fonctionnement de la page "Welcome" à l'adresse : http://127.0.0.1:8001/welcome est composée de
- 1 bouton "Connect" : Le bouton qui doit servir à ramener vers la page de login (la page de login ne fonctionne pas) -> ramène vers la page "/security/list"
- 1 bouton "Page login en panne" : Le bouton qui doit servir à ramener quand même passer à la page suivante mais en esquivant l'authentification -> ramène vers la page "/main/list"
- 1 bouton "Create an account" : Le bouton qui doit servir à ramener vers la page de création de compte -> ramène vers la page "/main/account"

 *************************************************************************************************************************************************
#    # Page Login // ne fonctionne pas (pas vraiment de rendu vérifié)
 
Pour le fonctionnement de la page "login" à l'adresse : http://127.0.0.1:8001/login est composée de (dans l'idéal) :

- 1 champ mot de passe
- 1 champ adresse mail
- 1 bouton de validation -> ramène vers la page "/main/list" en ayant connecté l'utilisateur qui faisait la demande après vérifications que les données sont correctes et que l'utilisateur existe
- 1 bouton d'annulation -> ramène vers la page "/main/welcome" en ne faisant rien 

Le formulaire ne peux être validé si tout les champs ne sont pas complétés

********************************************************************************************************************
#    # Page account

Pour le fonctionnement de la page "account" à l'adresse : http://127.0.0.1:8001/account est composée de :

- 1 champ nom
- 1 champ prenom
- 1 champ mot de passe
- 1 champ adresse mail
- 1 bouton de validation -> ramène vers la page "/main/welcome" en ayant créé un nouveau compte dans la base de donnée
- 1 bouton d'annulation -> ramène vers la page "/main/welcome" en ne faisant rien
 
Le formulaire ne peux être validé si tout les champs ne sont pas complétés

******************************************************************************************
#    # Page List

Pour le fonctionnement de la page "account" à l'adresse : http://127.0.0.1:8001/list est composée de :

- 1 tableau affichant les dates qui sont prévues dans les 30 jours à venir
- 1 bouton "show" -> ramène vers la page "/main/main"
- 1 bouton "logout -> ramène vers la page "/main/welcome" qui sert à la déconnexion (après avoir réparé la page login)

********************************************************************************************************************
#    # Page main

Pour le fonctionnement de la page "account" à l'adresse : http://127.0.0.1:8001/main est composée de :

- 1 tableau affichant toutes les dates enregistrés dans la base de donnée
- 1 bouton "update" -> ramène vers la page "/main/update"
- 1 bouton "delete" -> ouvre un modal pour confirmer que l'on va supprimer la donnée "oui" ou "non"
- 1 bouton "ajouter" -> ramène vers la page "/main/create" 
- 1 bouton "logout" -> ramène vers la page "/main/welcome" en ne faisant rien
- 1 bouton "back to list" -> ramène vers la page "/main/list" en ne faisant rien

********************************************************************************************************************
#    # Page update

Pour le fonctionnement de la page "account" à l'adresse : http://127.0.0.1:8001/update est composée de :

- 1 champ nom
- 1 champ prenom
- 1 champ date
- 1 bouton "ajouter" -> ramène vers la page "/main/main" -> en ayant mit à jour la date dans la base de donnée
- 1 bouton "logout" -> ramène vers la page "/main/welcome" en ne faisant rien -> déconnexion
- 1 bouton "back to list" -> ramène vers la page "/main/main" en ne faisant rien

********************************************************************************************************************
#    # Page create

Pour le fonctionnement de la page "account" à l'adresse : http://127.0.0.1:8000/create est composée de :

- 1 champ nom
- 1 champ prenom
- 1 champ date
- 1 bouton "ajouter" -> ramène vers la page "/main/main" -> en ayant inséré la date dans la base de donnée
- 1 bouton "logout" -> ramène vers la page "/main/welcome" en ne faisant rien -> déconnexion
- 1 bouton "back to list" -> ramène vers la page "/main/main" en ne faisant rien

**********************************************************************

# CE QUI NE MARCHE PAS

L'authentification :

- error does not exists -> peut être la commmunication entre le controller et twig car si "error" est commenté la ligne du dessous n'est pas trouvé non plus
- attribuer les bonnes dates au bon utilisateur

******************************************************

# DIFFICULTES :

- Git
- Authentification
- css
- un peu base de donnée

******************************************




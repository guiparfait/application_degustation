# GUIDE D'INSTALLATION 

L'installation de l'application se fera en local c-a-d sur votre Ordinateur. 

## Etape 1 (Les Prérequis)

Nous rappelons que l'application a été développé avec le Framework LARAVEL, qui repose sur le langage PHP.

Vous devez disposer de :
   
#### PHP version 7 ou plus, [Guide d'installation de php](https://doc.ubuntu-fr.org/php)
#### Composer (le gestionnaire de dépendance),[Guide d'installation de composer](https://doc.ubuntu-fr.org/composer)
#### PhpMyAdmin [Guide d'installation de PhpMyAdmin](https://doc.ubuntu-fr.org/phpmyadmin)
#### Git [Guide d'installation de Git](https://doc.ubuntu-fr.org/git)


## Etape 2 (GitLab)

Une fois que vous avez configurez et préparer votre machine, récupérer l'application sur gitlab comment procéder :
 
    1) Ouvrer un terminal
    2) Créer un dossier nommé "PDL"
    3) Se positionner dans le dossier
    4) cloner le projet, pour se faire vous devez Entrer la 
        commande suivante "git clone https://gitlab.istic.univ-rennes1.fr/manzian/projet_pdl_groupe_3.git" 
        dans le terminal
    5) patienter le temps du téléchargement.

## Etape 3 (les dépendances)

Une fois que vous avez recuperer l'application nous allons passer aux dépendances.

    1) Positionner vous dans le répertoire "projet_pdl_groupe_3"
    2) Entrer la commande suivante : "composer install ou composer update"
    3) patienter le temps du téléchargement.

## Etape 4 (Configuration de l'application)

Apres avoir fini de télécharger les dépendances, on passe à la configuration pour que notre application fonctionne sur votre machine.

    1) Enter dans le dossier "projet_pdl_groupe_3"
    2) créer un fichier dont l'extension est ".env"
    3) copier l'intégralité du contenue du fichier ".env.exemple" 
       et le coller dans le fichier ".env"

## Etape 5 (Configuration de la Base de donnée)

La création du fichier ".env" terminer on passe maintenant à notre base de données.

    1) Créer une base de données depuis PhpMyAdmin, appelons notre base de donnée "degustation_bd"
    2) une fois la base de données créer on reviens dans le fichier ".env"
    3) dans le fichier ".env" on cherche "DB_CONNECTION=mysql" 
       et on remplir les informations lié a la connexion à notre base de donnée

           DB_CONNECTION=mysql
           DB_HOST=127.0.0.1
           DB_PORT=3306
           DB_DATABASE=nom_de_la_base_de_donnée
           DB_USERNAME=identifiant_de_connexion_a_la_base_de_donnée
           DB_PASSWORD=mot_de_passe_pour_se_connecter_a_la_base_de_donnée

## Etape 6 (la mise en route)

Une fois que la base de données est connectée à notre application on va la rendre opérationnelle

    1) ouvrer un terminal
    2) se positionner dans le répertoire "projet_pdl_groupe_3"
    3) Entrer la commande "php artisan migrate:fresh --seed" pour la création de nos tables et ajouter des données pour notre test
    4) Entrer ensuite la commande 'php artisan storage:link"
    5) Entrer la commande "php artisan serve"

## Etape 7 (Utilisation)

Une fois que tout est prêt on peut commencer à utiliser notre application et voici le processus pour utiliser l'application

    1) Ouvrer votre navigateur web
    2) insérer dans la barre d'adresse, l'adresse qui s'affiche dans votre terminal 
    après avoir insérer la commande "php artisan serve" 
    Il se présente généralement comme ci "http://127.0.0.1:8000/ ou http://localhost
    3) Vous pouvez vous connecter en utilisant soit "admin@example.com" pour l'adminstrateur ou "membre@example.com" pour un simple membre le mot de passe pour les deux comptes est "12345678"

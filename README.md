# Installation du projet laravel

```
git clone https://github.com/WhiteSlimes/seisan-site-v2
```
Il ne faut pas oublier de rentrer dans le dossier du projet avant d'exécuter les commandes qui vont suivre

```
cd seisan-site-V2
```
Il faut ensuite installer tous ce qu'il faut 
```
composer install
npm install
```

ensuite il faut copier le fichier env 
```
cp .env.example .env
php artisan key:generate
```
dans le .env il faut modifier les informations sur le Base de données (DB_HOST, DB_PORT ...) pour qu'elles correspondent à vôtre BDD.

```
php artisan migrate
php artisan db:seed
```
Voilà le projet est prêt à être utilisé normalement.

# Doc - Laravel du Groupe 11 #

## Rappelle du projet : 

```
Seisan.fr
groupe : Antonin Demaneche / Thomas Malbec / Alexis Papon

Description
Pour résumer, Antonin et Alexis gèrent un serveur Rp sur minecraft avec une communauté de 195 membres inscrits et 50 membres actifs. Le concept serait de réaliser le site de ce serveur qui pourrait contenir:

un systéme d'inscription
des forums liés a des grades (admin, staff, joueurs, ...)
chaque joueurs possèdent une fiche de pérsonnage éditable.
Une page contact pour contacter les admins
Une page principal avec les infos actuelles(news, event)
Quelques pages secondaire pour mieux connaitre le serveur (histoire, régles, ...)
Une liste des membres consultable par tous mais avec des options supplémentaires si on est admin.

```

## Les fonctionnalités mises en place :

Notre site met en place certaine des fonctionnalités : 
- L'inscription et connexion 
- Un profil éditable 
- Une page d'accueil
- Des pages de présentation
- Une liste des membres 

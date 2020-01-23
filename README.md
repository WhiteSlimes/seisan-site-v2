# installation du projet laravel

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
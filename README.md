<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# API Championship

API Championship est un projet perso pour s'entrainer dans le but d'obtenir ma licence CDA. Un projet front viendra consommer l'API (projet en cours).
C'est une API qui, à l'heure actuelle renvoie les 6 grands championnat de rugby Européens que sont :
- Top 14
- Pro D2
- Gallagher Premiership
- United Rugby Championship
- Champions Cup
- EPCR Challenge Cup

Mais elle peut tout à fait coller à d'autres sports en équipes.
Si besoin, vous trouverez un diagramme d'entité [ici](ER_diagramme.png)

## Installation

1. Tout d'abord bien évidemment, faire un git clone.

2. Après le clonage, effectuer un composer install.

```bash
composer install
```
3. Copier le .env.example 

```bash
cp .env.example .env 
```

4. Générer la clé laravel

```bash
php artisan key:generate
```
5. Créer une bdd vide avec le nom inscrit dans le .env
6. Effectuer les migrations.
```bash
php artisan migrate
```

7. Copier/coller le contenu du fichier dump.sql, ou seed votre bdd comme vous le voulez.
8. Modifier le port de l'API dans le .env si besoin.
9. Lancer le serveur avec la commande 
```bash
php artisan serve
```

À présent, vous pouvez consommer l'API.

## Bonus

Une doc peut être auto-généré avec la commande 
```bash
php artisan scribe:generate
```
et, est accessible à l'adresse que vous avez renseignez, en terminant par /api-docs.

## Routes accessibles 

Liste des routes [ici](routes.md)

## Évolutions à venir

Pour la reprise des championnats, je vais essayer de compléter l'API afin de pouvoir renvoyer les résultats des matchs et le classement des différents championnats.

Pour la suite, je veux également ajouter les joueurs des différentes équipes avec leurs postes et leur mensurations.

## Contribution

Étant donné que je ne suis pas un développeur confirmé, j'accepte toutes les critiques et/ou remarques afin de m'améliorer, alors n'hésitez pas.

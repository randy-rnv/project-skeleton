# Structure de base pour un projet
# Suivant le design pattern MVC

- inclus: cdn bootstrap 4, autoload de composer

## Routing : localhost/controlleur/action[/?getParametres]
=> les urls avec des controlleurs/actions inexistants redirigeront vers default/default qui correspond à "defaultAction" de "DefaultController"

## Quelques Syntaxes:

 - form action="/controlleur/action/"
 - a href="/controlleur/action/?getParametres"

=> les fichiers .css sont à mettre dans "public/assets/css/"
pour les inclure dans une page spécifique, mettre dans un attribut de type array du controlleur (Voir DefaultController)


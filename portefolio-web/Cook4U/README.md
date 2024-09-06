# COOK4U

## Description
COOK4U est une plateforme qui met en relation des cuisiniers amateurs avec des clients à la recherche de repas faits maison. Le projet permet aux utilisateurs de s'inscrire en tant que cuisinier ou client, de parcourir les menus proposés, et de commander des plats.
J'ai travaillé sur ce projet tout au long de ma formation de développeur web, cela a été mon projet fil rouge que j'ai développé de A à Z !
Ce projet est toujours en cours de développement.

## Fonctionnalités

Inscription et Connexion des Utilisateurs :
   Les utilisateurs peuvent créer un compte en s'inscrivant avec leurs informations personnelles.
   Connexion sécurisée via email et mot de passe.

Gestion du Profil Utilisateur :
   Les utilisateurs peuvent mettre à jour leurs informations personnelles (adresse, téléphone, etc.).
   Les cuisiniers peuvent ajouter une présentation et une photo de profil pour se présenter aux clients.

Publication de Plats (pour les cuisiniers) :
   Les cuisiniers peuvent publier des plats avec une description, un prix, une catégorie, et une photo.
   Gestion des plats disponibles avec la possibilité de modifier ou supprimer des plats existants.

Navigation et Consultation des Plats (pour les clients) :
   Les clients peuvent parcourir les plats disponibles avec des détails tels que la description, le prix et la photo.
   Un carrousel interactif présente les plats du jour sur la page d'accueil.

Système de Commande :
   Les clients peuvent sélectionner des plats, les ajouter à leur panier et passer commande.
   Suivi des commandes passées, avec un historique des transactions.

Gestion des Commandes (pour les cuisiniers) :
   Les cuisiniers peuvent consulter les commandes reçues et les traiter.
   Affichage des détails de chaque commande, y compris les informations du client.

Commentaires et Avis :
   Les clients peuvent laisser des commentaires sur les plats qu'ils ont commandés.
   Les commentaires sont associés aux plats et consultables par les autres utilisateurs.

Sécurité et Gestion des Sessions :
   Utilisation de sessions sécurisées pour gérer les connexions des utilisateurs.
   Protection contre les injections SQL grâce à l'utilisation de requêtes préparées via PDO.

Géolocalisation (fonctionnalité à venir) :
   Planification de l'intégration d'une fonctionnalité de géolocalisation(OpenStreetMap) pour afficher les plats disponibles en fonction de la localisation des utilisateurs.

Messagerie Directe (fonctionnalité à venir) :
   Prévue pour permettre une communication directe entre les clients et les cuisiniers pour faciliter les échanges concernant les commandes.

## Technologies utilisées

HTML/CSS : Utilisés pour structurer et styliser les pages web, garantissant une présentation cohérente et attrayante du contenu.

JavaScript : Implémenté pour ajouter des fonctionnalités dynamiques et interactives, comme le carrousel d'images, améliorant l'expérience utilisateur.

PHP : Langage côté serveur utilisé pour la gestion des interactions avec la base de données, le traitement des formulaires et la gestion des sessions utilisateurs.

MySQL : Système de gestion de base de données relationnelle utilisé pour stocker et organiser les données des utilisateurs, des plats, des commandes et des commentaires.

PDO (PHP Data Objects) : Interface PHP pour accéder à la base de données de manière sécurisée, en permettant l’utilisation de requêtes préparées et la gestion des erreurs.

## Installation
1. Clonez ce dépôt.
2. Configurez votre serveur web pour pointer vers le répertoire du projet.
3. Importez le fichier SQL pour créer la base de données.
4. Mettez à jour les paramètres de connexion à la base de données dans le fichier `fonctions.php`.

## Utilisation
Pour démarrer le projet, ouvrez votre navigateur et accédez à `index.php` via votre serveur local.


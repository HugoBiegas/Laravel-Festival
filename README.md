# Projet Laravel-Festival

## Description
Application web développée avec Laravel permettant la gestion d'un festival, notamment l'organisation des équipes participantes et leur hébergement dans différents établissements.

## Fonctionnalités principales

### Gestion des équipes
- Création, consultation, modification d'équipes participantes
- Informations gérées : nom, identité du responsable, adresse postale, nombre de personnes, pays d'origine, stand

### Gestion des établissements
- Création, consultation, modification d'établissements d'hébergement
- Informations gérées : nom, adresse, code postal, ville, téléphone, email, type d'établissement, responsable, nombre de chambres offertes

### Gestion des attributions
- Association entre équipes et établissements d'hébergement
- Vue dédiée pour la gestion des attributions

## Architecture technique

### Structure MVC (Modèle-Vue-Contrôleur)
- **Modèles** : Equipe, Etablissement, Attribution, User
- **Contrôleurs** : EquipeController, EtablissementController, AttributionController
- **Vues** : Situées dans resources/views/festival/

### Relations entre les modèles
- Relation many-to-many entre Equipe et Etablissement
- Modèle Attribution pour la table pivot

### Base de données
- Migrations pour la création des tables
- Factories pour générer des données de test
- Seeders pour l'initialisation des données

### Sécurité
- Middleware d'authentification
- Protection CSRF
- Validation des données

## Installation

1. Cloner le dépôt
```bash
git clone [url-du-dépôt]
cd Laravel-Festival
```

2. Installer les dépendances
```bash
composer install
npm install
```

3. Configurer l'environnement
```bash
cp .env.example .env
php artisan key:generate
```

4. Configurer la base de données dans le fichier .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=festival
DB_USERNAME=root
DB_PASSWORD=
```

5. Exécuter les migrations et seeders
```bash
php artisan migrate
php artisan db:seed
```

6. Lancer le serveur de développement
```bash
php artisan serve
```

7. Accéder à l'application
```
http://localhost:8000
```

## Développement

### Structure des dossiers principaux
- app/Models/ : Définition des modèles
- app/Http/Controllers/ : Logique des contrôleurs
- app/Providers/ : Fournisseurs de services Laravel
- database/migrations/ : Migrations de base de données
- database/factories/ : Factories pour les tests
- database/seeders/ : Initialisation des données
- routes/ : Définition des routes (web.php, api.php)
- resources/views/ : Templates Blade
- public/ : Ressources accessibles publiquement

### Routes principales
- /equipe : Gestion des équipes
- /etablissement : Gestion des établissements
- /attribution : Gestion des attributions

## Bonnes pratiques implémentées
- Validation des données dans les contrôleurs
- Utilisation des relations Eloquent
- Protection contre les failles CSRF
- Architecture respectant les principes SOLID
- Code organisé selon les standards PSR

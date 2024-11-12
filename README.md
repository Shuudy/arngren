# ARNGREN

Un site inspiré d'arngren.net pour améliorer son ergonomie.

## Prérequis

- **PHP** >= 8.2
- **Composer** >= 2.x
- **Node.js** >= 16.x et **npm**

## Installation

1. **Cloner le dépôt :**

    ```bash
    git clone https://github.com/Shuudy/arngren.git
    cd arngren
2. **Installer les dépendances PHP :**

    ```bash
    composer install
3. **Installer les dépendances JavaScript et Sass :**

    ```bash
    npm install
4. **Configurer les variables d'environnement :**
    - Dupliquer le fichier .env.example et le renommer en .env
    
5. **Générer la clé de l'application :**

    ```bash
    php artisan key:generate
## Compilation des assets    
    npm run dev
## Démarrage de l'application

1. **Lancer le serveur de développement :**

    ```bash
    php artisan serve
2. **Accéder à l'application :**

    Ouvrez un navigateur et allez à l'adresse suivante : http://localhost:8000
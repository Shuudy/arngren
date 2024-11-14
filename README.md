# ARNGREN

Un site inspiré d'arngren.net pour améliorer son ergonomie.

## Problèmes liés à l'ergonomie de la page arngren.net

1. **Navigation trop floue** : Il est difficile de savoir où aller.
2. **Trop d'informations** : La page présente un excès de données à l'utilisateur.
3. **Titre produit illisible** : Le titre du produit n'est pas suffisamment mis en valeur.
4. **Scroll horizontal** : Le contenu nécessite un défilement horizontal, ce qui complique la navigation.
5. **Problème de couleurs** : Trop de couleurs différentes utilisées (rouge, bleu foncé, bleu clair, jaune), rendant la lecture difficile.
6. **Produits mélangés** : Les produits ne sont pas bien catégorisés, ce qui rend la navigation confuse.
7. **Mauvais positionnement des produits** : La mise en page des produits n'est pas optimisée.
8. **Footer trop animé** : Le pied de page contient des animations inutiles et du texte sur une image, rendant la lecture difficile.
9. **Barre de recherche mal positionnée** : Elle est trop petite et doublée à plusieurs endroits.
10. **Liens doublons** : Plusieurs liens redirigent vers la même page, créant une redondance inutile.

## Améliorations possibles

1. **Ajouter une sidebar** : Positionner une barre latérale à gauche pour afficher les catégories, avec un bon espacement et des couleurs harmonisées.
2. **Utiliser des cards pour les produits** : Afficher chaque produit dans une card avec l'image, le titre et le prix.
3. **Optimiser la navbar** : Positionner le logo de l'entreprise à gauche, une barre de recherche au centre et les liens de navigation à droite.
4. **Simplifier le footer** : Rendre le pied de page plus lisible avec uniquement les informations essentielles.
5. **Uniformiser les couleurs** : Utiliser une palette cohérente, par exemple du vert pour le nom de l'entreprise, les boutons et les effets hover.

## Améliorations pour la page produit

1. **Disposition des images** : Afficher la grande image du produit à gauche avec les vignettes des autres images en dessous.
2. **Informations produit** : Positionner les détails du produit à droite de l'image, avec un bon espacement, et afficher uniquement les informations essentielles.
3. **Bouton d'achat (CTA)** : Ajouter un bouton visible pour acheter le produit.

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

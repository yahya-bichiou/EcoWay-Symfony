♻️ EcoWay

EcoWay est une plateforme web moderne qui gère une entreprise de recyclage des déchets ménagers en engrais naturels pour la terre. Le site permet aux utilisateurs de découvrir des conseils écologiques, de passer des commandes, et de réagir à des publications de sensibilisation, tout en offrant aux administrateurs une gestion complète des contenus, utilisateurs et opérations.

🚀 Fonctionnalités
♻️ Gestion du recyclage des déchets en engrais

👤 Interfaces dédiées pour Administrateur et Utilisateur

💳 Intégration avec Stripe pour les paiements sécurisés

📊 Système de réactions, statistiques et contenu généré par les utilisateurs

🖼️ Téléversement d’images, publications d’articles

🌐 Interface responsive et intégrée avec Symfony

🔐 Authentification et gestion des autorisations

📦 Architecture prête à intégrer d'autres APIs

🛠️ Stack Technique
Langage : PHP

Framework : Symfony 6.4

Base de données : MySQL via XAMPP

Serveur : Symfony CLI (symfony server:start)

Intégrations : Stripe, Mailer, et autres APIs via .env

Frontend & Backend dans le même projet Symfony

⚙️ Installation & Configuration

1. Cloner le dépôt :
git clone https://github.com/votre-utilisateur/EcoWay-Symfony.git
cd ecoway
2. Installer les dépendances :
composer install
3. Configurer les variables d’environnement dans .env :
DATABASE_URL="mysql://root:@127.0.0.1:3306/ecoway"
STRIPE_SECRET_KEY=votre_cle_secrete
STRIPE_PUBLIC_KEY=votre_cle_publique
4. Créer la base de données et lancer les migrations :
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
5. Créer un administrateur dans la table user manuellement ou via formulaire.
6. Lancer le serveur Symfony :
symfony server:start

👥 Rôles Utilisateurs

Administrateur : Gère les posts, produits, commandes, dépots, événements et utilisateurs.

Utilisateur : Peut consulter les articles, réagir, participer aux événements, consulter points de dépots et passer des commandes.

📁 Structure du Projet (Parties Clés)

src/Entity – Entités Doctrine

src/Controller – Contrôleurs Symfony

templates/ – Vues Twig

public/uploads/images/ – Images uploadées pour les publications

config/packages/ – Fichiers de configuration (Stripe, Mailer…)

🤝 Contribution
Les contributions sont les bienvenues ! Forkez le projet, proposez des idées, corrigez des bugs, ou ajoutez de nouvelles fonctionnalités via une Pull Request.

📄 Licence
Ce projet est sous licence MIT.
Vous pouvez l’utiliser, le modifier et le partager librement avec attribution.

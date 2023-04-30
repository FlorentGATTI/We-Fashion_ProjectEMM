We Fashion développée avec Laravel.
Ce projet a été réalisé dans le cadre du Contrat de Professionnalisation Développeur Multimédia à l'École Multimédia. Il s'agit d'une boutique en ligne de vêtements pour hommes et femmes de créateurs nommée We Fashion. Le but est de développer les pages publiques de la boutique ainsi que la partie administration des produits.

Contraintes
Le site web doit être développé uniquement en utilisant le framework Laravel et la base de données MySQL côté serveur. Le développement doit répondre aux demandes décrites dans le cahier des charges. Le panier des utilisateurs n'est pas à développer.

We Fashion vend des vêtements homme et femme de créateurs.
Dans le futur, cette plateforme a pour but d’être multicanal : boutique en ligne ou en VR, sur mobile, via un agent conversationnel.

C’est pour cette raison que le développement est fait en interne et n’utilise pas de système classique de e-commerce (type magento) 

Installation
Cloner le dépôt : git clone https://github.com/FlorentGATTI/We-Fashion_ProjectEMM/tree/main/WeFashion
Installer les dépendances : composer install
Copier le fichier .env.example et le renommer .env
Générer la clé d'application : php artisan key:generate
Configurer les informations de la base de données dans le fichier .env
Migrer la base de données : php artisan migrate --seed ou php artisan db:seed --class=DatabaseSeeder pour ajouter les 80 produits crée au préalable. 
Démarrer le serveur : php artisan serve
N'oublier pas de vider les caches avec "composer dumpautoload " si besoin après php artisan db:seed --class=DatabaseSeeder

Administration
L'administration de la boutique est accessible à l'URL /admin. Les identifiants par défaut sont edouard@admin.com et password.

Licence
We Fashion est un logiciel open-source sous licence MIT. Voir le fichier LICENSE pour plus d'informations.
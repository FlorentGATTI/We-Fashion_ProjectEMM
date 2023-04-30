<h1 align="center">We Fashion - Boutique en ligne de vêtements pour hommes et femmes</h1>
<p align="center">
  <i>Ce projet a été réalisé dans le cadre du Contrat de Professionnalisation Développeur Multimédia à l'École Multimédia. Il s'agit d'une boutique en ligne de vêtements pour hommes et femmes de créateurs nommée We Fashion. Le but est de développer les pages publiques de la boutique ainsi que la partie administration des produits.</i>
</p>
<h2>Contraintes</h2>
<p>
  Le site web doit être développé uniquement en utilisant le framework Laravel et la base de données MySQL côté serveur. Le développement doit répondre aux demandes décrites dans le cahier des charges. Le panier des utilisateurs n'est pas à développer.
</p>
<p>
  We Fashion vend des vêtements homme et femme de créateurs. Dans le futur, cette plateforme a pour but d’être multicanal : boutique en ligne ou en VR, sur mobile, via un agent conversationnel. C’est pour cette raison que le développement est fait en interne et n’utilise pas de système classique de e-commerce (type Magento).
</p>
<h2>Installation</h2>
<ol>
  <li>Cloner le dépôt : <code>git clone https://github.com/FlorentGATTI/We-Fashion_ProjectEMM/tree/main/WeFashion</code></li>
  <li>Installer les dépendances : <code>composer install</code></li>
  <li>Copier le fichier <code>.env.example</code> et le renommer <code>.env</code></li>
  <li>Générer la clé d'application : <code>php artisan key:generate</code></li>
  <li>Configurer les informations de la base de données dans le fichier <code>.env</code></li>
  <li>Migrer la base de données : <code>php artisan migrate --seed</code> ou <code>php artisan db:seed --class=DatabaseSeeder</code> pour ajouter les 80 produits créés au préalable.</li>
  <li>Démarrer le serveur : <code>php artisan serve</code></li>
  <li>N'oubliez pas de vider les caches avec <code>composer dumpautoload</code> si besoin après <code>php artisan db:seed --class=DatabaseSeeder</code>.</li>
</ol>
<h2>Administration</h2>
<p>
  L'administration de la boutique est accessible à l'URL <code>/admin</code>. Les identifiants par défaut sont <code>edouard@admin.com</code> et <code>password</code>.
</p>
<h2>Licence</h2>
<p>
  We Fashion est un logiciel open-source sous licence MIT. Voir le fichier <code>LICENSE</code> pour plus d'informations.
</p>
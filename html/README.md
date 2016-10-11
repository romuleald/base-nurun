# installation
1. NodeJS (dernière version 4) et php 5.6 requis, installer wamp ou easyphp
2. dans le fichier php.ini décommenter "extension=php_openssl.dll"
3. télécharger et installer "composer setup" https://getcomposer.org/download/
4. redémarrer phpstorm si besoin (1er install)

# commandes uniques d’installation
1. `npm install`
2. `composer install`
3. `npm install grunt -g`
4. `npm install webpack -g`

# commandes pour développer
1. `npm run wp -- --watch` (watch js)
2. `grunt fw` (css)
3. `grunt uglify` (build vendors.min.js)

# commande avant mise en prod
1. `grunt build` (build all.mins.css & vendors.min.js)
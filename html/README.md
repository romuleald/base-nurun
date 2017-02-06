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
1. `npm run wpd` (compile & watch js via webpack)
2. `npm run dev` (run `wpd` and `grunt fw`)
3. `grunt fw` (compile & watch css)
4. `npm run wp` (compile js (uglified) via webpack & grunt uglify)
5. `npm run css` (sass:dev, combine media queries, postcss/autoprefixer)

# commande avant mise en prod
1. `npm run build` (`run wp` & sass:prod, combine media queries, postcss/autoprefixer)
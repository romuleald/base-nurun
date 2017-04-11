# installation
1. NodeJS (dernière version 4 ou plus) et php 5.6 requis, installer easyphp
2. dans le fichier php.ini décommenter "extension=php_openssl.dll"
3. télécharger et installer "composer setup" https://getcomposer.org/download/
4. redémarrer phpstorm si besoin (1er install)

# commandes uniques d’installation obligatoires
1. `npm install` (peut être à relancer en cas de mise à jour du package.json)
2. `composer install`
3. `npm install grunt-cli -g` (à ne faire qu'un fois)
4. `npm install webpack -g` (à ne faire qu'un fois)

# commandes pour développer
1. `npm run wpd` (compile & watch js via webpack)
2. `npm run dev` (run `wpd` and `grunt fw`)
3. `grunt fw` (compile & watch css)
4. `npm run wp` (compile js (uglified) via webpack & grunt uglify)
5. `npm run css` (sass:dev, combine media queries, postcss/autoprefixer)
5. `npm run cm` (create module, a CLI interface to create (web)module)

# commande avant mise en prod
1. `npm run build` (`run wp` & sass:prod, combine media queries, postcss/autoprefixer)

# pour switcher du mode debug au mode prod (avec fichiers minifiés)
1. rajouter `prod` dans l'url
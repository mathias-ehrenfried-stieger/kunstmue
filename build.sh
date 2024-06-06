#!/bin/sh
npx sass ./src/sass/style.scss ./public/wp-content/themes/kunstmue/style.css
cp ./src/index.php ./public/wp-content/themes/kunstmue
cp ./src/page-about.php ./public/wp-content/themes/kunstmue
cp ./src/page-contact.php ./public/wp-content/themes/kunstmue
cp ./src/page-line-up.php ./public/wp-content/themes/kunstmue
cp ./src/page-partner.php ./public/wp-content/themes/kunstmue
cp ./src/page-facts.php ./public/wp-content/themes/kunstmue
cp ./src/page-galerie.php ./public/wp-content/themes/kunstmue
cp ./src/page-imprint.php ./public/wp-content/themes/kunstmue
cp ./src/page-agb.php ./public/wp-content/themes/kunstmue

cp ./src/front-page.php ./public/wp-content/themes/kunstmue
cp ./src/favicons/*.* ./public/wp-content/themes/kunstmue
cp ./src/php/*.* ./public/wp-content/themes/kunstmue
# cp ./src/screenshot.png ./public/wp-content/themes/kunstmue
cp -R ./src/images ./public/wp-content/themes/kunstmue/
cp -R ./src/fonts ./public/wp-content/themes/kunstmue/
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/kunstmue/main.js  --minify


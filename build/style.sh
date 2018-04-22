node-sass \
  --importer 'node_modules/node-sass-globbing' \
  scss/style.scss \
| postcss \
  --use autoprefixer -b 'last 2 versions, > 1%, ie8' \
  --output www/assets/style/style.css

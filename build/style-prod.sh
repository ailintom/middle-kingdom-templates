node-sass \
  --importer 'node_modules/node-sass-globbing' \
  scss/style.scss \
| postcss \
  --no-map \
  --use autoprefixer -b 'last 2 versions, > 1%, ie8' \
  --use postcss-csso \
  --output www/assets/style/style.css

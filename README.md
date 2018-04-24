# “Persons and Names of the Middle Kingdom” Templates

Design and templates (with some mock content) for the web frontend of the Egyptological database “Persons and Names of the Middle Kingdom”.

All parts that require examination when creating an application based on these templates are marked with `TODO`.

## Prerequisites

To run this project, a web server with at least PHP 5.6 (7.0 or higher recommended) is required.

For development, [npm](https://www.npmjs.com/get-npm) must be installed locally. Install all dependencies by executing `npm i` in your preferred shell.

> If you are on Windows, use `bash` for the build scripts with `npm config set script-shell "C:\\Program Files\\Git\\bin\\bash.exe"` (assuming [Git](https://git-scm.com/download/win) is already installed).

Then run `npm run build` to compile everything and serve the `www` directory.

## Configuration

Set `BASE` in `www/inc/config.php` to be used as the base path for assets and links.

## Compiling

Transpile all source files, watch for changes and hot-reload assets via a Browsersync proxy with `npm run dev`. Remember to update the dev server URL in `browsersync.js`.

Lint, transpile and minify CSS and JS for production with `npm run build`.

See `package.json` and `build` directory for additional build scripts.

## Hints

For a list of all templates, open `www/templates.php`.

### CSS class names

Only tags and classes are used for styling. CSS classes are named following a variant of the [BEM naming scheme](http://getbem.com/naming/) naming scheme: `block_element -modifier` (compare BEM: `block__element block__element--modifier`). Note the dash prepended to the modifier instead of repeating block and element. In some cases, modifiers are directly applied to tags (e.g. `th.-highlight`).

### Toggling form filters

To show form filters on load, add the class `-active` to the button as well as to the corresponding filter, and update the `aria-expanded` attribute on the the button:

```HTML
<button class="filters_button -active" aria-expanded="true">...</button>
...
<div class="filter -active">...</div>
```

## License

This repository is licensed under the [MIT license](LICENSE), with these exceptions:

- All demo content is licensed as [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/), created by Alexander Ilin-Tomich.
- The Roboto font family in `www/assets/fonts` is licensed under the [Apache License 2.0](http://www.apache.org/licenses/LICENSE-2.0).
- Icons in `www/assets/icons` are licensed as [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/). Hieroglyph icons were created by [Aspectis](https://aspectis.net), some based on glyphs from Google’s [Noto Sans Egyptian Hieroglyphs](https://www.google.com/get/noto/#sans-egyp), which is licensed under the [SIL Open Font License](http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL). All other icons are taken from Perxis’ [Linearicons](https://linearicons.com) icon font (some edited).
- Logos in `www/assets/logos` are the property of their respective owners.

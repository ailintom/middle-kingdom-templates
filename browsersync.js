module.exports = {
  files: ['www'],
  open: false,
  // NOTE: Replace proxy with your dev server’s URL
  proxy: 'http://localhost/middle-kingdom/www/',
  serveStatic: ['www'],
  snippetOptions: {
    rule: {
      match: /<\/footer>/,
      fn: function (snippet, match) {
        return snippet + match
      }
    }
  }
}

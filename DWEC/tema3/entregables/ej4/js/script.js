const result = document.getElementById('result')
const uri = "http://myfpschool.com"

result.innerHTML = `Texto de ejemplo: ${uri}<br><br>`
    + `<b>encodeURI()</b> => ${encodeURI(uri)}<br>`
    + `<b>encodeURIComponent()</b> => ${encodeURIComponent(uri)}`
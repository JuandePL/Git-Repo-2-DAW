let https;
try {
    https = require('node:https');
    console.log('https funciona!');
} catch (err) {
    console.log('https no funciona!');
}
import './bootstrap';

let height = (window.innerHeight - 127 ).toString() + 'px';

const fm = document.getElementById('fm');

fm.style.height = height;

console.log('Welcome to Laravel File Manager!');
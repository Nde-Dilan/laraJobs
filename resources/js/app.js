import './bootstrap';
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

//Dark Mode

let sunBtn = document.querySelector('.sun');
let htmlEl = document.querySelector('html');

sunBtn.addEventListener('click',()=>{
    htmlEl.classList.toggle('dark');
    htmlEl.classList.contains("dark") ?
    sunBtn.setAttribute('fill','white') :  sunBtn.setAttribute('fill','black');
})
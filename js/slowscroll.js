function scrollTo(element) {
    window.scroll({
        left: 0,
        top: element.offsetTop,
        behavior: 'smooth'
    })
}


var button = document.querySelector('.header_btn');
var former = document.querySelector('.form');

button.addEventListener('click', ()=>{
    scrollTo(former);
})
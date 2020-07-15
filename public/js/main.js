
var header = document.querySelector("header");
    var headerBg = header.getElementsByClassName("header-bg")[0];
    var hero = document.getElementById("hero");
    headerBg.style.opacity = 0 ;
    window.addEventListener("scroll", () => {
    height = 2 * hero.offsetHeight / 3;
    headerBg.style.opacity = window.scrollY / height ;
});

var navBtn= document.querySelector('.nav-btn')
var burger= document.querySelector('.btn-burger2')
var menu=document.querySelector('.nav-menu')
var isOpen=false

navBtn.addEventListener('click',toggleOpen)
document.querySelectorAll('.nav-menu_item').forEach(
    element=> element.addEventListener('click',toggleOpen)
)
window.addEventListener('resize',()=> {
    if (isOpen && window.innerWidth> 1000) {
        navBtn.classList.remove('open')
        burger.classList.remove('open')
        menu.classList.remove('open')
        headerBg.classList.remove('open')
        isOpen=false
    }
})
var toggleOpen=()=>{
    if (isOpen) {
        navBtn.classList.remove('open')
        burger.classList.remove('open')
        menu.classList.remove('open')
        headerBg.classList.remove('open')
        isOpen=false
    } else {
        navBtn.classList.add('open')
        burger.classList.add('open')
        menu.classList.add('open')
        headerBg.classList.add('open')
        isOpen=true
    }
}

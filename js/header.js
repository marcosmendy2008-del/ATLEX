let ultimoScroll = 0;
const header = document.querySelector("header");

window.addEventListener("scroll",()=>{
    let actual = window.scrollY;
    if(actual > ultimoScroll && actual > 120){
        header.classList.add("oculto");
    }
    else{
        header.classList.remove("oculto");
    }
    ultimoScroll = actual;});
/* menu mobile */

let bmenu = document.querySelector(".nav-icon");
let lmenu = document.querySelector(".menu");

bmenu.addEventListener('click', e => {showMenu()});

function showMenu(){
    if(bmenu.className === "nav-icon"){
        bmenu.className += " active";
        lmenu.className += " active";
    }

    else{
        bmenu.className = "nav-icon";
        lmenu.className = "menu";
    }
}
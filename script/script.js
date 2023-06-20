/* inserir header e footer */
function htmlSections() {   
    $('.wrapper').append(
        '<!-- header --><header> <div class="desktop-menu"> <a href="./culturamaker.html" class="header-link hover-u">Cultura Maker</a> <a href="./projetos.html" class="header-link hover-u">Projetos</a> <a href="./" class="hover-u"><img src="./img/logo.png" alt="CITec - IFRS Logo"></a> <a href="./agenda.html" class="header-link hover-u">Agenda</a> <a href="./sobre.html" class="header-link hover-u">Sobre</a> </div> <div class="mobile-menu"> <a href="./"><img src="./img/logo.png" alt="CITec - IFRS Logo"></a> <div class="nav-icon" onclick="showMenu()"> <span></span> <span></span> <span></span> </div> <ul class="menu"> <li class="list"><a href="./culturamaker.html" class="header-link hover-u">Cultura Maker</a></li> <li class="list"><a href="./projetos.html" class="header-link hover-u">Projetos</a></li> <li class="list"><a href="./agenda" class="header-link hover-u">Agenda</a></li> <li class="list"><a href="./sobre.html" class="header-link hover-u">Sobre</a></li> </ul> </div> </header>'
    );
    $('.wrapper').append(
        '<!-- footer --><footer> <div class="footer-left"> <div><a href="./"><img src="./img/logo-png.png" alt="CITec - IFRS Logo"></a></div> <p>Centro de Integração Tecnológica - IFRS</p> <div class="footer-links"> <a href="./" class="link-1"><span class="hover-u">Início</span></a> <a href="./culturamaker.html"><span class="hover-u">Cultura Maker</span></a> <a href="./projetos.html"><span class="hover-u">Projetos</span></a> <a href="./agenda.html"><span class="hover-u">Agenda</span></a> <a href="./sobre.html"><span class="hover-u">Sobre</span></a> </div> <div> <!-- local icon--> <p><span>R. Eng. Alfredo Huck, 475</span> Rio Grande, RS</p> </div> <div> <!-- tel icon--> <p>(53) 3233-8603</p> </div> <div> <!-- email icon--> <p><a href="mailto:citec@riogrande.ifrs.edu.br">citec@riogrande.ifrs.edu.br</a></p> </div> </div> <div class="footer-right"> <p class="footer-about"> <span>Sobre o CITec</span> O Centro de Integração Tecnológico (CITec), é um espaço de intersecção entre ensino, pesquisa e extensão, que atende tanto a comunidade interna quanto a externa do campus, na capacitação e execução de desenvolvimento de soluções e novas tecnologias em produtos e serviços, tendo como base conceitos de Cultura Maker, Ciência Cidadã e Sustentabilidade. </p> <div class="footer-icons"> <a href="./"><!-- rede icon --></a> <a href="./"><!-- rede icon --></a> <a href="./"><!-- rede icon --></a> <a href="./"><!-- rede icon --></a> </div> </div> </footer>'
    );
}

window.onload = htmlSections;

/* querySelector const */
const qs = (val) => {
    return document.querySelector(val)
}

/* menu mobile */
function showMenu() {
    let buttonMenu = qs(".nav-icon");
    let listMenu = qs(".menu");

    if (buttonMenu.className === "nav-icon") {
        buttonMenu.className += " active";
        listMenu.className += " active";
    }
    else {
        buttonMenu.className = "nav-icon";
        listMenu.className = "menu";
    }
}
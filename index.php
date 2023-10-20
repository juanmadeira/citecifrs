<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./img/icon.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
        <link rel="stylesheet" href="./style/index.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="./script/script.js" defer></script>
        <title>Início | CITec IFRS</title>
    </head>
    <body>
        <!-- navbar -->
        <?php
            include('./view/nav.php');
        ?>
        <!-- conteúdo principal -->
        <main>
            <div class="owl-carousel owl-theme inicio-carousel">
                <div class="item">
                    <img src="./img/citec-3.jpg" alt="CITec" />
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line"></div>
                                <h2>Projeto de ensino</h2>
                                <h1>CULTURA MAKER</h1>
                                <h4>Inscrições abertas para o minicurso de Impressão 3D</h4>
                                <a href="./culturamaker.php"><button type="button" class="btn btn-outline-success">Saiba mais</button></a>
                            </div>
                        </div>
                    </div>
                </div>                    
                <div class="item">
                    <img src="./img/citec-1.jpg" alt="CITec" />
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Projeto de extensão</h2>
                                <h1>TECNOMAKER 4.0</h1>
                                <h4>Oficina de Programação, Robótica e Modelagem 3D</h4>
                                <a href="./tecnomaker.php"><button type="button" class="btn btn-outline-success">Saiba mais</button></a>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="item">
                    <img src="./img/citec-2.jpg" alt="CITec" />
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Desenvolva o seu projeto</h2>
                                <h1>OPEN DAY</h1>
                                <h4>Reserve já seu horário!</h4>
                                <a href="./agenda.php"><button type="button" class="btn btn-outline-success">Clique e confira</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="pt-3 pb-5">
                <div class="container">
                    <h1 class="fw-light">Início</h1>
                    <p>O Centro de Integração Tecnológica (CITec) compõe o Habitat de Inovação do IFRS Campus Rio Grande, tendo como o propósito ofertar um espaço de intersecção entre ensino, pesquisa e extensão, atendendo as comunidades interna e externa do campus na capacitação e execução de desenvolvimento de soluções para produtos e serviços, tendo como base conceitos de Cultura Maker, Ciência Cidadã e Sustentabilidade. Centrado nas experiências no tríade ensino-pesquisa-extensão, o projeto do CITec está estruturado em espaços flexíveis e colaborativos pensados para suportar diferentes iniciativas, voltado para o desenvolvimento e materialização de ideias, onde o indivíduo atua de modo criativo e autônomo, protagonista em todas as etapas, com o suporte da equipe no planejamento, criação, projeto, manufatura e análise da solução, concluindo o ciclo de desenvolvimento do produto.</p>
                    <div class="owl-carousel lab-carousel">
                        <div class="item">
                            <img src="./img/citec-1.jpg" alt="CITec" />
                        </div>
                        <div class="item">
                            <img src="./img/citec-2.jpg" alt="CITec" />
                        </div>
                        <div class="item">
                            <img src="./img/citec-3.jpg" alt="CITec" />
                        </div>
                        <div class="item">
                            <img src="./img/citec-4.jpg" alt="CITec" />
                        </div>
                        <div class="item">
                            <img src="./img/citec-5.jpg" alt="CITec" />
                        </div>
                    </div>
                    <p class="php-error">Neste espaço estão as máquinas de fabricação digitais e tradicionais, computadores para desenvolvimento e espaço para armazenamento dos projetos. Idealizado em 2019 como um Espaço Maker para atividades de ensino interdisciplinares, propiciando aos discentes atuarem como protagonistas na idealização, operação e validação de experimentos, tem-se em 2022 a consolidação do projeto do Habitat de Inovação Tecnológica. No momento, o CITec está aberto e disponível para todos os alunos e professores dos cursos integrados, subsequentes e superiores do IFRS. Contamos hoje com cinco impressoras 3D, máquina de corte a laser, CNC e eletrônicos como Arduíno e diversos tipos de sensores.</p>
                </div>
                <div class="container">
                    <h2 class="fw-light">Equipamentos</h1>
                    <div class="owl-carousel owl-theme equip-carousel">
                        <div class="item">
                            <div class="item-image">
                                <img src="./img/equipamentos/equip-flashforge-3d-finder.png" alt="Impressora 3D Flashforge" />
                            </div>
                            <div class="item-text">
                                <span class="item-title">IMPRESSORA 3D FLASHFORGE</span>
                                <span class="item-info">
                                    <p>Modelo: Finder</p>
                                    <p>Volume de impressão: 190x195x200mm</p>
                                    <p>Materiais: PLA e ABS</p>
                                    <p>Força: 65W</p>
                                </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="./img/equipamentos/equip-creality-3d-cr10.png" alt="Impressora 3D Creality" />
                            </div>
                            <div class="item-text">
                                <span class="item-title">IMPRESSORA 3D CREALITY</span>
                                <span class="item-info">
                                    <p>Modelo: CR-10 V2</p>
                                    <p>Tamanho de construção: 300x300x300mm</p>
                                    <p>Materiais: PLA, ABS, PETG,</p>
                                    <p>Flexible, entre outros</p>
                                    <p>Tecnologia de moldagem: FDM</p>
                                    <p>Força: 350W</p>
                                </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="./img/equipamentos/equip-sethi-3d-s3.png" alt="Impressora 3D Sethi3D" />
                            </div>
                            <div class="item-text">
                                <span class="item-title">IMPRESSORA 3D SETHI3D</span>
                                <span class="item-info">
                                    <p>Modelo: S3</p>
                                    <p>Área de impressão: 270x270x320mm</p>
                                    <p>Materiais: PLA, ABS, PETG,</p>
                                    <p>Flexible, entre outros</p>
                                    <p>Tecnologia de moldagem: FDM</p>
                                </span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="./img/equipamentos/equip-laser-cutter-rl6040.png" alt="Cortador a laser" />
                            </div>
                            <div class="item-text">
                                <span class="item-title">CORTADOR A LASER</span>
                                <span class="item-info">
                                    <p>Modelo: RL6040 B1</p>
                                    <p>Área de trabalho: 600mm x 400mm</p>
                                    <p>Opções de refrigeração: Water pump, Chiller CW3000 ou Chiller, CW5000 ou CW5200
                                    <p>Vidro selado de CO₂</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="parallax-banner">
                <h2>Conheça os nossos projetos!</h2>
            </div>
            <section class="projetos py-5">
                <div class="container">
                    <h2 class="fw-light">Cultura Maker</h2>
                    <div class="card culturamaker">
                        <div class="img-box"><img src="./img/logo-cultura.png" class="img-fluid p-3" /></div>
                        <p>Baseando-se na ideia de que as pessoas devem ser capazes da fabricar, construir, reparar e alterar objetos dos mais variados tipos e com diversas funções, o Cultura Maker é um projeto ensino aberto para a comunidade acadêmica do IFRS Campus Rio Grande. É uma ótima oportunidade para desenvolver a criatividade através dos minicursos de modelagem, impressão 3D, corte à laser e Arduíno. As oficinas são abertas pra toda a comunidade acadêmica do IFRS - Campus Rio Grande, alunos do integrado, subsequente, superior e também para os professores do campus.</p>
                    </div>
                </div>
                <div class="container">
                    <h2 class="fw-light">TecnoMaker 4.0</h2>
                    <div class="card tecnomaker">
                        <div class="img-box"><img src="./img/logo-tecnomaker.png" class="img-fluid p-3" /></div>
                        <p>O TecnoMaker 4.0 é um projeto de extensão, ou seja, voltado para as pessoas que não estudam ou trabalham no IFRS - Campus Rio Grande. É focado na iniciação tecnológica nas escolas públicas de ensino fundamental de Rio Grande. Dentre os temas a serem abordados nas oficinas estão: pensamento computacional, robótica e Cultura Maker.</p>
                    </div>
                </div>
            </section>
        </main>
        <!-- footer -->
        <?php
            include('./view/footer.php');
        ?>
    </body>
</html>
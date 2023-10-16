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
        <link rel="stylesheet" href="./style/cadastro.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="./script/script.js" defer></script>
        <title>Cadastro de Projeto | CITec IFRS</title>
    </head>
    <body>
        <!-- navbar -->
        <?php
            include('./view/nav.php');
        ?>
        <!-- conteúdo principal -->
        <main>
            <section class="py-5">
                <div class="container">
                    <h1 class="fw-light text-center mb-3">Cadastro de Projeto</h1>
                    <form class="m-auto py-3" name="form" id="form" method="POST" action="https://api.sheetmonkey.io/form/3T7TK99jjw5rxbisC2Qn4y">
                        <fieldset>
                            <legend class="mb-3"><span class="bubble">1</span> Informações do aluno</legend>
                            <label class="mb-2" for="name">Nome completo:</label>
                            <div id="fillmessage-name">Preencha corretamente este campo obrigatório!</div>
                            <input class="mb-3" type="text" name="nome" id="name" placeholder="Insira seu nome..." required />
                            <label class="mb-2" for="email">Endereço de e-mail:</label>
                            <div id="fillmessage-email">Preencha corretamente este campo obrigatório!</div>
                            <input class="mb-3" type="email" name="email" id="email" placeholder="Insira seu e-mail..." required />    
                        </fieldset>
                        <fieldset>
                            <legend class="mb-3"><span class="bubble">2</span> Informações do projeto</legend>
                            <label class="mb-2" for="activity">Atividade:</label>
                            <span class="radio-options">
                                <input class="mb-3" type="radio" name="atividade" id="individual" value="individual" required /> Individual
                                <input class="mb-3" type="radio" name="atividade" id="grupo" value="grupo" /> Grupo
                            </span>
                            <span class="datas">
                                <label class="mb-2" for="date" id="dataTitulo1">Data de início do projeto:</label>
                                <input class="mb-3" type="date" name="data-inicio" id="dataCampo1" />
                                <label class="mb-2" for="date" id="dataTitulo2">Data de término do projeto:</label>
                                <input class="mb-3" type="date" name="data-termino" id="dataCampo2" />
                            </span>
                            <label class="mb-2" for="area">Área de atuação:</label>
                            <select class="mb-3" id="area" name="area">
                                <option value="arte_criatividade">Arte e Criatividade</option>
                                <option value="mecatronicos">Dispositivos Mecatrônicos</option>
                                <option value="instrumentos_musicais">Instrumentos Musicais</option>
                                <option value="design">Design</option>
                                <option value="robotica">Robótica</option>
                                <option value="mecanica">Mecânica</option>
                                <option value="eletronica">Eletrônica</option>
                                <option value="eletronica">Mecânica</option>
                                <option value="arquitetura">Arquitetura</option>
                                <option value="design_de_objetos">Design de Objetos</option>
                                <option value="artes_visuais">Artes Visuais</option>
                                <option value="artes_cenicas">Artes Cênicas</option>
                                <option value="mobiliario">Mobilário</option>
                                <option value="acessibilidade">Acessibilidade</option>
                                <option value="empreendimento">Empreendimento</option>
                            </select>
                            <p>Envie uma imagem do seu projeto:</p>
                            <label class="mb-3 file-button" for="image">
                                <input type="file" id="image" name="image" accept="image/png, image/jpeg" />
                            </label>
                            <label class="mb-2" for="about">Equipamentos utilizados:</label>
                            <div id="fillmessage-equip">Preencha corretamente este campo obrigatório!</div>
                            <textarea class="mb-3" name="equipamentos" id="equip" placeholder="Equipamentos / insumos utilizados na(s) atividade(s)..." rows="3" required></textarea>
                            <label class="mb-2" for="about">Descrição:</label>
                            <textarea class="mb-3" name="descricao" placeholder="Sobre o seu projeto..." rows="6"></textarea>
                            
                        </fieldset>
                        <input type="submit" value="Enviar" onclick="return validateForm();" />
                    </form>
                </div>
            </section>
        </main>
        <!-- footer -->
        <?php
            include('./view/footer.php');
        ?>
    </body>
</html>
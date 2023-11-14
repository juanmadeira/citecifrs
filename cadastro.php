<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./img/citec-icon.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
        <link rel="stylesheet" href="./style/cadastro.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <title>Cadastro de Projeto | CITec IFRS</title>
    </head>
    <body>
        <!-- navbar -->
        <?php
            include('./view/nav.php');
        ?>
        <!-- conteúdo principal -->
        <main>
            <section class="py-3">
                <div class="container">
                    <div class="pb-2"><span class="page-history"><a href="./index.php">Início</a> / </span><span class="page-history-current">Cadastro de Projeto</span></div>
                    <h1 class="fw-light text-center mb-3">Cadastro de Projeto</h1><!-- https://api.sheetmonkey.io/form/mKiHbmvLafPkYe9G2BcpXU --->
                    <form class="m-auto py-3" name="form" id="form" enctype="multipart/form-data" method="POST" action="./config/projeto_upload.php">
                        <?php if (isset($_GET['error'])): ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php endif ?>
                        <fieldset>
                            <legend class="mb-3"><span class="bubble">1</span> Informações do aluno</legend>
                            <!-- nome -->
                            <label class="mb-2" for="name">Nome completo:</label>
                            <input class="mb-3" type="text" name="nome" id="name" placeholder="Insira seu nome..." />
                            
                            <!-- e-mail -->
                            <label class="mb-2" for="email">Endereço de e-mail:</label>
                            <input class="mb-3" type="email" name="email" id="email" placeholder="Insira seu e-mail..." />
                        </fieldset>
                        <fieldset>
                            <legend class="mb-3"><span class="bubble">2</span> Informações do projeto</legend>
                            <!-- tipo de atividade -->
                            <label class="mb-2" for="activity">Atividade:</label>
                            <span class="radio-options">
                                <input class="mb-3" type="radio" name="atividade" value="individual" id="individual" /> Individual
                                <input class="mb-3" type="radio" name="atividade" value="grupo" id="grupo" /> Grupo
                            </span>
                            
                            <!-- datas de início e término do projeto -->
                            <span class="datas row">
                                <span class="col">
                                    <label class="mb-2" for="date" id="dataTitulo1">Data de início do projeto:</label>
                                    <input class="mb-3" type="date" name="dataInicio" id="dataCampo1" />
                                </span>
                                <span class="col">
                                    <label class="mb-2" for="date" id="dataTitulo2">Data de término do projeto:</label>
                                    <input class="mb-3" type="date" name="dataTermino" id="dataCampo2" />
                                </span>
                            </span>

                            <!-- área de atuação -->
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

                            <span class="row mt-3">
                                <span class="col">
                                    <!-- imagem -->
                                    <p>Envie uma imagem do seu projeto (.jpg, .jpeg, .png):</p>
                                    <label class="mb-5 file-button" for="image">
                                        <input type="file" name="imagem" id="image" accept="image/png, image/jpg, image/jpeg" />
                                    </label>
                                </span>
                                <span class="col">
                                    <!-- cadFile -->
                                    <p>Envie o modelo CAD do seu projeto (.dxf, .dwg):</p>
                                    <label class="mb-5 file-button" for="modelo">
                                        <input type="file" name="modelo" id="modelo" accept="dxf, dwg" />
                                    </label> 
                                </span>
                            </span>

                            <!-- equipamentos -->
                            <label class="mb-2" for="about">Equipamentos utilizados:</label>
                            <textarea class="mb-3" name="equipamentos" id="equip" placeholder="Equipamentos / insumos utilizados na(s) atividade(s)..." rows="3"></textarea>

                            <!-- descrição -->
                            <label class="mb-2" for="about">Descrição:</label>
                            <textarea class="mb-3" name="descricao" placeholder="Sobre o seu projeto..." rows="6"></textarea>

                             
                        </fieldset>
                        <input type="submit" name="submit" value="Enviar" />
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
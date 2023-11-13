<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/citec-icon.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
        <link rel="stylesheet" href="../style/projetos.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="../script/script.js" defer></script>
        <title>Galeria de Projetos | CITec IFRS</title>
    </head>
    <body>
        <!-- navbar -->
        <?php
            include('../view/nav.php');
        ?>
        <!-- conteúdo principal -->
        <main>
            <section class="py-3">
                <div class="container">
                    <div class="pb-2"><span class="page-history"><a href="../index.php">Início</a> / <a href="../projetos.php">Galeria de Projetos</a> / </span><span class="page-history-current">Projeto 1</span></div>
                    <h1 class="fw-light">Projeto 1</h1>
                    <div class="row">
                        <!-- imagem do projeto -->
                        <span class="col p-5">
                            <div class="projeto-item d-flex">
                                <img class="img-fluid" src="../uploads-img/nome-sobrenome-2023-11-06-08.12.16.png" alt="Projeto 1">
                            </div>
                        </span>
                        <!-- informações do projeto -->
                        <span class="col-sm-3 d-flex flex-column justify-content-around p-3">
                            <span>
                                <p class="fw-bold fs-5">Área de atuação:</p>
                                <p>Arte e Criatividade</p>
                                <p class="fw-bold fs-5">Tipo de atividade:</p>
                                <p>Individual</p>
                            </span>
                            <span>
                                <p class="fw-bold fs-5">Data de início:</p>
                                <p>2023-01-01</p>
                                <p class="fw-bold fs-5">Data de término:</p>
                                <p>2023-12-31</p>
                            </span>
                        </span>
                    </div>
                    <div class="projeto-info d-flex flex-column flex-wrap justify-content-start">
                        <p class="fw-bold fs-5">Descrição:</p>
                        <p>.....</p>
                        <p class="fw-bold fs-5">Equipamentos utilizados:</p>
                        <p>.....</p>
                        <p class="fw-bold fs-5">Faça download do(s) arquivo(s)</p>
                        <p class="projeto-download"><a href=""><i class="bi bi-download p-3"></i>download.dxf</a></p>
                    </div>
                </div>
            </section>
        </main>
        <!-- footer -->
        <?php
            include('../view/footer.php');
        ?>
    </body>
</html>
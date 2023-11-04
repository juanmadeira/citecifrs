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
        <link rel="stylesheet" href="./style/projetos.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="./script/script.js" defer></script>
        <title>Galeria de Projetos | CITec IFRS</title>
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
                    <h1 class="fw-light mb-3">Galeria de Projetos</h1>
                    <div class="row">
                        <div class="p-4 col-lg-4 col-md-6 col-sm-12 gallery-item">
                            <img src="./img/3d-object-template.png" class="img-fluid mb-4" alt="Projeto 1" />
                            <h5 class="gallery-title">Projeto 1</h5>
                            <p class="gallery-text">Descrição do Projeto 1.</p>
                        </div>
                        <div class="p-4 col-lg-4 col-md-6 col-sm-12 gallery-item">
                            <img src="./img/3d-object-template.png" class="img-fluid mb-4" alt="Projeto 2" />
                            <h5 class="gallery-title">Projeto 2</h5>
                            <p class="gallery-text">Descrição do Projeto 2.</p>
                        </div>
                        <div class="p-4 col-lg-4 col-md-6 col-sm-12 gallery-item">
                            <img src="./img/3d-object-template.png" class="img-fluid mb-4" alt="Projeto 3" />
                            <h5 class="gallery-title">Projeto 3</h5>
                            <p class="gallery-text">Descrição do Projeto 3.</p>
                        </div>    
                        <div class="p-4 col-lg-4 col-md-6 col-sm-12 gallery-item">
                            <img src="./img/3d-object-template.png" class="img-fluid mb-4" alt="Projeto 3" />
                            <h5 class="gallery-title">Projeto 4</h5>
                            <p class="gallery-text">Descrição do Projeto 4.</p>
                        </div>
                        <div class="p-4 col-lg-4 col-md-6 col-sm-12 gallery-item">
                            <img src="./img/3d-object-template.png" class="img-fluid mb-4" alt="Projeto 3" />
                            <h5 class="gallery-title">Projeto 5</h5>
                            <p class="gallery-text">Descrição do Projeto 5.</p>
                        </div>
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
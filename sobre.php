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
        <link rel="stylesheet" href="./style/sobre.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="./script/script.js" defer></script>
        <title>Sobre | CITec IFRS</title>
    </head>
    <body>
        <!-- navbar -->
        <?php
            include('./view/nav.php');
        ?>
        <!-- conteúdo principal -->
        <main>
            <section class="py-5">
                <div class="container sobre">
                    <h1 class="fw-light">Sobre</h1>
                    <p>Conheça a nossa equipe CITec</p>
                    <div class="container equipe">
                        <figure class="p-2">
                            <img src="./img/equipe/profile-raquel.png" alt="Foto de Raquel" class="rounded-circle animate__animated animate__bounceIn" />
                            <figcaption class="py-2">
                                <p>Raquel Barbosa</p>
                                <p>Dra. em Ciência da Computação (UFRGS). Tem experiência na área de Inteligência Artificial, informática na educação, iniciação tecnológica e tecnologias assistivas.</p>
                            </figcaption>
                        </figure>
                        <figure class="p-2">
                            <img src="./img/equipe/profile-serguei.png" alt="Foto de Serguei" class="rounded-circle animate__animated animate__bounceIn" />
                            <figcaption class="py-2">
                                <p>Serguei Nogueira</p>
                                <p>Mestre em Eng. Mecânica (UFRGS). Tem experiência em instrumentação e ensaios, iniciação tecnológica, Cultura Maker e fabricação digital.</p>
                            </figcaption>
                        </figure>
                        <figure class="p-2">
                            <img src="./img/equipe/profile-fernanda.png" alt="Foto de Fernanda" class="rounded-circle animate__animated animate__bounceIn" />
                            <figcaption class="py-2">
                                <p>Fernanda Antoniolo</p>
                                <p>Doutora em Educação, CEO da INSIGHT Consultoria Educacional e Corporativa. Atua na área da neurociências com interface na educação, educação em saúde e no âmbito da gestão.</p>
                            </figcaption>
                        </figure>
                        <figure class="p-2">
                            <img src="./img/equipe/profile-mairon.png" alt="Foto de Mairon" class="rounded-circle animate__animated animate__bounceIn" />
                            <figcaption class="py-2">
                                <p>Mairon Belchior</p>
                                <p>Professor do IFRS Campus Rio Grande. Tem experiência na área de Ciência da Computação, atuando principalmente nas seguintes áreas: Sistemas Multi-Agentes, Jogos Computacionais e Simulação Baseada em Agentes.</p>
                            </figcaption>
                        </figure>
                        <figure class="p-2">
                            <img src="./img/equipe/profile-karine.png" alt="Foto de Karine" class="rounded-circle animate__animated animate__bounceIn" />
                            <figcaption class="py-2">
                                <p>Karine da Costa</p>
                                <p>Graduanda em Engenharia Mecânica.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="container iframeLoc">
                    <div class="row">
                        <iframe class="iframeMap mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6764.114534335918!2d-52.09150219424012!3d-32.04064131640538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95119c6b173eeb13%3A0xbaa8517ea9d4b26b!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20do%20Rio%20Grande%20do%20Sul%20-%20Campus%20Rio%20Grande!5e0!3m2!1spt-BR!2sbr!4v1650932798829!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="col-md">
                            <p><span class="bubble"><i class="bi bi-geo-alt-fill"></i></span> Nos encontre aqui!
                                <p>Rua Engenheiro Alfredo Huch, 475</p>
                                <p>Bairro Centro</p>
                                <p>CEP 96201-460</p>
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
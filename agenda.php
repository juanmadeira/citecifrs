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
        <script src="./script/script.js" defer></script>
        <title>Agenda | CITec IFRS</title>
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
                    <h1 class="fw-light mb-3">Agenda</h1>
                    <iframe class="mb-3" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23189f42&ctz=America%2FSao_Paulo&showTitle=0&showNav=0&showDate=0&showPrint=0&showTz=1&showCalendars=0&hl=pt_BR&showTabs=0&src=Y182ZDFiM2EwNmEyYTY2YjJhZTQ0YjFkMGI2MDE3YjI2ODJhOGJmM2MyNjZjN2ZkZjc4M2YyN2JlOWJhYWIyZDQyQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%238E24AA" style="border-width:0" width="100%" height="720" frameborder="0" scrolling="no"></iframe>                </div>
                </div>
                <div class="container">
                    <h2 class="fw-light mb-3">Contato</h1>
                    <p>Envie um e-mail para nossa equipe e reserve já o seu horário!</p>
                    <form name="form" id="form" method="POST" action="./config/send_mail.php">
                        <input type="email" name="email" id="email" class="form-control mail-field mb-3" placeholder="Insira seu e-mail..." required />
                        
                        <input type="text" name="subject" id="subject" class="form-control mb-3" placeholder="Insira o assunto..." required />
                        
                        <textarea name="mensagem" id="mensagem" class="form-control mb-3" rows="6" placeholder="Escreva a mensagem..." required></textarea>
                        
                        <input type="submit" value="Enviar" />
                    </form>
                </div>
        </main>
        <!-- footer -->
        <?php
            include('./view/footer.php');
        ?>
    </body>
</html>
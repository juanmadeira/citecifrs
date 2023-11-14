<?php
    include "db_conn.php";
    
    $error = "";

    // verif. campo descricao
    if (empty($_POST['descricao'])) {
        $error = "É necessário preencher corretamente o campo descrição.";
        header ("Location: ../cadastro.php?error=$error");
    } else {
        $descricao = $_POST['descricao'];
    }

    // verif. campo equipamentos
    if (empty($_POST['equipamentos'])) {
        $error = "É necessário preencher corretamente o campo equipamentos.";
        header ("Location: ../cadastro.php?error=$error");
    } else {
        $equipamentos = $_POST['equipamentos'];
    }

    // verif. campo modelo ** OPCIONAL
    $cad_name = $_FILES['modelo']['name'];
    $cad_size = $_FILES['modelo']['size'];
    $cad_tmp_name = $_FILES['modelo']['tmp_name'];
    $cad_error = $_FILES['modelo']['error'];
    if ($cad_error === 0) {
        // verifica se o tamanho do modelo é permitido
        if ($cad_size > 10000000) {
            $error = "O modelo enviado é muito grande.";
            header ("Location: ../cadastro.php?error=$error");
        } else {

            $cad_ex = pathinfo($cad_name, PATHINFO_EXTENSION);
            $cad_ex_lc = strtolower($cad_ex);

            // define extensões permitidas para o modelo
            $cad_allowed_exs = array("dxf", "dwg"); 

            if (in_array($cad_ex_lc, $cad_allowed_exs)) {
                // altera o nome do modelo
                date_default_timezone_set("Brazil/East");
                $cad_ext = strtolower(substr($_FILES['modelo']['name'],-4));
                $cad_novo_nome = preg_replace('/[ -]+/' , '-' , $_POST['nome']);

                $new_cad_name = $cad_novo_nome . "-" . date("Y-m-d-H.i.s") . $cad_ext;
                $cad_upload_path = '../uploads-cad/'.$new_cad_name;
                move_uploaded_file($cad_tmp_name, $cad_upload_path);
            } else {
                $error = "O formato de modelo é inválido.";
                header ("Location: ../cadastro.php?error=$error");
            }
        }
    } 

    // verif. campo imagem
    $img_name = $_FILES['imagem']['name'];
    $img_size = $_FILES['imagem']['size'];
    $tmp_name = $_FILES['imagem']['tmp_name'];
    $img_error = $_FILES['imagem']['error'];
    if ($img_error === 0) {
        // verifica se o tamanho da imagem é permitido
        if ($img_size > 10000000) {
            $error = "A imagem enviada é muito grande.";
            header ("Location: ../cadastro.php?error=$error");
        } else {

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            // define extensões permitidas para a imagem
            $allowed_exs = array("jpg", "jpeg", "png"); 

            if (in_array($img_ex_lc, $allowed_exs)) {
                // altera o nome da imagem
                date_default_timezone_set("Brazil/East");
                $ext = strtolower(substr($_FILES['imagem']['name'],-4));
                $novo_nome = preg_replace('/[ -]+/' , '-' , $_POST['nome']);

                $new_img_name = $novo_nome . "-" . date("Y-m-d-H.i.s") . $ext;
                $img_upload_path = '../uploads-img/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
            } else {
                $error = "O formato de imagem é inválido.";
                header ("Location: ../cadastro.php?error=$error");
            }
        }
    } else {
        $error = "É necessário enviar uma imagem.";
        header ("Location: ../cadastro.php?error=$error");
    }

    // verif. campo area
    if (empty($_POST['area'])) {
        $error = "É necessário selecionar uma das opções da área de atuação do projeto.";
        header ("Location: ../cadastro.php?error=$error");
    } else {
        $area = $_POST['area'];
    }

    // verif. campo datas
    if (empty($_POST['dataInicio'] || empty($_POST['dataTermino']))) {
        $error = "É necessário preencher corretamente os campos de início e fim do projeto.";
        header ("Location: ../cadastro.php?error=$error");
    } else {
        $dataTermino = $_POST['dataTermino'];
        $dataInicio = $_POST['dataInicio'];
    }

    // verif. campo atividade
    if (empty($_POST['atividade'])) {
        $error = "É necessário selecionar uma das opções do tipo de atividade.";
        header ("Location: ../cadastro.php?error=$error");
    } else {
        $atividade = $_POST['atividade'];
    }

    // verif. campo email
    if (empty($_POST['email'])) {
        $error = "É necessário preencher o campo email.";
        header ("Location: ../cadastro.php?error=$error");
    } else {
        $email = $_POST['email'];
    }

    // verif. campo nome
    if (empty($_POST['nome'])) {
        $error = "É necessário preencher o campo nome.";
        header ("Location: ../cadastro.php?error=$error");
/*     } else if (!preg_match('/^[a-zA-Z0-9]+/', $nome)) {
        $error = "Apenas letras e espaços são permitidos no campo nome.";
        header ("Location: ../cadastro.php?error=$error"); */
    } else { 
        $nome = $_POST['nome'];
    }

    if ($error === "") {
        $sql = "INSERT INTO projetos(nome, email, atividade, dataInicio, dataTermino, area, imagem, modelo, equipamentos, descricao) VALUES('$nome', '$email', '$atividade', '$dataInicio', '$dataTermino', '$area', '$new_img_name', '$new_cad_name', '$equipamentos', '$descricao')";
        mysqli_query($conn, $sql);
        header ("Location: ../cadastro-sucess.php");
    }
?>
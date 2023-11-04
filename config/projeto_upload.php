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

    // verif. campo imagem
    $img_name = $_FILES['imagem']['name'];
    $img_size = $_FILES['imagem']['size'];
    $tmp_name = $_FILES['imagem']['tmp_name'];
    $img_error = $_FILES['imagem']['error'];
    if ($img_error === 0) {
        if ($img_size > 10000000) {
            $error = "O arquivo enviado é muito grande.";
            header ("Location: ../cadastro.php?error=$error");
        } else {

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png"); 

            if (in_array($img_ex_lc, $allowed_exs)) {
                date_default_timezone_set("Brazil/East");
                $ext = strtolower(substr($_FILES['imagem']['name'],-4));
                $novo_nome = preg_replace('/[ -]+/' , '-' , $_POST['nome']);

                $new_img_name = $novo_nome . "-" . date("Y-m-d-H.i.s") . $ext;
                $img_upload_path = '../uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
            } else {
                $error = "O formato de imagem inválido.";
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
        $sql = "INSERT INTO projetos(nome, email, atividade, dataInicio, dataTermino, area, imagem, equipamentos, descricao) VALUES('$nome', '$email', '$atividade', '$dataInicio', '$dataTermino', '$area', '$new_img_name', '$equipamentos', '$descricao')";
        mysqli_query($conn, $sql);
        header ("Location: ../cadastro-sucess.php");
    }
?>
<?php
    include "db_conn.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $atividade = $_POST['atividade'];
    $dataInicio = $_POST['dataInicio'];
    $dataTermino = $_POST['dataTermino'];
    $area = $_POST['area'];
    $equipamentos = $_POST['equipamentos'];
    $descricao = $_POST['descricao'];

    $img_name = $_FILES['imagem']['name'];
    $img_size = $_FILES['imagem']['size'];
    $tmp_name = $_FILES['imagem']['tmp_name'];
    $img_error = $_FILES['imagem']['error'];


        if ($img_error === 0) {
            if ($img_size > 10000000) {
                $em = "O arquivo enviado é muito grande.";
                header ("Location: ../cadastro.php?error=$em");
            } else {

                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png"); 

                if (in_array($img_ex_lc, $allowed_exs)) {
                    date_default_timezone_set("Brazil/East");
                    $ext = strtolower(substr($_FILES['imagem']['name'],-4));

                    $new_img_name = date("Y-m-d-H.i.s") . $ext;
                    $img_upload_path = '../uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                    $sql = "INSERT INTO projetos(nome, email, atividade, dataInicio, dataTermino, area, image_url, equipamentos, descricao)
                            VALUES('$nome', '$email', '$atividade', '$dataInicio', '$dataTermino', '$area', '$new_img_name', '$equipamentos', '$descricao')";
                    mysqli_query($conn, $sql);
                    header ("Location: ../cadastro-sucess.php");
                } else {
                    $em = "O formato de imagem inválido.";
                    header ("Location: ../cadastro.php?error=$em");
                }
            }
        } else {
            $em = "É necessário enviar uma imagem.";
            header ("Location: ../cadastro.php?error=$em");
        }

        if (empty($nome)) {
            $error = "O campo nome é necessário";
            header ("Location: ../cadastro.php?error=$error");
    
        } else {
            $nome = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $error = "Only letters and white space allowed";
            header ("Location: ../cadastro.php?error=$error");
            }
        }
    
?>
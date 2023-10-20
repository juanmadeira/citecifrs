<?php
    if (isset($_POST['submit']) && isset($_FILES['imagem'])) {
        include "db_conn.php";

        echo "<pre>";
        print_r($_FILES['imagem']);
        echo "</pre>";

        $img_name = $_FILES['imagem']['name'];
        $img_size = $_FILES['imagem']['size'];
        $tmp_name = $_FILES['imagem']['tmp_name'];
        $error = $_FILES['imagem']['error'];

        if ($error === 0) {
            if ($img_size > 10000000) {
                $em = "A imagem enviada é muito grande.";
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

                    $sql = "INSERT INTO projetos(image_url) 
                            VALUES('$new_img_name')";
                    mysqli_query($conn, $sql);
                    header ("Location: ../cadastro-sucess.php");
                } else {
                    $em = "Formato de imagem inválido.";
                    header ("Location: ../cadastro.php?error=$em");
                }
            }
        } else {
            $em = "É necessário enviar uma imagem!";
            header ("Location: ../cadastro.php?error=$em");
        }
    } else {
        header ("Location: ../cadastro.php");
    }
?>
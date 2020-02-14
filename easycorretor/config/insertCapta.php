<?php
include('conectDB.php');


$prop_name  =   isset($_POST['prop_name']) ? $_POST['prop_name'] : "";
$prop_tel =     isset($_POST['prop_tel']) ? $_POST['prop_tel'] : "";
$prop_tel2 =    isset($_POST['prop_tel2']) ? $_POST['prop_tel2'] : "";
$prop_email =   isset($_POST['prop_email']) ? $_POST['prop_email'] : "";
$edf_name =     isset($_POST['edf_name']) ? $_POST['edf_name'] : "";
$num_ap =       isset($_POST['num_ap']) ? $_POST['num_ap'] : "";
$bairro =       isset($_POST['bairro']) ? $_POST['bairro'] : "";
$finalidade =   isset($_POST['finalidade']) ? $_POST['finalidade'] : "";
$valor =        isset($_POST['valor']) ? $_POST['valor'] : "";



    $query = "INSERT INTO `imoveis`(`edificio`, `num_apartament`, `finalidade`, `value`, `bairro`, `prop_name`, `prop_tel1`, `prop_tel2`, `prop_email`)
    VALUES ('{$edf_name}','{$num_ap}','{$finalidade}','{$valor}','{$bairro}','{$prop_name}','{$prop_tel}','{$prop_tel2}','{$prop_email}'); ";


    if($result = mysqli_query($conexao, $query)){


      header('location: ../capta.php');


    }else{
        echo "Expenses could not be inserted";
        die();
    }

    //FUNCIONAAAA!!!



?>

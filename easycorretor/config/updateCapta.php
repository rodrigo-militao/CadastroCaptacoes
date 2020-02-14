<?php
include('conectDB.php');

$id_imovel  =   isset($_POST['imovel_id']) ? $_POST['imovel_id'] : "";
$prop_name  =   isset($_POST['prop_name']) ? $_POST['prop_name'] : "";
$prop_tel1 =     isset($_POST['prop_tel']) ? $_POST['prop_tel'] : "";
$prop_tel2 =    isset($_POST['prop_tel2']) ? $_POST['prop_tel2'] : "";
$prop_email =   isset($_POST['prop_email']) ? $_POST['prop_email'] : "";
$edf_name =     isset($_POST['edf_name']) ? $_POST['edf_name'] : "";
$num_ap =       isset($_POST['num_ap']) ? $_POST['num_ap'] : "";
$bairro =       isset($_POST['bairro']) ? $_POST['bairro'] : "";
$finalidade =   isset($_POST['finalidade']) ? $_POST['finalidade'] : "";
$valor =        isset($_POST['valor']) ? $_POST['valor'] : "";


$sql = "UPDATE imoveis SET edificio = '{$edf_name}', num_apartament = '{$num_ap}', 
finalidade = '{$finalidade}', value = '{$valor}', bairro = '{$bairro}', 
prop_name = '{$prop_name}', prop_tel1 = '{$prop_tel1}', prop_tel2 = '{$prop_tel2}', prop_email = '{$prop_email}'
WHERE imoveis . id_imovel = '{$id_imovel}'";


    if($result = mysqli_query($conexao, $sql)){


      header('location: ../capta.php');


    }else{
        echo "Expenses could not be inserted";
        die();
    }

    //FUNCIONAAAA!!!



?>

<?php 
include ('conectDB.php');


$contentID = $_POST['contentID'];
$sql = "DELETE FROM `imoveis` WHERE captacao_id = '$contentID'";

if($res = mysqli_query($conexao, $sql)){
    header('location: ../capta.php');
}
else{
    echo 'Não foi possível deletar. Cheque a query SQL.';
    die();
}


?>
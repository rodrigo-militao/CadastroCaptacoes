<?php 

include('conectDB.php');

$contentID = $_POST['contentID'];
$sql = "SELECT * FROM imoveis WHERE id_imovel = '$contentID'";

$res = mysqli_query($conexao, $sql);

while($row = mysqli_fetch_assoc($res)){
  
    $content = array();
    $content[0] = $row['id_imovel'];
    $content[1] = $row['prop_name'];
    $content[2] = $row['prop_tel1'];
    $content[3] = $row['prop_tel2'];
    $content[4] = $row['prop_email'];
    $content[5] = $row['edificio'];
    $content[6] = $row['num_apartament'];
    $content[7] = $row['bairro'];
    $content[8] = $row['finalidade'];
    $content[9] = $row['value'];

    
}
echo json_encode($content);
    

?>
<?php 

include ('conectDB.php');


$delete = isset($_POST['delete']) ? $_POST['delete'] : false;
$newitemlist = isset($_POST['newitemlist']) ? $_POST['newitemlist'] : false;
if ($delete){
    $sql = "DELETE FROM `todo_list` WHERE `todo_list`.`id_item` = $delete";

    $res = mysqli_query($conexao, $sql);
    
    echo json_encode(['status'=>'deleted']);
}

else if ($newitemlist){
    $sql = "INSERT INTO `todo_list` (`content_item`) VALUES ('{$newitemlist}')";

    if($res = mysqli_query($conexao, $sql)){
        echo json_encode(['status'=>'inserted']);
    }else{
        echo json_encode(['status'=>'Not inserted, check query']);
    }
}
else{
    echo json_encode(['status'=>'Nothing']);
}





?>
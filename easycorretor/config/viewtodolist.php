<?php 
include ('conectDB.php');

$sql = "SELECT * FROM todo_list ORDER BY id_item";
$value = "";
    if($res = mysqli_query($conexao, $sql)){
        if(mysqli_num_rows($res) > 0){
            while ($row = mysqli_fetch_array($res)){

$value .= "
<li>
<label id='todoitem'>
    <input type='checkbox'><i></i><span>".$row['content_item']."</span>
    <a href='#' id='itemdelete' onclick='javascript: deleteitem();' class='ti-close' data-id='".$row['id_item']."'></a>
</label>
</li>
";                                
         
            }
        }
    }

echo $value;

?>
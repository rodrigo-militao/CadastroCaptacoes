<?php 

include('config/conectDB.php');
$sql = "SELECT * FROM imoveis";
$res = mysqli_query($conexao, $sql);
$imo_num_rows = mysqli_num_rows($res);
// O código acima pega a quantidade de imóveis
include_once('config/header.php');
?>

        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-r-0 title-margin-right">
                            <div class="page-header">
                                <div class="page-title">
                                    <h1>Hello, <span>USUÁRIO</span></h1>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-4 p-l-0 title-margin-left">
                            <div class="page-header">
                                <div class="page-title">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Home</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <section id="main-content">
                        <div class="row">
                           <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Contatos de Captação</div>
                                            <div class="stat-digit"></i>5</div>
                                            <a href="capta.php" class="btn btn-warning">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Imóveis Cadastrados</div>
                                            <div class="stat-digit"></i><?php echo $imo_num_rows; ?></div>
                                            <a href="capta.php" class="btn btn-warning">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Clientes à Procura de Imóveis</div>
                                            <div class="stat-digit"></i>15</div>
                                            <div class="stat-digit"> <a href="clientes.php" class="btn btn-primary">Ver todos</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                        </div>
                        <!-- /# row -->
                    
                       <!-- TODO LIST HERE WE GO! --> 
                        
                        

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Coisas a fazer</h4>
                                    </div>
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                              <ul id="ultodolist">
                                                </ul>
                                            </div>
                                            
                                            <input type="text" id="newitem" name="newitem" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'..." >
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <!-- TODO LIST HERE WE GO! --> 
                        
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Focos para Captação </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Product</th>
                                                        <th>quantity</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href=""><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>Lew Shawon</td>
                                                        <td><span>Dell-985</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href=""><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>Lew Shawon</td>
                                                        <td><span>Asus-565</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-warning">Pending</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href=""><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>lew Shawon</td>
                                                        <td><span>Dell-985</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href=""><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>Lew Shawon</td>
                                                        <td><span>Asus-565</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-warning">Pending</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href=""><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>lew Shawon</td>
                                                        <td><span>Dell-985</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-success">Done</span></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="round-img">
                                                                <a href=""><img class="w-35" src="assets/images/avatar/1.jpg" alt=""></a>
                                                            </div>
                                                        </td>
                                                        <td>Lew Shawon</td>
                                                        <td><span>Asus-565</span></td>
                                                        <td><span>456 pcs</span></td>
                                                        <td><span class="badge badge-warning">Pending</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <!-- /# row -->      
                       
                               
                                               
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer">
                                    <p>2020 © Rodrigo Militão. - <a href="#">militaodev.com</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

<?php include('config/footer.php'); ?>
        
<script>
    
$(document).ready(function(){
    
    viewlist();
    
    $('input#newitem').on('keypress', function(event) {

        if (event.which === 13 || event.keyCode === 13 || event.key === "Enter") {
             event.preventDefault();
            var content = $('input#newitem').val();
            $.ajax({
                type: 'POST',
                url: 'config/todolist.php',
                data: {newitemlist:content},
                success: function(data){
                $('input#newitem').val("");
                viewlist();
                }
            });
        }
    });

    
});
    
function deleteitem(){
    $(document).on('click', '#itemdelete', function(){
    var ID = $(this).attr('data-id');
          $.ajax({
              url:'config/todolist.php',
              method: 'post',
              data: {delete:ID},
              success: function(data){
                  data = $.parseJSON(data);
                  console.log(data.status);
                    viewlist();
              }
          });

  });
}
    

    
function viewlist(){
    $.ajax({
        url: 'config/viewtodolist.php',
        method: 'post',
        success: function(data){
            $('#ultodolist').html(data);
        }
    });
}
    

</script>
<?php
/* Session, etc */
include 'config/conectDB.php';
$_GET['fil'] = isset($_GET['fil']) ? $_GET['fil'] : '';

include 'config/header.php';

    $sql = "SELECT * FROM `imoveis` ORDER BY dataCadastro DESC";
    if($res = mysqli_query($conexao, $sql)):
        if(mysqli_num_rows($res) > 0):
            while ($row = mysqli_fetch_array($res)): 
?>
  
<style>
    #modal_update > .modal-body{
        width: 130% !important;
    }    
</style>
   
    <div class="content-wrap">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Edificio / Apartamento</th>
                        <th>Nome do Proprietário</th>
                        <th class="text-center">Data da Captação</th>
                        <th>Bairro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-6 col-md-4">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><a href="imoSingle.php?id=<?php echo $row['id_imovel']; ?>"><?php echo $row['edificio']; ?> Ap: <?php echo $row['num_apartament']; ?>, <?php echo $row['finalidade']; ?></a></h4>
                            </div>
                        </div></td>
                        <td class="col-sm-3 col-md-3" style="text-align: center">
                            <strong> <a href="#"><?php echo $row['prop_name']; ?></a></strong>
                            <p id="prop_tel"><?php echo $row['prop_tel1']; ?></p>
                            <p id="prop_tel2"><?php echo $row['prop_tel2']; ?></p>
                        </td>
                        <td class="col-sm-3 col-md-3 text-center"> <strong><?php echo date('d/m/Y G:i',strtotime($row['dataCadastro'])); ?></strong> </td>
                        
                       <td class="col-sm-3 col-md-3 text-center"><?php echo $row['bairro']; ?></td>
                        
                        <td class="col-sm-3 col-md-3">
                        <button type="button" class="btn btn-warning" id="btn_edit" data-toggle='modal' onClick="javascript: get_record();" data-id="<?php echo $row['id_imovel']; ?>">
                         Atualizar
                        </button></td>
                        
                        <td class="col-sm-3 col-md-3">
                        <button type="button" id="btn_delete" class="btn btn-danger" onClick="javascript: deleteCapta();" data-id="<?php echo $row['id_imovel']; ?>">
                         Deletar
                        </button></td>
                    </tr>

<?php
                                
        endwhile; //Fecha While $res
    endif; //Fecha If mysqli_num_rows $res
endif;//Fecha if($res)
?>
                  
        <!-- UPDATE Modal -->
       <div class="modal" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
               <div class="modal-content">
                   <div class="modal-header" style="text-align: center;">
                       <h5 class="modal-title" id="TituloModalCentralizado">Atualizar Imóvel.</h5>

                       <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
           <div class="modal-body">

            <div id="form">
            <form method="post" action="config/updateCapta.php">
             <input type="hidden" name="imovel_id" id="imovel_id">
            
            <div class="align-items-center">
                
            <div class="form-group" id="prop_box">
                <div class="input-group">
                    <label for="prop_name" class="col-md-3">* Nome do Proprietário</label>
                    <input type="text" class="form-control col-md-4" required id="up_prop_name" name="prop_name">
                </div>
            </div>
            <div class="form-group" id="prop_box">
                <div class="input-group">
                    <label for="prop_tel" class="col-md-3">* Telefone do Proprietário</label>
                    <input type="text" class="form-control col-md-4" required id="up_prop_tel" name="prop_tel">
                </div>
            </div>
            <div class="form-group" id="prop_box">
                <div class="input-group">
                    <label for="prop_tel2" class="col-md-3">Telefone do Proprietário (Caso houver)</label>
                    <input type="text" class="form-control col-md-4"  id="up_prop_tel2" name="prop_tel2">
                </div>
            </div>
            <div class="form-group" id="prop_box">
                <div class="input-group">
                    <label for="prop_email" class="col-md-3">E-mail do Proprietário (Caso houver)</label>
                    <input type="text" class="form-control col-md-4"  id="up_prop_email" name="prop_email">
                </div>
            </div>

            <div class="form-group" id="edf_box">
                <div class="input-group">
                    <label for="edf_name" class=" col-md-3">* Nome do Prédio / Apartamento</label>
                    <input type="text" required class="form-control col-md-4" name="edf_name" id="edf_name" placeholder="" maxlength="255">
                    <input type="text"  class="form-control col-md-2" name="num_ap" id="num_ap" placeholder="Ex: 1604" maxlength="5">
                </div>
            </div>
            <div class="form-group" id="bairro">
                <div class="input-group">
                    <label for="bairro" class="col-md-3">Bairro</label>
                    <input type="text"  class="form-control col-md-3" name="bairro" id="up_bairro">
                </div>
            </div>
            <div class="form-group" id="finalidade">
                <div class="input-group">
                    <label for="finalidade" class=" col-md-3">* Finalidade</label>
                    <select name="finalidade" id="finalidade" class="form-control col-md-3">
                        <option value="Aluguel">Aluguel</option>
                        <option value="Venda">Venda</option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="valor">
                <div class="input-group">
                   <label for="valor" class=" col-md-3">Valor total com taxas: R$</label>
                    <input type="text" class="form-control col-md-2"  id="up_valor" name="valor" maxlength="15">
                </div>
            </div>


            <div class="input-group" id="action">
                <label for="saveButton" class="sr-only">Inserir</label>
                <input type="submit" value="Inserir" class="btn btn-success" id="saveButton">
            </div>
        </div>
            
            
        </form>
                 </div>

           </div> <!-- END MODAL BODY -->
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
               </div>

               </div>
           </div>
       </div> <!-- END MODAL -->                  

                  
                   
<?php include ('config/footer.php');  ?>


<script>
    
function get_record(){
    $(document).on('click', '#btn_edit', function(){
        
        var ID = $(this).attr('data-id');
        $.ajax({
            url: './config/get_data.php',
            method: 'post',
            data: {contentID:ID},
            dataType: 'JSON',
            success: function(data){
                console.log(data);
                $('#imovel_id').val(data[0]);
                $('#up_prop_name').val(data[1]);
                $('#up_prop_tel').val(data[2]);
                $('#up_prop_tel2').val(data[3]);
                $('#up_prop_email').val(data[4]);
                $('#edf_name').val(data[5]);
                $('#num_ap').val(data[6]);
                $('#up_bairro').val(data[7]);
                $('#finalidade').val(data[8]);
                $('#up_valor').val(data[9]);

                $("#modal_update").modal();

            }
            
        }).fail(function(xhr, desc, err) {
        /*
         * Caso haja algum erro na chamada Ajax,
         * o utilizador é alertado e serão enviados detalhes
         * para a consola javascript que pode ser visualizada
         * através das ferramentas de desenvolvedor do browser.
         */
        alert('Uups! Ocorreu algum erro!');
        console.log(xhr);
        console.log("Detalhes: " + desc + "nErro:" + err);
    });
    })
}

   
function deleteCapta(){
    $(document).on('click', '#btn_delete', function(){

    var ID = $(this).attr('data-id');

    if (confirm('Você quer deletar este item?')) {
      $.ajax({
          url:'./config/deleteCapta.php',
          method: 'post',
          data: {contentID:ID},
          success: function(){
              location.reload();
          }
      });
    }else{
        alert("Não deletado.");
      return false; 
    }
  });
}
    
    $(document).ready(function(){
        get_record();
    });
                    
</script>
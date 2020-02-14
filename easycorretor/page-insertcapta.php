<?php
/* Session, etc */
include 'config/conectDB.php';


include 'config/header.php';
?>
<style>
    input, select{
        border: 1px solid #969696 !important;
        border-radius: 4px !important;
    }
</style>               
                                
<div class="content-wrap">
    <div class="row">
        <div class="col-sm-10 col-md-8 col-md-offset-1">
        
        <div class="card">
        <div class="card-title"><h3>Inserir nova Captação</h3><p>Itens marcados com * são obrigatórios</p></div>
        
        <br><br>
        
        <form method="post" action="config/insertCapta.php">
            
            <div class="align-items-center">

            <div class="form-group" id="prop_box">
                <div class="input-group">
                    <label for="prop_name" class="col-md-3">* Nome do Proprietário</label>
                    <input type="text" class="form-control col-md-4" required id="prop_name" name="prop_name">
                </div>
            </div>
            <div class="form-group" id="prop_box">
                <div class="input-group">
                    <label for="prop_tel" class="col-md-3">* Telefone do Proprietário</label>
                    <input type="text" class="form-control col-md-4" required id="prop_tel" name="prop_tel">
                </div>
            </div>
            <div class="form-group" id="prop_box">
                <div class="input-group">
                    <label for="prop_tel2" class="col-md-3">Telefone do Proprietário (Caso houver)</label>
                    <input type="text" class="form-control col-md-4"  id="prop_tel2" name="prop_tel2">
                </div>
            </div>
            <div class="form-group" id="prop_box">
                <div class="input-group">
                    <label for="prop_email" class="col-md-3">E-mail do Proprietário (Caso houver)</label>
                    <input type="text" class="form-control col-md-4"  id="prop_email" name="prop_email">
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
                    <input type="text"  class="form-control col-md-3" name="bairro" id="bairro">
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
                    <input type="text" class="form-control col-md-2"  id="valor" name="valor" maxlength="15">
                </div>
            </div>


            <div class="input-group" id="action">
                <label for="saveButton" class="sr-only">Inserir</label>
                <input type="submit" value="Inserir" class="btn btn-success" id="saveButton">
            </div>
        </div>
            
            
        </form>
        
        </div>

        </div>
    </div>
</div>              
                  
                  
                   
<?php include ('config/footer.php');  ?>
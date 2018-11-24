
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Serviçais
                <button class="btn btn-success btn-fill" data-toggle="modal" data-target="#exampleModal" style="padding: 0px; margin-left: 13px;">novo</button>
            </h4>
        </div>
        <div class="content">
            
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Tipo de Serviçal</label>
                            <select class="form-control">
                                <option selected="<?=$s1?>" value="1">Agente</option>
                                <option selected="<?=$s2?>" value="0">Funcionário Zona Azul</option>
                                <option selected="<?=$s3?>" value="2">Administrador</option>
                                <option selected="<?=$s4?>"value="-1">Todos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <br>
                            <button style="margin-top: 5px;" type="submit" class="btn search btn-info btn-fill">Buscar</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                       
                    </div>
                </div>                                    
           
            <div class="table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th>Tipo</th>                        
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $key => $usuario) { ?>
                            <tr>
                                <td><?= $usuario->nome ?></td>
                                <td><?= $usuario->email ?></td>
                                <td><?= $usuario->cpf ?></td>
                                <td><?php switch($usuario->nivel){
                                    case 0: echo "Zona Azul"; break;
                                    case 1: echo "Agente"; break;
                                    default: echo "Administrador"; 
                                } ?></td>
                               
                            </tr>
                        <?php } ?>
                       <?php if(!count($usuarios)) {?>
                            <tr><td colspan="4">Nenhum registro</td></tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Serviçal</h5>
        
      </div>
      <div class="modal-body">
        <form action="<?= base_url('index.php/Servical/insert') ?>" method="POST" >                                
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Tipo</label>
                        <select name="nivel" id="select0" class="form-control">
                            <option value="0" >Semav</option>
                            <option value="1">Zona Azul</option>
                            <option value="2" >Administrador</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-md-7">
                    <div class="form-group">
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" name="cpf" data-mask="000.000.000-00" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control senha1" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Confirme a Senha</label>
                            <input type="password" name="senha" class="form-control senha2" required>
                        </div>
                    </div>
                </div>
            </div> 
            <input type="submit" id="enviar" name="enviar" style="display: none;">                                
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" id="confirmar">Confirmar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $('.modal').on('shown.bs.modal', function() {
      //Make sure the modal and backdrop are siblings (changes the DOM)
      $(this).before($('.modal-backdrop'));
      //Make sure the z-index is higher than the backdrop
      $(this).css("z-index", parseInt($('.modal-backdrop').css('z-index')) + 1);
    });

    $('#confirmar').click(function(){
        if($('.senha1').val() == $('.senha2').val()){
            $('#enviar').trigger('click')
        }
        else{
            notificacao.showNotification('bottom','right', 4, "As senhas não conferem!", 'pe-7s-attention')
        }

    })

    <?php if($this->session->flashdata('notificacao')){ ?>
        notificacao.showNotification('bottom','right', "<?= $this->session->flashdata('notificacao')['cor'] ?>", "<?= $this->session->flashdata('notificacao')['mensagem'] ?>", "<?= $this->session->flashdata('notificacao')['icone'] ?>")
    <?php } ?>

    $('.search').click(function(){
        let usuario = $('select option:selected').val()
        let link = "<?= base_url('/index.php/Servical/index/') ?>" + usuario
        location.href = link

    })
</script>
<script src="<?= base_url('assets/js/jquery.mask.js') ?>"></script>
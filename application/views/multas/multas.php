
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Multas                
            </h4>
        </div>
        <div class="content">
                                
           
            <div class="table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>Aplicador</th>
                        <th>Veículo</th>
                        <th>Placa do Veículo</th>
                        <th>Estado</th>
                        <th>Responsável pelo Veículo</th>
                        <th>Data</th>
                        
                    </thead>
                    <tbody>
                        <?php foreach ($multas as $key => $multa) {?>
                            <tr>
                               <td><?= $multa->aplicador?></td>
                               <td><?= $multa->veiculo_nome?></td>
                               <td><?= $multa->placa?></td>
                               <td><?= $multa->estado ?></td>
                               <td><?= $multa->usuario?></td>
                               <td><?= date('d/m/Y  H\hi', strtotime($multa->_data))?></td>
                            </tr>
                        <?php }?>
                       <?php if(!count($multas)) {?>
                            <tr><td colspan="4">Nenhum registro</td></tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


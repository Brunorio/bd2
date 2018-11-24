
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Vendas                
            </h4>
        </div>
        <div class="content">
                                
           
            <div class="table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>Funcionario</th>
                        <th>Cliente</th>
                        <th>Tempo</th>
                        <th>Data</th>
                        
                    </thead>
                    <tbody>
                        <?php foreach ($vendas as $key => $venda) {?>
                            <tr>
                               <td><?= $venda->funcionario ?></td>
                               <td><?= $venda->cliente ?></td>
                               <td><?= $venda->tempo ?></td>                           
                               <td><?= date('d/m/Y  H\hi', strtotime($venda->_data))?></td>
                            </tr>
                        <?php }?>
                       <?php if(!count($vendas)) {?>
                            <tr><td colspan="4">Nenhum registro</td></tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


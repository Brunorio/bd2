<?php 
	require('funcoes.php');

	$json = file_get_contents('php://input');
    if($json){
    	$obj = json_decode($json);
    	$placa = $obj->placa;
        $estado = $obj->estado;
        $id_funcionario = $obj->id_funcionario;

       
/*
        $placa = '1';
        $estado = 'SP';
        $id_funcionario = 30;*/

        $veiculo = getPlaca($placa, $estado);
        
        if($veiculo['result'] == 'success'){

    		$estacionar = getEstacionar($veiculo['id']);
    		if($estacionar['result'] == 'success'){
                $dataNow = new DateTime(date('Y-m-d H:i:s'));
                $dataFim = new DateTime($estacionar['fim']);
                if($dataNow > $dataFim){
                    aplicarMulta($id_funcionario, $veiculo['id'], date('Y-m-d H:i:s'));
        			echo json_encode(array(            
                    	"result" => "invalid"
                	));
                } else {
                    echo json_encode(array(            
                        "result" => "success"
                    ));
                }
    		} else {
    			echo json_encode(array(            
                	"result" => "invalid"
            	));
    		}
        	
        } else {
        	echo json_encode(array(            
            	"result" => "failed"
        	));
        }
    } else{
        echo json_encode(array("result" => "error"));
    }
?>